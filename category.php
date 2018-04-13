<!DOCTYPE>
<html>
<head>
<meta content="text/html" charset="utf-8" />
<title>My-tour website</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
	<!--/sticky-->
	<?php include('slider.php'); ?>
	<div style="height:50px"></div>
	<div style="width:1000px; margin:auto" >

	<div style="width:200px; float:left">

	<table cellpadding="0" cellspacing="0" width="1000px">
		<tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>Category</b></td></tr>
		<?php


		$s="select * from category";
		$result=mysqli_query($mysqli,$s);
		$r=mysqli_num_rows($result);

		while($data=mysqli_fetch_array($result))
		{
	
			echo "<tr><td style=' padding:5px;'><b><a href='catid=$data[0]'>$data[1]</a></b></td></tr>";

		}
		?>

	</table>
	</div>

	<div style="width:800px; float:left">
		<table cellpadding="0px" cellspacing="0" width="1000px">
			<tr><td class="headingText">Welcome to My Tour</td></tr>
		</table>

	</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
