
<!DOCTYPE html>
<html>
<head>
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
<body>
    <div>
        <form action="#" method="post" ><br>
            <font color="#B739FE"><h1>Admin Change Password</h1></font>
            <br><br>
             
            <div class="crnt-pass">
                <img style="margin-bottom: -20px;" src="https://img.icons8.com/nolan/64/privacy.png"/> &nbsp;&nbsp;&nbsp;&nbsp;
                <input class="input-box" type="password" name="current-pass" placeholder="CURRENT PASSWORD">
            </div>
            <br><br>
            <div class="new-pass">

                <img style="margin-bottom: -20px;" src="https://img.icons8.com/nolan/64/forgot-password.png"/> &nbsp;&nbsp;&nbsp;&nbsp;
                <input class="input-box" type="password" name="new-pass" placeholder="NEW PASSWORD">
            </div>
            <br><br>
            <div class="cnfrm-pass">
                <img style="margin-bottom: -20px;" src="https://img.icons8.com/nolan/64/forgot-password.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="input-box" type="password" name="cnfrm-pass" placeholder="CONFIRM PASSWORD">
            </div><br>
            <button class="button" type="submit" name="Submit" style="vertical-align:middle">
                <span>Submit </span>
            </button>
        </form>
    </div>

</body>
</html> 
<?php
if (isset($_POST['Submit'])) {
    // echo"hello hello mic testing 123 chk chk";

    $con=mysqli_connect('localhost','root','','rms');
    if (!$con) {
       die("Connection failed");
    }
    else{
        $currentpass = $_POST['current-pass'];
        $newpass = $_POST['new-pass'];
        $cnfrmpass = $_POST['cnfrm-pass'];

        $sql = "SELECT password FROM admin ";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $oldpass = $row["password"];

        if($currentpass != $oldpass ){
            echo '<script> alert("current password wrong");</script>';
        }
        else if($newpass !== $cnfrmpass){
            echo '<script> alert("pasword not matched");</script>';
        }
        else{
            $sql ="UPDATE `admin` SET `password`='$newpass' WHERE `id`='1'";
            $res = mysqli_query($con,$sql);
            if($res)
            echo '<script> alert("password changed sucessfully!!");</script>';
            else
            echo '<script> alert("opss!!");</script>';

        }
    }
}
?>