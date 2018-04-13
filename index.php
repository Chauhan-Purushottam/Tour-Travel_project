<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width; initial-scale=1">
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>

</head>
<body>
<!--sticky-->
<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt="About"><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>To improve tourism facility,for the travellers </p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure tourism always benefits local people economically</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Information</h4>
			 <p>For emergency aid of any kind, call 101 from any phone....</p>
             <div align="right"><a href="aboutus.php"><input type="button" value="Read More" name="sbmt" /></a></div> 
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		 
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Domestic Travel</span></li>
			<li><span class="filter" data-filter="card">Foreign Travel</span></li>
			<li><span class="filter" data-filter="icon">Short Date Tour</span></li>
			<li><span class="filter" data-filter="fun">Long Date Tour</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.3s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t6.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t8.jpg" class="img-responsive" alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t7.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>	
									 
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  



<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>Advertisements</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p> Come and explore! </p>
		  </div>
	  </div>
	  <div class="container">
		<link href="css/owl.carousel.css" rel="stylesheet">
							    		
 		<div id="owl-demo" class="owl-carousel">
         
         
         
<?php
$s="select * from advertisement";
$result=mysqli_query($mysqli,$s);

$n=0;
while($data=mysqli_fetch_array($result))
{
	if($n%4==0)
	{
	?>
       <div class="item text-center guide-sliders">
<?php }?>


	<div class="col-md-3 image-grid">
					
	 <p><a href="#"><?php echo $data[2]; ?></a></p>
	</div>
	<?php if($n%4==3)
	 {?>
      </div>
   
            <?php
				}
			$n=$n+1;
}
?>
           </div>
	</div>
</div>
	


<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan Your Trip Our travel experts can help you book now!</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">Book Package</h4>
						<p style="color:#000">NEED HELP BOOKING PACKAGE<br/></p>
						<h5 style="color:#000"><span class="img1"></span>(+91) 9895689532 &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(+91) 8626637309</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">tourguide@gmail.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>A-10 322 Kalyani, Nadia Kolkata.</h5>
                        <br/>
                       <img src="images/contac.png" height="253" width="300" />
                      </div>
	<div class="col-md-8 contact">
                  
<form method="post">
<table border="0" width="700px" height="500px">
<tr>
<td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" title"Please Enter your Name">
</td>
</tr>
<tr>
<td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" title"Please Enter your Contact no">
</td>
</tr>
<tr>
<td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" >
</td>
</tr>
 <tr>
 <td>
 <textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea>
 </td>
 </tr>
<tr>
<td><input type="submit" value="Send message" name="sbmt">
</td>
</tr>
</table>
  <div class="clearfix"></div>
</form>
<?php
if(isset($_POST["sbmt"]))
{
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($mysqli,$s);
	echo "<script>alert('Record Save');</script>";
}
?>
  
					   
					   
					 
		   </div>
  	<div class="clearfix"></div>
  </div>
</div>
	       



<?php include('bottom.php'); ?>
</body>
</html>

