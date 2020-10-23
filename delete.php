<!DOCTYPE html>
<html>
<head>
	<title>Delete Entry</title>
	    <style type="text/css">
        .crnt-pass{
            margin-left: 20px;
        }
        .new-pass{
            margin-left: 20px;
        }
        .cnfrm-pass{
            margin-left: 20px;
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
        .input-box{
            width: 300px;
            height: 30px;
            outline: none;
            border-color: blue;
            border-radius: 10px;
        }
    </style>
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