<?php 
session_start();

$serverName = "localhost";
$serverUsername = "root";
$serverPassword = "";
$serverDB = "auth_db";

$DB = mysqli_connect($serverName,$serverUsername,$serverPassword,$serverDB);

?>