<?php
	$conn = mysqli_connect('localhost','root','');
	if(!$conn)
	{
		echo 'not connected';
	}
	if(!mysqli_select_db($conn,'msa'))
	{
		echo 'db  not selected';
	}
	session_start();
	$s_name = $_POST['user'];
	$pass = $_POST['pass'];
	//$que = "select *from techarlogin where password= '$password' and username= '$username'"	;
	$que = "select s_id from studentdetails where name = '$s_name' and password = '$pass' "; 
	//$que= "INSERT INTO studentdetails "." (name,class,phone_number,address,password)"." VALUES "."('$s_name','$s_class','$s_phone','$s_address','$pass')";
	$result = mysqli_query($conn,$que);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $active = $row=['active'];
	$count = mysqli_num_rows($result);
	//mysqli_query($conn,$que);
				
	if($count == 1)
	{
		//session_register("user");
		$_SESSION['login_user'] = $s_name;
		header("location: home.php");
	}
	else
	{
		$error = "incorrect password and login";
		echo $error;
	}
	
?>