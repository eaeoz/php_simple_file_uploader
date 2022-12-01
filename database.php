<?php
$servername='localhost';
$username='root';
$password='';
$dbname="crud";
$conn=mysqli_connect('localhost','test','test','db4');
if(!$conn){
	die('Could not Connect My Sql:' .mysql_error());
}
?>