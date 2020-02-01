<?php

$link = mysqli_connect("localhost", "root", "", "youtube");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$username = mysqli_real_escape_string($link, $_REQUEST["userid"]);
$password = mysqli_real_escape_string($link, $_REQUEST["password"]);

// attempt insert query execution
$sql = "SELECT username,password FROM account WHERE username='".$username."' and password='".$password."'";

$result = mysqli_query($link,$sql);

$count = mysqli_num_rows($result);


if($count !=0) {
         
         header("location: complaint.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
 
 
// close connection
mysqli_close($link);
?>