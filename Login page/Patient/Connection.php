<?php 
$hostname='localhost';
$username='root';
$password='';
$DATABASE='Hospital';

$connect=mysqli_connect($hostname,$username,$password,$DATABASE);
if(!$connect){

    die("Connection failed ..".mysqli_connect_error());
}
?>