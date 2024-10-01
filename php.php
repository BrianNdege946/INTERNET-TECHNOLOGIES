<?php
$servername="localhost";
$cookie="cookie_name";
$quantity="quantity";
$country="country";
$password="password";
$dbname="users";
$conn=new mysqli ($servername, $cookie, $quantity, $country, $password, $dbname);
if ($conn->connection_error){
    die ("connection failed"
    $conn->connectio_error);
}
$cookie=$POST['cookie'];
$quantity=$POST['quantity'];
$country=$POST['country'];
$password=$POST['password'];
$sql="INSERT INTO my_database (cookie, quantity, country, password)
VALUES ('cookie', 'quantity', 'country', 'password')";
if ($conn->query($sql)===TRUE) {
echo "Record has successfully been created";
}else {echo "error occured"
$conn->error;}
$conn->close();
?>