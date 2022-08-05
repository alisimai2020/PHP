<?php
session_start();

include 'config/dbconfig.php';
$delete_id =$_GET["delete"];
$res =mysqli_query($dbconnection,"delete from tbl_college where Id ='$delete_id'") or die($dbconnection->error);
if($res){
    // $_SESSION['delete']="<div class='success'> Record has been successfully deleted!</div>";
    header("location:College.php");
}

?>