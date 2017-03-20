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
	$id=$_POST['id'];
	$s_name = $_POST['name'];
	$s_class= $_POST['class'];
	$s_phone= $_POST['phone'];
	$newpass = $_POST['newpass'];
	//$s_phone= $_POST['phone'];
	//$pass= rand(0,255);
	$que="UPDATE studentdetails SET password='$newpass' WHERE s_id = '$id' and name='$s_name' and class='$s_class' and phone_number = '$s_phone'";
	//$que = "select *from techarlogin where password= '$password' and username= '$username'"	;
	//$que= "INSERT INTO studentdetails "." (name,class,phone_number,address,password)"." VALUES "."('$s_name','$s_class','$s_phone','$s_address','$pass')";
	mysqli_query($conn,$que);
				
	if(mysqli_affected_rows($conn) > 0){
	echo "<p>Changes saved!</p>";
	//echo "password = " ;
	//echo $pass;
} else {
	echo "Employee NOT Added<br />";
	//echo mysqli_error ($conn);
	}
	header ("refresh:5;url=student.php");
?>