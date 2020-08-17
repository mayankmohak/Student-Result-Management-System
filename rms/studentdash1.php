<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
    .para{ 
        font-size:20px;
        height:400px;
        width:400px;
        border:2px blue;
        padding:20px;
        margin:20px;
        margin-top: -400px; 
        margin-left: 35%;
        border-radius: 40px;
        background-color: white;
        box-shadow: 5px 10px #565353;
    }
    .b{
        animation-name: body;
        animation-duration: 5s;
        animation-iteration-count: infinite;
        /*animation-delay: 3s;*/
        animation-direction: alternate;
    }  
    @keyframes body{
        0%{background-color: #8f877f;}
        55%{background-color: #e08326; }        
        75%{background-color:#a5d14d;}             
      }
    img-he{ 
        height: ;
        width: ;
    }
    .p{
      	margin-top: 30px;
      	margin-right: 1000px;
    }
    .q{
        object-position: right;
    } 
    .r{
        object-position: center;
        margin-left: 40px;
    }
    .uperkro{
        margin-top: 90px;
    }
    .right {
        position: absolute;
        right: 0px;
        width: 400px;
        padding: 10px;
        margin-top: -400px;
    }
    .result{
        height: 200px;
        z-index: -1;
        position: absolute;
        margin-left: 40%;
        margin-top: -30px;
    }
    /*for buttons*/
    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #333333;
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
	
	<title>Student Dashboard</title>
</head>
<body class="b"> 

    
        <?php  include('topbar.php');?> 

<div style="margin-left: 30px">
    <img src="result.png" class="result" >
	<div class="uperkro">
        <img src="passed.png" height="150px" ><br>
        <img src="check_result.png" height="350px" >
    </div>
	<div class="para" >
		<form action="#" method="POST">
		<center><h3>School Result Management</h3>
		<h2>System</h2></center>
        <table>
            <tr>
           	    <th>
                    <label>Enter Your Roll Id</label>
           	    </th>
           	    <td> 
           	        <input type="text" name="roll">
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
           	        <input type="date" name="dob">
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
                    <!-- bekar button  <input class="button" type="submit" name="search" value="Search" class="s"> -->
                    <button class="button" type="submit" name="search" style="vertical-align:middle">
                        <span>Submit </span>
                    </button>

                </th>
                <td> 
                    <!-- <input class="button" align="center" type="reset" name="reset" value="Reset" class="s"> -->
                    <button class="button" type="reset"  style="vertical-align:middle">
                        <span>Reset </span>
                    </button>
                </td>
            </tr>
        </table>
    </form>
    </div> 
</div>
    
</body>
</html>
<?php

if(isset($_POST['Submit'])) {
    echo"hello hello mic testing 123 chk chk";

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
                    echo '<script>alert("please fill all the fields")</script>';
                }   
                //this part is to chk if the pass and user name are correct
                else if($roll == $row["roll"] && $dob == $row["dob"]){
                    echo '<script>alert("Sahi Hai!!")</script>';
                    
                }
                // this part is to accept 
                else 
                    echo '<script>alert("Wrong roll or dob")</script>';
                            
            }
        }
        else{
            echo '<script>alert("Wrong roll or dob")</script>';
        }
x
    }
}
?>






