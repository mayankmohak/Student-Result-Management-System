<!DOCTYPE html>
<html>
<head>
	<title>update result</title>
<link rel="stylesheet" type="text/css" href="css/updt-res-form.css">
</head>
<body style="color: #B739FE">
	<div>
		 <form action="#" method="post" ><br>
            <h2> UPDATE FORM</h2>
            <br><br>
            <font color="#0303AC">
            	Enter Roll Number to UPDATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </font>
            <input class="input-box" type="VALUE" name="rollno" placeholder="ROLL NUMBER"><br>
            <button class="button" type="submit" name="Submit" style="vertical-align:middle; margin-top: 10px">
                <span>Submit </span>
            </button>
        </form>
	</div>
</body>
</html>
<?php

if (isset($_POST['update'])) {
	$con=mysqli_connect('localhost','root','','rms');
    if (!$con) {
       die("Connection failed");
    }
	$sql="SELECT * FROM result";
	$res=mysqli_query($con,$sql);

	$row = mysqli_fetch_array($res);
	//student details
	$uname = $_POST['cng-name'];
	$uroll = $_POST['cng-roll'];
	$ufname = $_POST['cng-fname'];
	$udob = $_POST['cng-dob'];
	$ucont = $_POST['cng-cont'];
	//image
	$uimg_name = $_FILES['f1']['name'];
	//marks details
	$umaths = $_POST['cng-math'];
	$ueng = $_POST['cng-eng'];
	$uphy = $_POST['cng-phy'];
	$udsa = $_POST['cng-dsa'];
	$ube = $_POST['cng-be'];



	$sqli = "UPDATE `result` SET `name` = '$uname', `roll`= '$uroll', `fname`='$ufname', `dob`='$udob', `contact`='$ucont', `imgpath`='$uimg_name', `maths`='$umaths', `english`='$ueng', `phy`='$uphy', `dsa`='$udsa', `be`='$ube' WHERE roll = $uroll";

	$chk = mysqli_query($con , $sqli);
	if($chk)
		echo "<script>alert(DATA UPDATED)</script>";
	else
		echo "<script>alert(DATA UPDATE FAILED)</script>";
		
	//  $sql = "INSERT INTO `user_image`(`img_path`) VALUES(')";
	$move = move_uploaded_file($_FILES['f1']['tmp_name'], 'up/'.$uname);
	if ($move){
		echo "<script>alert(file uploaded)</script>";
	}
	else
		echo "<script>alert(failed)</script>";
}
if (isset($_POST['Submit'])) {
    // echo"hello hello mic testing 123 chk chk";

    $con=mysqli_connect('localhost','root','','rms');
    if (!$con) {
       die("Connection failed");
    }
    else{
    	$roll =$_POST['rollno'];

    	$sql = "SELECT * FROM result";
    	$res = mysqli_query($con,$sql);
		$num_rows=mysqli_num_rows($res);

		if($num_rows>0){
			while($row=mysqli_fetch_array($res)){
				if($roll == $row['roll']){

	$sql="SELECT * FROM result";

	$res=mysqli_query($con,$sql);
	$num_rows=mysqli_num_rows($res);

	while($row=mysqli_fetch_array($res))
	{
		if($roll == $row['roll']){
			$name = $row['name'];
			$rollno = $row['roll'];
			$faname = $row['fname'];
			$contact = $row['contact'];
			$dob = $row['dob'];
			if($row['imgpath'])	$imgname = $row['imgpath'];
			else $imgname="no";
			$math = $row['maths'];
			$eng = $row['english'];
			$phy = $row['phy'];
			$dsa = $row['dsa'];
			$be = $row['be'];
		}
	}
echo '
	<hr>
	<div >
		<br>
		<form action="#" method="POST" enctype="multipart/form-data">
		<table>		
			<th><br>
				<tr> STUDENTS DETAILS:--</tr>
				<br>
			</th>
			<th>
				<tr>NAME</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="cng-name" value='; echo $name; echo'>
			</th>
			<br><br>
			<th>
				<tr>ROLL</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="cng-roll" value='; echo $rollno; echo'>
			</th>
			<br><br>
			<th>
				<tr>FATHER\'s NAME</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="text" name="cng-fname" value='; echo $faname; echo'>
			</th>
			<br><br>
			<th>
				<tr>CONTACT</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="number" name="cng-cont" value='; echo $contact; echo'>
			</th>
			<br><br>
			<th>
				<tr>DATE OF BIRTH</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="date" name="cng-dob" value='; echo $dob; echo'>
			</th>
			<br><br>
			<th>
				<tr>IMAGE</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				';
				if(!$imgname) echo "NO IMAGE FOUND IN DATA BASE!!";
				else echo "<img src='up/$imgname'>"; 
				echo'
				
				
			</th>
			<br><br>
			<th>
			<tr align="right">Photo</tr>&nbsp;&nbsp;&nbsp;&nbsp;
			<tr><input type="file" name="f1"></tr>
		</tr>
		</table>
		<table>
			<th><br>
				<tr> MARKS DETAILS:--</tr>
				<br>
			</th>
			<br>
			<th>
				<tr>MATHS</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="cng-math" value='; echo $math; echo'>
			</th>
			<br><br>
			<th>
				<tr>ENGLISH</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="text" name="cng-eng" value='; echo $eng; echo'>
			</th>
			<br><br>
			<th>
				<tr>PHYSICS</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="text" name="cng-phy" value='; echo $phy; echo'>
			</th>
			<br><br>
			<th>
				<tr>DSA</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="cng-dsa" value='; echo $dsa; echo'>
			</th>
			<br><br>
			<th>
				<tr>BE</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="cng-be" value='; echo $be; echo'>
			</th>
		</table>
		<div>
			<button class="button" type="submit" name="update" value="update" style="vertical-align:middle; margin-top: 10px">
                <span>UPDATE</span>
            </button>
		</div>
		</form>
	</div>
';

					$msg = "";
					break;
				}
				else{
					$msg= "ROLL NUMBER NOT FOUND!!";
				}
			}
			if($roll != $row['roll']) echo "$msg";
		}
    }
}
?>