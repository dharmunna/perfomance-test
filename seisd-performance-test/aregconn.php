<?php
include("connection.php");

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['emailaddress'];
  $code= $_POST['code'];
  $pass = $_POST['psw'];
  
  if($name == ""  || $username == "" || $pass == "" || $email == "" ||$code=="") {
echo "All fields should be filled. Either one or many fields are empty.";}
if ($code == "2020") {
$insert="INSERT INTO admintable(Name , Username , Email ,AdminCode, Password) VALUES('$name', '$username', '$email', '$code', md5('$pass'))";




if (mysqli_query($mysqli, $insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($mysqli);
}

}
}

?>