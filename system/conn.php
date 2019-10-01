<?php

$username = "root";
$password = "";
$hostname = "localhost";
$database = "pendaftaran_online";

$db = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);