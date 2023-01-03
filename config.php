<?php

session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "prodajalko";
$port = 3307;


$conn = mysqli_connect($host, $user, $pass, $db, $port);