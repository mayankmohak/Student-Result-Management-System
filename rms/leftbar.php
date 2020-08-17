<!DOCTYPE html>
<html>
<head>
    <title>AdminPanel</title>
    <style type="text/css">
        body {
            margin: 0;
        }

        .ul-verticle {
            list-style-type: none;
            margin: 0;
            margin-top: 60px;
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
            height: 60px;
            text-decoration: none;
        }

        .li-verticle a.active {
            background-color: black;
            color: white;
        }

        .li-verticle a:hover:not(.active) {
            background-color: #6c4882;
            color: white;
        }
    </style>
</head>
<body>
<ul class="ul-verticle">
    <div class="li-verticle">
        <li><a href="enter-result.php">Enter<br>Result</a></li>
        <li><a href="update-result.php">Update<br>Result</a></li>
        <li><a href="view-result.php">View<br>Details</a></li>
        <li><a href="delete-result.php">Delete<br>Details</a></li>
        <li><a href="change-pass.php">Admin Change<br>Password</a></li>
        <img src="work.png" style="margin-left: 10px; margin-top: 10px; height: 300px" >
    </div>
</ul>



</body>
</html>