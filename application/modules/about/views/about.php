<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/about.css');?>">

<div class="about-us container" >
	<h2 class="text-uppercase"><?php echo $about['data']->name?></h2>
	<!-- <p><i><?php echo $about['data']->description?></i></p> -->
	<div class="about-detail"><?php echo $about['data']->detail?></div>
</div>