<?php


$conn=mysqli_connect('localhost','root','','logintest');

if(!$conn){
	die("Connection fsailed: ".mysqli_connect_error());
}
?> 