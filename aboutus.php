<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>My-tour website</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width" initial-scale="1">

<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<?php include('slider.php'); ?>
<div style="height:50px"></div>




<div style="width:900px; padding-left:100px">
<table cellpadding="0px" cellspacing="0" width="900px">
	<tr>
		<td class="headingText">About Us</td>
	</tr>
	<tr>
		<td class="paraText" width="900px">
		<b>About My Tour</b></br>

			My Tour aims to increase awareness of many tourist attractions, to encourage and support travel.
		</td>
	</tr>
	<tr>	
		<td colspan="3"><img src="images/13.jpg" width="1200px" height="700px"/></td>
	</tr>

	<tr>
		<td colspan="3" class="paraText">
		<div class="container">		  
		 	<div class="about-grids">
			 <h4><b><span class="icon1"></span>Our Vision</b></h4>
			 *************************To promote Tourism***************************
	 		 </div>
 		 </td>
	 </tr>
	<tr>	
		<td class="paraText"> 
			<div class="about-grids grid2">
			 <h4><b><span class="icon2"></span>Our Mission</b></h4>
			To ensure tourism benefits to local people and enhance their economical status 

			</div>
		</td>
	</tr>
</table>

</div>



<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
