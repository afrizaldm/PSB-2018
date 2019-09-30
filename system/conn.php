<?php

$username = "root";
$password = "";
$hostname = "localhost";
$database = "";

$dbh = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);