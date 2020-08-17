<!DOCTYPE html>
<html>
<head>
	<title>Result Input</title>
	<style type="text/css">
		
		.input-box{
            width: 300px;
            height: 30px;
            outline: none;
            border-color: blue;
            border-radius: 10px;
        }
        /*for buttons*/
        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #32064C;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 175px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
            }

        .button:hover span {
            padding-right: 25px;
            }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }	
	</style>
</head>
<body>
<h1 style="color:#B739FE;"><center>Enter Student's Details</center></h1>
<table style="font-size: 20px; color: #B739FE" align="center">
	<form action="#" method="POST" enctype="multipart/form-data">
		<tr>
			<td align="right"><img src="https://img.icons8.com/nolan/64/student-male.png"/></td>
			<td><input class="input-box" type="text" name="std-name" placeholder="Student Name"></td>
		</tr>
		<tr>
			<td align="right"><img src="https://img.icons8.com/nolan/64/pencil.png"/></td>
			<td><input class="input-box" type="text" name="rl" placeholder="Roll Number"></td>
		</tr>
		<tr>
			<td align="right"><img src="https://img.icons8.com/nolan/64/father--v1.png"/></td>
			<td><input class="input-box" type="text" name="f-name" placeholder="Father's Name"></td>
		</tr>
		<tr>
			<td align="right"><img src="https://img.icons8.com/nolan/64/pay-date.png"/></td>
			<td><input class="input-box" type="date" name="dob" placeholder="DD-MM-YYYY"></td>
		</tr>
		<tr>
			<td align="right"><img src="https://img.icons8.com/nolan/64/phone.png"/></td>
			<td><input class="input-box" type="text" name="cnt-no" placeholder="Contact Number"></td>
		</tr>
		<tr>
			<td align="right">Photo</td>
			<td><input class="input-box" type="file" name="f1" ></td>
		</tr>
		<tr align="center">
			<td colspan="2"><br><br>-:Marks Details:-</td>
		</tr>
		<tr>
			<td align="right">Marks in Maths:</td>
			<td><input class="input-box" type="number" name="maths"></td>
		</tr>
		<tr>
			<td align="right">Marks in English:</td>
			<td><input class="input-box" type="number" name="eng"></td>
		</tr>
		<tr>
			<td align="right">Marks in Physics:</td>
			<td><input class="input-box" type="number" name="phy"></td>
		</tr>
		<tr>
			<td align="right">Marks in DSA:</td>
			<td><input class="input-box" type="number" name="dsa"></td>
		</tr>
		<tr>
			<td align="right">Marks in BE:</td>
			<td><input class="input-box" type="number" name="be"></td>
		</tr>
		<tr>
			<td colspan="2"><button class="button" type="submit" name="Submit" style="vertical-align:middle">
                <span>Submit </span>
            </button></td>
		</tr>
	</form>
</table>
</body>
</html>
<?php
// jahaa p b hoga ye sara php files waaha p ek "up" naam ka folder bnaadena 
if (isset($_POST['Submit'])) {
	// echo"hello hello mic testing 123 chk chk";

	$con=mysqli_connect('localhost','root','','rms');
	if (!$con) {
	   die("Connection failed");
	}
	else{
		//student details
		$std_name = $_POST['std-name'];
		$std_roll = $_POST['rl'];
		$std_fname = $_POST['f-name'];
		$std_dob = $_POST['dob'];
		$std_cont = $_POST['cnt-no'];
		//image
		$img_name = $_FILES['f1']['name'];
		//marks details
		$maths = $_POST['maths'];
		$eng = $_POST['eng'];
		$phy = $_POST['phy'];
		$dsa = $_POST['dsa'];
		$be = $_POST['be'];

		$sql = "INSERT INTO `result`( `name`, `roll`, `fname`, `dob`, `contact`, `imgpath`, `maths`, `english`, `phy`, `dsa`, `be`) VALUES ('$std_name','$std_roll','$std_fname','$std_dob','$std_cont','$img_name','$maths','$eng','$phy','$dsa','$be')";


		$chk = mysqli_query($con , $sql);
		if($chk){
			echo "DATA INSERTED";
			echo "<script>alert('DATA INSERTED');</script>";

		}
		else
			echo "<script>alert('INSERTION FAILED');</script>";
			
			
		//  $sql = "INSERT INTO `user_image`(`img_path`) VALUES(')";
		$move = move_uploaded_file($_FILES['f1']['tmp_name'], 'up/'.$img_name);
		if ($move){
			echo " AND IMAGE FILE UPLOADED";
		}
		else{
			echo "DONE";
		}
	}
}
?>
