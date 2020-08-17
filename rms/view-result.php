<!DOCTYPE html>
<html>
<head>
    <title>View Result</title>
    <style type="text/css">
        body {
            margin: 0;
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
        .box{
            background-color: #F1F1F1;
            font-family:  arial;
            text-align:  center;
            /*height: 50%;*/
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body>
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
    <div class="box"><br>
        <center>
        <font color="#B739FE"><H1>STUDENT'S DETAILS</H1></font><HR>
        <?php include('query-result.php');?>
        </center>
    </div>
</div>


</body>
</html>