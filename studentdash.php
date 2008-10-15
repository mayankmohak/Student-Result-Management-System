<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/studentdash.css">
	
	<title>Student Dashboard</title>
</head>
<body> <div  class="bgimg">

<div id="non-printable"><?php  include('topbar.php');?> </div>

<br><br><id='non-printable'hr>
<marquee id="non-printable" bgcolor="#CCCEDA" style="opacity: 0.6; color:red"; width="100%" direction="left" height="50px"><br>
Belive in originality&nbsp;&nbsp;!! Results are anounced so keep calm you will definetly pass  !!&nbsp;&nbsp;Belive in originality
</marquee> <id='non-printable'hr>      

<center>
    <h1 id="non-printable">Student Result Management System</h1>
<div id="non-printable">
		<form action="#" method="POST">
		<!-- <center><h3>School Result Management</h3> -->
		<!-- <h2>System</h2></center> -->
        <table>
            <tr>
           	    <th>
                    <label>Enter Your Roll Id</label>
           	    </th>
           	    <td> 
           	        <input class="input-box" type="text" name="roll">
                </td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>

            <tr>	   
               	<th>
           	        <label>Enter D. O. B.</label>
           	    </th> 
           	    <td>
           	        <input class="input-box" type="date" name="dob">
           	    </td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr>
            <tr> 
                <th>
                    <button class="buton" type="submit" name="search" style="vertical-align:middle">
                        <span>Search </span>
                    </button>

                </th>
                <td> 
                    <button class="buton" type="reset" name="reset" style="vertical-align:middle">
                        <span>Reset </span>
                    </button>
                </td>
            </tr>
        </table>
    </form><br><br><br><br><br><br><br><br><br>
    <p ><small>Copyright © PANCHNAMA</small></p>

    <br><br><br><br><br><br><br><br><br><br><br>
</div> 
</center>

    
</body>
</html>
<?php

if(isset($_POST['search'])) {
    

    $con=mysqli_connect('localhost','root','','rms');
    if (!$con) {
      die("Connection failed");
    }
    else{
        $roll = $_POST['roll'];
        $dob = $_POST['dob'];//do md5 at last

        // here roll and dob are called from data base
        $sql = "SELECT roll,dob FROM result ";
        $res = mysqli_query($con,$sql);
        $num_row = mysqli_num_rows($res);

        if($num_row > 0){
            while($row = mysqli_fetch_array($res)){

                //this is to check if either of the fields are vacaent
                if (empty($roll) || empty($dob)) {
                    $msg = 'requierd';
            		if($msg == 'requierd') echo '<script>alert("please fill all the fields")</script>';
                    break;
                }   
                //this part is to chk if the pass and user name are correct
                else if($roll == $row["roll"] && $dob == $row["dob"]){
                    echo '<script>alert("Result Declared scroll down to see")</script>';
                    $msg = 'yes';
                    break;
                }
                // this part is to accept 
                else {
                    $msg = 'no';
                }
                            
            }
			if($msg == 'no') echo '<script>alert("Invalid Details")</script>';
        }
        else
            echo '<script>alert("Result Not Declared")</script>';
    }
    $sql1="SELECT * FROM result WHERE roll = '$roll' AND dob = '$dob'";
            
    
    $res=mysqli_query($con,$sql1);
    $num_rows=mysqli_num_rows($res);
    

    if($num_rows>0)
    {
        while($row=mysqli_fetch_array($res))
        {
            echo "<div id='printable' ><id='non-printable'hr>";
            echo "<br><br><center><h1>Student's Result</h1></center>";
            echo "<table cellspacing='0' class='box' align='center' border='0'>";
            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Student's Name:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['name'];
            echo "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Roll No.:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['roll'];
            echo "</td>";
            echo "</tr>";
           
           echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Father's Name:</td>";
            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;<td>";
            echo "<td style='font-size:20px;'>";
            echo $row['fname'];
            echo "</td>";
            echo "</tr>";
           
           echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Student's Name:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['name'];
            echo "</td>";
            echo "</tr>";
           
           echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Date of Birth:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['dob'];
            echo "</td>";
            echo "</tr>";
           
            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Contact No.:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['contact'];
            echo "</td>";
            echo "</tr>";
           
            echo "<tr>";

            echo "<td align='right' style='font-size:20px;'>Image:</td>";
            echo "<td><td>"; 
            echo'<td>';
                    $imgname = $row['imgpath'];
                    if($row['imgpath']){echo "<img src='up/$imgname'>";}
                    else echo"No";
                    echo '</td>';
            echo "</tr>";
           
            echo "<tr>";
            echo "<br><br><td align='center' colspan='2' style='font-size:20px;'>-:Marks Details:-</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in Maths:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['maths'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in English:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['english'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in Physics:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['phy'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in DSA:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['dsa'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in BE</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['be'];
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</div>";           
        }
    }  

    if($msg == 'yes') echo "<br><br><center><button id='non-printable' class='buton'  onclick='javascript:window.print();'><span>Print</span></button>
        ";
}

?>






