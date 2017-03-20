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
	$s_id = $_POST['id'];
	$s_fee = $_POST['amount'];
	$t_pass = $_POST['tpass'];
	$m_pass = $_POST['mpass'];
	$pass= rand(0,255);
	$_que1 = "SELECT *from masterpassword where password= '$m_pass'";
	$result1 = mysqli_query($conn,$_que1);
	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
	$active1 = $row1=['active1'];
	$count1 = mysqli_num_rows($result1);
	if($count1 == 1){
		$_que1 = "SELECT *from teacherlogin where password= '$t_pass'";
		$result1 = mysqli_query($conn,$_que1);
		$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
		$active1 = $row1=['active1'];
		$count1 = mysqli_num_rows($result1);
		if($count1 == 1)
		{
					$newfee =  $s_fee;
					$que="UPDATE studentdetails SET fee='$newfee' WHERE s_id = '$s_id'";
					mysqli_query($conn,$que);
				
					if(mysqli_affected_rows($conn) > 0){
						echo "<p>Changes saved!</p>";
						//echo "password = " ;
						//echo $pass;
					} else {
							echo "Changes not saved<br />";
						//echo mysqli_error ($conn);
					}
				}
			
		else
		{
			echo"Wrong Teacher Password!! ";
		}
	}
	else
	{ 
		echo "Wrong Master Password !!<br />";
	}
		 
//	header ("refresh:2;url=feeadd.php");
?>