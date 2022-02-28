<?php
$sname="localhost";
$unamee="root";
$password="";
$db_name="test";



$conn=mysqli_connect($sname,$unamee,$password,$db_name);

if(!$conn)
{
	echo "Connection failed!";
}








?>
