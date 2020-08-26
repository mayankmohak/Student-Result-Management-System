<?php session_start(); ?>
<head>
    <style>
/*This is css for navigation bar*/
        .ul-horizontal {
            list-style-type: none;
            /*margin: 0;*/
            margin-left: none;
            padding: 0;
            overflow: hidden;
            background-color: #32064C;
        }
        .li-horizontal{
            float: left;
        }
        .li-horizontal a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .li-horizontal a:hover {
            background-color: #6c4882;
        }
        .uperchipkao{
            position: fixed;
            width: 100%;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
        }
        .aise_he{
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- this link is for symbols -->
    </head>
<body  >

<ul class="uperchipkao ul-horizontal" >
    <li style="margin-top: -15px;margin-left: -15px" class="li-horizontal aise_he"><a href="adminpanel.php">Student Result Management System | ADMIN</a></li>
    <div style="float:right">
        <li class="li-horizontal" ><a href="contactus.php">Contact</a></li>
        <li class="li-horizontal"><a href="aboutus.php">About</a></li>
        <li class="li-horizontal">
            <a href="index.php">
                <i style="font-size:24px" class="fa">&#xf08b;
                </i>
            </a>
        </li>


    </div>
</ul>

</body>
</html>