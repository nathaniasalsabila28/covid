<?php
session_start(); 

include "koneksi.php"; 

$username = mysqli_real_escape_string($kon, $_POST['username']); 
$password = mysqli_real_escape_string($kon, $_POST['password']); 
$sql = mysqli_query($kon, "SELECT * FROM login WHERE username='".$username."' AND password='".$password."'");
$data = mysqli_fetch_array($sql); 


if( ! empty($data)){ 

  $_SESSION['username'] = $data['username']; 

  
  setcookie("message","delete",time()-1);

  header("location: data.php"); 
}else{ 
  setcookie("message", "", time()+3600);
  
  header("location: data.php"); 
}
?>