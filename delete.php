<!DOCTYPE html>
<html>
<head>
	<title>Delete Entry</title>
	<link rel="stylesheet" type="text/css" href="css/delete.css">
</head>
<body><br><br>
	<table align="center">
		<form action="#" method="POST">
			<tr>
				<font color="#B739FE"><h1>ENTER ROLL NUMBER</h1></font>
				!!enter details with care may cause in loss of data!!<br><br><br>
			</tr>
			<tr>
				<td><input class="input-box" type="text" style="height: 30px" name="std-rlno"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
						<tr>
				<td></td>
			</tr>
						<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>

			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr><tr>
				<td></td>
			</tr>
			<tr>
				<td>
					<button class="button" type="Submit" name="Submit" style="vertical-align:middle" value="DELETE">
		                <span>DELETE</span>
		            </button>
				</td>
			</tr>
		</form>
	</table>

</body>
</html>
<?php
if (isset($_POST['Submit'])) {
	
	$con=mysqli_connect('localhost','root','','rms');
	if (!$con) {
	   die("Connection failed");
	}
	else{
		$rlno = $_POST['std-rlno'];
	}
	$sql = "DELETE FROM result WHERE roll = '$rlno'" ;
	$chk = mysqli_query($con , $sql);
	
	if(empty($rlno)){
		echo "Please Provide Roll Number";
	}else{
		if($chk)
			echo "<center>DATA DELETED</center>";
		else
			echo " <center>DELETION FAILED</center>";
	}
}		
?>