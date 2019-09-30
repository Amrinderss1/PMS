<?php
	session_start();

	$con=mysql_connect("localhost","root","");

	mysql_select_db("userregistration");
	
	$uname=$_POST['name'];
	$email=$_POST['email'];
	$phno=$_POST['phone'];
	$pass=$_POST['password'];

	$s="select * from usertable where email='$email'";

	$result=mysql_query($s, $con);
	$row=mysql_fetch_assoc($result);
	if($row>0)
	{
		echo "This Email ID Is Already Taken By Another User";
	}
	
	else
	{
		$reg="insert into usertable(name, email, phno, password) values('".$uname."','".$email."','".$phno."','".$pass."')";
		//$reg= "INSERT INTO 'usertable'(name,email,phno, password) VALUES ($uname,$email,$phno,$pass)";
		//$reg= "INSERT INTO 'usertable' VALUES ("$_POST['name']",,"$_POST['email']","$_POST['phone']","$_POST['password']")";
		$retval=mysql_query($reg, $con);
		if(!$retval)
		{
			die("record could not be inserted ".mysql_error());
			exit;
		}
		echo "Congratulations Your Registration Is Sucessfully Accepted";
	}
?>