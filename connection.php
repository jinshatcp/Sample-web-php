<?php 
$host ="localhost";
$password = "";
$user = "root";
$databse = "db1";


$connection = new mysqli($host , $user, $password, $databse);

if($connection){

    echo " <h2><u>Connected </u></h2>";
}else{


    echo " Establishing  DB Connection Error ";
}
