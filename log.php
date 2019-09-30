<?php
	session_start();

	$con=@mysql_connect("localhost","root","");

	@mysql_select_db("userregistration");

	$email=$_POST['email'];	
	$password=$_POST['password'];

	$s="select * from usertable where email='$email'";

	$result=mysql_query($s, $con);
	$row=mysql_fetch_assoc($result);
	if($row>0)
	{
			$s1="select * from usertable where password='$password'";
			$result1=mysql_query($s1, $con);
			$row1=mysql_fetch_assoc($result);
			if($row>0)
			{
				echo "Welcome Man";
			}
			else
			{
				echo "Your Password Is Incorrect ";
			}		
	}
	
	else
	{
		echo "User Doesn't Exist";
	}
	error_reporting(E_ALL ^ E_DEPRECATED);
?>