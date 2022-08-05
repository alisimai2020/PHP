<?php
session_start();
include('config/dbconfig.php');

if(isset($_POST['submit'])){
    $Collegename =$_POST['college'];
    $shortName =$_POST['short'];
    $id =$_POST['collegeID'];

   $update =mysqli_query($dbconnection,"UPDATE tbl_college SET College_Name ='$Collegename ', Short_Name = '$shortName' WHERE Id =$id ") or die(mysqli_erorr());
    if($update){
        header("location:College.php");
    }
}



?>