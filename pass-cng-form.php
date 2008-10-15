
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/pass-cng-form.css">
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