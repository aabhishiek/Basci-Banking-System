<?php

$server="localhost";
$user="root";
$password="";
$db="bank";

$con=mysqli_connect($server,$user,$password,$db);

if($con){
	//echo "Connection successful";
}else{
	echo "No Connection";
}

?>