<?php include "header.php"; ?>
<!-- End Site Header --> 
  <!-- Start Hero Slider -->
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(images/gallery-img8.jpg);"></li>
      <li class="parallax" style="background-image:url(images/gallery-img9.jpg);"></li>
	  <li class="parallax" style="background-image:url(images/gallery-img10.jpg);"></li>
	  <li class="parallax" style="background-image:url(images/para1.jpg);"></li>
	  <li class="parallax" style="background-image:url(images/event-img2.jpg);"></li>

    </ul>
  </div>
   <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">About Us</li>
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
          <h1>About Us</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <?php
                           
				$result = $db->prepare("SELECT * FROM tbl_about");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?>  
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
   <?php echo $row['body']; ?> 
           
          </div>
          </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- Start Footer -->
 <?php include "footer.php"; ?>