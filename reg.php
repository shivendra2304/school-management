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
	$s_name = $_POST['name'];
	$s_class = $_POST['class'];
	$s_address = $_POST['add'];
	$s_phone= $_POST['phone'];
	$m_pass = $_POST['teacherpass'];
	$pass= rand(0,255);
	$_que1 = "SELECT *from masterpassword where password= '$m_pass'";
	$result1 = mysqli_query($conn,$_que1);
	 $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
	  $active1 = $row1=['active1'];
	  $count1 = mysqli_num_rows($result1);
	 if($count1 == 1){
	//$que = "select *from techarlogin where password= '$password' and username= '$username'"	;
	$que= "INSERT INTO studentdetails "." (name,class,phone_number,address,password)"." VALUES "."('$s_name','$s_class','$s_phone','$s_address','$pass')";
	mysqli_query($conn,$que);
				
	if(mysqli_affected_rows($conn) > 0){
	echo "<p>Student Added</p>";
	echo "id = ";
	$sql = "SELECT s_id FROM studentdetails WHERE name='$s_name' and phone_number = '$s_phone'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
					// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['s_id'];
	}
	}
	echo "    password = " ;
	echo $pass;
} else {
	echo "Student NOT Added<br />";
	//echo mysqli_error ($conn);
	}
	 }
	 else
	 { echo "Wrong Master Password !!<br />";
	 }
		 
	header ("refresh:5;url=registration.php");
?>