<?php

$link = mysqli_connect("localhost", "root", "", "youtube");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$userid = mysqli_real_escape_string($link, $_REQUEST['username']);
$pwd = mysqli_real_escape_string($link, $_REQUEST['password']);
 
// attempt insert query execution
$sql = "select userid,password from officials where userid='$userid' and password='$pwd'";
$result = mysqli_query($link,$sql);

         
         header("location: complaint.html");
      
 
// close connection
mysqli_close($link);
?>