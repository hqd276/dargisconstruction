<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/about.css');?>">
<div class="container-fluid cover">
	<div class="container-fluid dim">
	  <div class="container">
	    <div class="caption">
	      <h1>about us</h1>
	    </div>
	    <div class="breadcrumb">
	      <ul>
	        <li><a href="<?php echo base_url();?>" target="">Home</a></li>
	        <li><a> <i class="fa fa-angle-right"></i></a></li>
	        <li><a href="<?php echo base_url('about');?>" target=""> <b>About</b></a></li>
	      </ul>
	    </div>
	  </div>
	</div>
</div>
<div class="about-us container" >
	<div class="container aboutus-title">
        <h1> <i class="fa fa-road"></i><?php echo $about['data']->name?></h1>
        <p><?php echo $about['data']->description?></p>
  	</div>
	<div class="container"><?php echo $about['data']->detail?></div>
</div>