<?php
try
{
session_start();
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$mob=$_POST['mob'];
$table=$_POST['table'];


$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
if(mysql_query("insert into registration(name,mob,tab) values('$name','$mob','$table')"))
{

$q=mysql_query("select * from registration where name='$name'");

while($row=mysql_fetch_array($q))
{

$_SESSION['cn']=$row['cust_no'];
$_SESSION['tb']=$row['tab'];
}
header("location:../index.php");
}

else
{
echo "Plz try again";

}
}
}


catch(Exception $ex)
{
echo $ex;
}
?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>❤️Foodies❤️</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1><font face="Times New Roman" color="#000033">❤️ FoOdIeS ❤️</font></h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Registration form</h2>
			<form action="#" method="post">
				<div class="form-sub-w3">
					<input type="text" name="name" placeholder="Enter your full name " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="text" name="mob" placeholder="Enter your mobile number" pattern="[0-9]{10}" required="" />
				<div class="icon-w3">
					<i class="fa fa-mobile" aria-hidden="true"></i>

				</div>
				</div>
				<div class="form-sub-w3">
					<input type="text" name="table" placeholder="Enter your table number " pattern="[0-9]{2}" required="" />
				<div class="icon-w3">
					<i class="fa fa-table" aria-hidden="true"></i>

				</div>
				</div>
				<div class="submit-w3l">
				<!--<a href="../index.html">-->
					<input name="submit" type="submit" value="Register" >
				</div>
			</form>
		</div>
<!--//form-ends-here-->
<!-- copyright -->
	<div class="copyright w3-agile">
		<p><font color="#0000FF"> © 2017 Credit Login / Register Form . All rights reserved | Design by Shahid and his team</font></a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>