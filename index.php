 <!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="bgimg"><font color="white">
	<div>
		<?php include('topbar.php');
		echo '<script>alert("placeholder values are correct for username and password!!")</script>';?> 
	</div>

<br><br>
<hr>
<marquee id="non-printable" bgcolor="#CCCEDA" style="opacity: 0.4; color:red"; width="100%" direction="left" height="50px"><br>
!! To stop the spread of corona virus wear MASK  !!
</marquee>
<hr> 
	<header>
		<h1><center>Students Results Management System</center></h1>
	</header>

	<table align="center" cellspacing="15">
	<form method="POST" action="index.php">
		<tr>
			<td><h3>&#9819For admin&#9819</h3></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><h3>&#9823For students&#9823</h3></td></td>
		</tr>
		<tr rowspan=4>
			<td>Username</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td style="font-size: 20px"><a href="studentdash.php" style="color:white">Click here</a> to check the results.</td>
		</tr>
		<tr>
			
			<td><input class="input-box" type="text" id="UserName" name="UserName" placeholder="admin"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
		</tr>

		<tr>
			<td>Password</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
		</tr>
		<tr>
			
			<td><input class="input-box" type="Password" id="admin-pwd" name="admin-pwd" placeholder="1234"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
		</tr>
		<tr>
			<td><center><input class="button" type="submit" value="Submit" name="Submit" style="background-color: none; opacity: 0.5"></center></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
		</tr>
	</table><br><br><br>
	<p class="text-center"><small>Copyright © PANCHNAMA</small></p>
	<br><br><br><br><br><br><br><br><br>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST['Submit'])) {
	// echo"hello hello mic testing 123 chk chk";

	$con=mysqli_connect('localhost','root','','rms');
	if (!$con) {
	  die("Connection failed");
	}
	else{
		$uname = $_POST['UserName'];
		$pass = $_POST['admin-pwd'];//do md5 at last

		// here user name and password are called from data base
		$sql = "SELECT username, password FROM admin ";
		$result = mysqli_query($con,$sql);
		$num_row = mysqli_num_rows($result);

		if($num_row > 0){
			while($row = mysqli_fetch_array($result)){

				//this is to check if either of the fields are vacaent
				if (empty($uname) || empty($pass)) {
					echo '<script>alert("please fill all the fields")</script>';
				}	
				//this part is to chk if the pass and user name are correct
				else if($uname == $row["username"] && $pass == $row["password"]){
					$_SESSION['uname']=$uname;
					header('location:adminpanel.php');
			 		// echo "<script> window.location.assign('adminpanel.php'); </script>";
				}
				// this part is to accept 
				else 
					echo '<script>alert("Wrong Password or UserName")</script>';
			}
		}

		
	}
}
?>






