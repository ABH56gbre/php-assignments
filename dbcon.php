<?php
$host="localhost";
$username="root";
$password="";
$database="register_users";

$con= mysqli_connect("$host", "$username", "$password", "$database");

if(!$con)
    {
        echo "Error:unable to connect to MySQL.";
        
        die();
    }

else{
        echo "Connection successful";
};








?>