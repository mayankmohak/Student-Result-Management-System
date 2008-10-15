<!DOCTYPE html>
<html>
<head>
    <title>View Result</title>
    <link rel="stylesheet" type="text/css" href="css/view-result.css">
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