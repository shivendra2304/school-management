<?php
session_start();
if(!$_SESSION['logged_in']){
session_destroy();
header("Location: teachercorner.php");
}
?>
<html>
	<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		//tr:hover {background-color: blue}
		table, td, th {    
		border: 5px solid #ddd;
		text-align: center;
		}
		table {
		border-collapse: collapse;
		width: 100%;
		}
		div.scroll
		{
			height:60%;  
			overflow:scroll;
		}
		th, td {
		padding: 15px;
		}
		</style>
		
		<title>Teacher Login MSA </title>
		
		<link rel="icon" href="msalogo.jpg">
		
	</head>
	<body background="homepic.jpg">
	</body>
			<img class="img-round" src="mbaba.jpg" alt="HTML5 Icon" width="100" height="100" style= "position:absolute;top:10; left:100; z-index=3">
		</body>
		<h1><center><b>Mahakaleshwar Science Academy, Sarmathura</b></center></h1>
		<a href="https://www.facebook.com/msa1234567/?fref=ts" target="_blank"><center>
			<img src="msalogo.jpg"  style="width:42px;height:42px;border:0;float: top right;"/>
		</a>
		<a href="https://www.facebook.com/msa1234567/?fref=ts" target="_blank">
			<img src="fb.jpg"  style="width:42px;height:42px;border:0;float: top right;"/>
		</a>
		<a href="https://www.youtube.com/channel/UC67DxdVMFKkWKfFPA-nN7YA" target="_blank">
			<img src="youtube.png" style="width:42px;height:42px;border:0;float: top right;"/>
		</a>
		</center>
		
	
		<hr>
		<body style="background-color:black">
		<center>
		<button type="button"style=" background-color:pink" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/home.php">Home</button>

		<button type="button"style=" background-color:pink" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/contact.php">Contact Us</button>

		<button type="button"style=" background-color:pink" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://www.facebook.com" target="_blank">Current Batch Details</a></button>

		<button type="button"style=" background-color:pink" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/teachercorner.php">Teacher's Corner</a></button>
		<button type="button"style=" background-color:pink" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/student.php">student's Corner</a></button>
		
		<button type="button"style=" background-color:pink" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white">Gallery</a></button>
	
		</center>
		</body>
		
		
		<hr>
		
		
		<body>
			<div class="scroll">
			<table>
				<tr>
					<th style="color:blue"> Student ID </th>
					<th style="color:blue">  Name </th>
					<th style="color:blue">  Class </th>
					<th style="color:blue">  Address </th>
					<th style="color:blue">  Phone </th>
					<th style="color:blue">  Fee Paid </th>	
					
				</tr>
				
				<tbody>
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
					$sql = "SELECT s_id, name, class, address, phone_number,fee FROM studentdetails";
					$result = mysqli_query($conn,$sql);
					if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td> <b>".$row['s_id']."</b></td>";
						echo "<td><b>".$row['name']."</b></td>";
						echo "<td><b>".$row['class']."</b></td>";
						echo "<td><b>".$row['address']."</b></td>";
						echo "<td><b>".$row['phone_number']."</b></td>";
						echo "<td><b>".$row['fee']."/-Rs</b>";
						?>
						<form method="post" action="feeadd.php">
			 <input type = "submit" value="Add Fee">
			</form></td>
			<?php
				echo "</tr>";
					}
					}else {
					echo "0 results";
					}
					mysqli_close($conn);
				
				?>
				</tbody>
				</table>
				</div>
		</body>
	</body>
	<body>
			<center>
			<form method="post" action="newpass.php">
			 <input type = "submit" value="Change Password(student)">
			</form>
			<form method="post" action="registration.php">
			 <input type = "submit" value="Registration">
			</form>
			<form method="post" action="logoutteacher.php">
			<input type= "submit" value="Logout">
			</form>
			</center>
	</body>
		<?php
		
		session_destroy();
		?>
</html>

