<?php
$host ="localhost";
$username ="root";
$password ="";
$dbname ="student";

$dbconnection =mysqli_connect($host,$username,$password,$dbname);

if(!$dbconnection){
    die("connection".mysqli_connect_error());
}


?>