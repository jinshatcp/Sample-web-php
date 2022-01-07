<?php 

require 'connection.php';

$id = $_POST["number"];



$dltqry = "DELETE FROM contact WHERE SN=$id";


if(mysqli_query($connection,$dltqry)){
    echo '<h3 style="background-color:tomato;">deleted</h3>';
}else{
    echo "somethimg went wrong";
}







?>
