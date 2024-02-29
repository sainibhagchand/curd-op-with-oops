<?php
class DB{
  public function connect(){

$servername = "localhost";
$username = "root";
$password = "";
$database = "srms";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);


return $conn;
}
}