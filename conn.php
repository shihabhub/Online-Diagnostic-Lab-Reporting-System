<?php
//Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$db="registration";
//Check Connection
$conn = new mysqli($servername, $username, $password, $db);
if(!$conn){
 die ("Error on the Connection" . $conn->connect_error);
}