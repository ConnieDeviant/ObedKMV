<?php

function cleanValue($value)
{
  return htmlentities(trim(strip_tags(stripslashes($value))), ENT_NOQUOTES, "UTF-8");
}

function emailForm($emails)
{
  // Parse and clean data
  $sent = false;
  $name = cleanValue($_POST["name"]);
  $phone = cleanValue($_POST["phone"]);
  $adress = cleanValue($_POST["adress"]);
  if (empty($phone)) return $sent;
  $cart = [];
  try {
    $json = json_decode($_POST["cart"], true);
    foreach ($json as $item) {
      if (empty($item["name"])) continue;
      $cleaned = [
        "name" => cleanValue($item["name"]),
        "image" => cleanValue($item["image"]),
        "count" => cleanValue(($item["count"])) ?: 1,
        "price" => cleanValue($item["price"]) ?: 0,
      ];
      $cart [] = $cleaned;
    }
  } catch (Exception $e) {
  }
  $url = parse_url($_SERVER["HTTP_REFERER"]);
  $domain = $url["host"];
  $page = "{$url["scheme"]}://{$url["host"]}{$url["path"]}";
  parse_str($url["query"], $query);
  $utm = [];
  foreach (["medium", "source", "campaign", "term", "content"] as $type) {
    !empty($query["utm_$type"]) && $utm["utm_$type"] = $query["utm_$type"];
  }
  $ip = $_SERVER["REMOTE_ADDR"];

  // Construct email
  $subject = "Заявка от $phone с сайта $page";
  $body = "
    <html lang='ru'>
      <body style='font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Helvetica Neue, Arial, sans-serif;'>
        Имя: $name<br>
        Телефон: $phone<br>
        Адрес: $adress<br>
        IP: $ip<br>
  ";
  foreach ($utm as $k => $v) {
    $body .= "$k: $v<br>";
  }
  if (!empty($cart)) {
    $sum = 0;
    $body .= "<h3>Товары:</h3>";
    $body .= "<table border='0' style='width: 100%; max-width: 700px; border: none; border-collapse: collapse; margin-top: 20px;'>";
    foreach ($cart as $item) {
      $itemSum = $item['count'] * $item['price'];
      $sum += $itemSum;
      $body .= "
        <tr style='border: none; border-bottom: 1px solid #ccc; height: 50px;'>
          <td style='width: 70px;'><img style='height: 50px;' src='{$item['image']}'></td>
          <td>{$item['name']}</td>
          <td style='width: 100px; text-align: right;'>{$item['count']} x {$item['price']}</td>
          <td style='width: 100px; text-align: right;'>$itemSum</td>
        </tr>
      ";
    }
    $body .= "
      <tr style='height: 50px;'>
        <td colspan='3' style='text-align: right;'><b>Итого:</b></td>
        <td style='width: 100px; text-align: right;'><b>$sum</b></td>
      </tr>
    </table>
    ";
  }
  $body .= "</body></html>";

  // Send email
  try {
    $sent = mail($emails, $subject, $body, implode("\r\n", [
      "MIME-Version: 1.0",
      "Content-type: text/html; charset=utf-8",
      "From: no-reply@$domain",
    ]));
    if (!$sent) {
      throw new Exception("Email not accepted by MTA");
    }
    $sent = true;
  } catch (Exception $e) {
    error_log("Fail to send notification email: $e", 0);
  }
  return $sent;
}
