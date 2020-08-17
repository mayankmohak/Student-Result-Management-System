<?php
                    echo '<script>alert("Welcome Admin its long time been seeing you")</script>';
?>
<!DOCTYPE html>
<html>
<head>
    <title>AdminPanel</title>
    <style type="text/css">
        body {
            margin-left: 140px;
        background-image: url("admn.png");
        background-size: 100%;
        background-color: #cccccc;
        /*height: 100px;*/
        }  

        .ul-verticle {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .li-verticle a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        .li-verticle a.active {
            background-color: #4CAF50;
            color: white;
        }

        .li-verticle a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

    </style>
</head>
<body background="admn.png">
    <div >
        <header>
            <?php include('topbaradmin.php');?>
        </header>
    </div>
    <div >
        <?php include('leftbar.php');?>
    </div>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <br><br><br><br>
    <div >
        <!-- <?php //start coding here ?><img  width="100%" src="adminimg.png"> -->
    </div>
</div>


</body>
</html>