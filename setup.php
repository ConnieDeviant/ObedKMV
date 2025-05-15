<?php

$host="localhost";
$user="root";
$password="";
$db_name="kmv_db";

$link=mysqli_connect($host, $user, $password, $db_name);
$link->query("SET NAMES utf-8");


?>