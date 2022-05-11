<?php
session_start();
include("connection.php");
$name=$_GET['f'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];
// $nhouse=$_GET['n'];
$country=$_GET['c'];
$state=$_GET['s'];
$city=$_GET['ci'];
$add=$_GET['a'];

if($_GET['submit'])
{
	if($name!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into owner(name,email,password,mobile_no,occupation,country,state,city,address) values('$name','$email','$pwd','$mob','$occ','$country','$state','$city','$add')";
		$data=mysqli_query($conn,$query);
		if($data)
			{
				// $last_id = mysqli_insert_id($conn);
				// if($last_id){
				// 	$code= rand(1,99999);
				// 	$owner_id= "EEM_".$code."_".$last_id;
				// 	$query = "UPDATE user SET owner_id = '"."'";
				// 	$res = mysqli_query($conn,$query);
				// }
			
				$_SESSION['uname']=$name;
				header('location:home.php');
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Sign up unsuccessfull')
        window.location.href='index.html';
        </script>";
			}
	}
}
?>