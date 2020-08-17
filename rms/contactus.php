<?php include('topbar.php');?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		img-he{}
		.p{

         height:400px;
         width:500px;
         background-color:red;
         animation-name:exp;
         animation-duration:4s;
         animation-direction: alternate;
         animation-iteration-count:infinite;
         font-size: 35px;
          
         color: black;

		  }
		  @keyframes exp{
                      30%{border-radius:60px;background-color: orange;}
                      50%{border-radius: 100px;background-color: blue;}
                      75%{border-radius:200px ;background-color:yellow ;} 
                      100%{border-radius:300px ;border-color: grey;}  
                       }
        .q{
        	padding-left:100px ;
        	padding-right:100px ;
        	padding-top:100px ;
        	padding-bottom:100px ;
        } 
        .r{
            opacity: 0.5;
     	  font-size:20px;
         height:400px;
        width:600px;
         border:2px blue;
         padding:20px;
         margin:20px;
         margin-top:; 
         margin-left: 500px;
         border-radius: 40px;
          background-color:white;
          font-color:white;
        } 
        body { 
        background-image: url("admn.png");
        background-size: 100%;
        background-color: #cccccc;
        /*height: 100px;*/
        }             
	</style>
	<title></title>
</head>
<body style="background-color: skyblue;">
    <!-- <center>
	       <div class="p">
	            <img src="image2.png" class="q">
	            
           </div>
    </center> --><br><br><br>
    <div class="r" >
    	<center><u><h1>Contact Us</h1></u></center>
         <ul style="font-size: 30px;">
         	<li>location - gunupur</li>
         	<li>At - Gobriguda</li>
         	<li>po - Kharling</li>
         	<li>Dist - Rayagada,Odisha-India</li>
            <li>Pin - 765022</li>
         	<li>contact no - +91 7735745535,06857-250170,065857-250127
         	</li>
         </ul>
         <center><h2>Thank you</h2></center>
    </div>
</body>
</html>