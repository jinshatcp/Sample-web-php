<?php 
 


require 'connection.php';



$name = $_POST["name"];

$email = $_POST["email"];
$phone = $_POST["phone"];

$insrtqry = "INSERT INTO contact(Name,Email,Phone) VALUES('$name', '$email', '$phone')";

if(mysqli_query($connection,$insrtqry)){
    echo "Inserted Successfully";

}else{
    echo "  <br> Failed";

}






?>
