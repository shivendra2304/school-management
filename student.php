<html>
	<head>
		<title>Student MSA </title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		//tr:hover {background-color: blue}
		table, td, th {    
		border: 2px solid #ddd;
		text-align: center;
		}
		table {
		border-collapse: collapse;
		
		}
		div.scroll
		{
			height:23%;  
			width:20%;
			overflow:scroll;
		}
		th, td {
		padding: 10px;
		}
		
		</style>
		<link rel="icon" href="msalogo.jpg">
	</head>
	<body background="homepic.jpg">
		<h1><center><b>Mahakaleshwar Science Academy,<br> Sarmathura</b></center></h1>
		
		</center>
		<body>
		</body>
		
		
		<body style="background-color:black">
		</body>
			<img class="img-round" src="mbaba.jpg" alt="HTML5 Icon" width="100" height="100" style= "position:absolute;top:10; left:100; z-index=3">
		</body>
		<center>
		<button type="button"style=" background-color:black" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/home.php">Home</button>

		<button type="button"style=" background-color:black" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/contact.php">Contact Us</button>

		<button type="button"style=" background-color:black" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://www.facebook.com" target="_blank">Current Batch Details</a></button>

		<button type="button"style=" background-color:black" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/teachercorner.php">Teacher's Corner</a></button>
		<button type="button"style=" background-color:black" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white" href="http://localhost/mukul/student.php">student's Corner</a></button>
		
		<button type="button"style=" background-color:black" class="btn btn-default; btn btn-primary btn-sm""><a style="color:white">Gallery</a></button>
		<a href="https://www.facebook.com/msa1234567/?fref=ts" target="_blank">
			<img src="msalogo.jpg"  style="width:42px;height:42px;border:0;float: top right;"/>
		</a>
		<a href="https://www.facebook.com/msa1234567/?fref=ts" target="_blank">
			<img src="fb.jpg"  style="width:42px;height:42px;border:0;float: top right;"/>
		</a>
		<a href="https://www.youtube.com/channel/UC67DxdVMFKkWKfFPA-nN7YA" target="_blank">
			<img src="youtube.png" style="width:42px;height:42px;border:0;float: top right;"/>
		</a>
		</center>
		</body>
		
		<hr>
		<br>
		
		<body><center>
			<form method= "post" action="std.php" style="border-style:double;border-width:5";><center><br>
				Student ID : <br>
                    <input type="text"  placeholder="Student ID" name="user" style="width:250;border: 2px solid red;
    border-radius: 4px"; required /><br>
                Password : <br>
					<input type="password" placeholder="Password" name="pass" style="width:250;border: 2px solid red;
    border-radius: 4px" required />
				</br>
					<input type="submit" name="btn_log" value="Sign in" />
					</br><br>
    		</form>
			<body>
			<center>
			<form method="post" action="passchange.php">
			 <input type = "submit" value="Forget Password?">
			</form>
			</center>
			</center>
			<h3><b><u> All Students </b></u> </h3>
		<body><center>
			<div class="scroll">
			<table>
			<center>
				<tr>
					<th style="color:blue">Sr No.</th>
					<th style="color:blue"> Student ID </th>
					<th style="color:blue">  Name </th>	
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
						$sr=0;
					while($row = mysqli_fetch_assoc($result)) {
						$sr = $sr + 1;
						
						echo "<tr>";
						echo "<td> <b>".$sr."</b></td>";
						echo "<td> <b>".$row['s_id']."</b></td>";
						echo "<td><b>".$row['name']."</b></td>";
						?>
						
			<?php
				
					}
					}else {
					echo "0 results";
					}
					mysqli_close($conn);
				
				?>
				</tbody>
				</center>
				</table>
				</div>
		</body>
	</body>
</html>
