<?php 
     // Connecting to MySQL DB
    $dbconnection=mysqli_connect('localhost','root','','vought_registration');
        if($dbconnection){
            echo "dbconnection success <br>";
        }else{
            die("DB Connection failed".mysqli_connect_error());
        }
?>