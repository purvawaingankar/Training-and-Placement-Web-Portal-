<?php
session_start();
$dbHost = 'localhost';
$dbName = 'placement portal';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>