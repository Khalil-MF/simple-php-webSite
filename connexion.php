<?php
$serverName='localhost';
$userName='khalil';
$password='admin';
$db='Etudiant';
$conn=mysqli_connect($serverName,$userName,$password,$db);
if(!$conn){
    die(mysqli_connect_error());
}
?>