<?php include "header.php"; ?>
<!-- End Site Header --> 
  <!-- Start Hero Slider -->
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(images/bird.jpg);"></li>
      <li class="parallax" style="background-image:url(images/gallery-img9.jpg);"></li>
	  <li class="parallax" style="background-image:url(images/beaut.jpg);"></li>
	  <li class="parallax" style="background-image:url(images/b.jpg);"></li>
	  <li class="parallax" style="background-image:url(images/slide2.jpg);"></li>

    </ul>
  </div> 
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Programmes</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
		  <!DOCTYPE html>

<html>
<head>
<style>

	span.Pres {
	color: red;
	}
	span.of {
	color: yellow;
	}
	span.Gh {
	color: green;
	}
	table, th, td {
	border: 2px solid black;
	}
	img {
	width:124px;
	height:124px;
	}
</style>
</head>
<body>
<h1>
	<span class="Pres">Pro</span> 
	<span class="of">gram</span>
	<span class="Gh">mes</span> </h1>
	<table>
    <thead>
      <tr><th>Days</th><th>Service Title</th><th>Service Time</th></tr>
    <tbody>
      <tr><td>Tuesdays</td><td>Kingdom Operators</td><td>7:00pm-8:00pm</td></tr>
      <tr><td>Wednesday</td><td>Bible Studies</td><td>7:00pm-8:00pm</td></tr>
      <tr><td>Friday</td><td>Bible Studies/Prayers</td><td>7:00pm-8:00pm</td></tr>
      <tr><td>Saturday</td><td>Prayers</td><td>7:00pm-8:00pm</td></tr>
      <tr><td>Sunday Morning</td><td>Normal service</td><td>8:00am-11:00am</td></tr>
      <tr><td>Sunday Evening</td><td>Choir Prayers/Meeting</td><td>7:30pm-8:30pm</td></tr>
    </tbody>
    </thead>
    </table>
	</body>
	</html>
    
        
        <h2>Our Location</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
   <?php
                           
				$result = $db->prepare("SELECT * FROM tbl_resources");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?>  
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
		<?php echo $row['body']; ?>
          </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- Start Footer -->
  <?php include "footer.php"; ?>