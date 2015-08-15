<?php if ($show_slide) {?>
<div id="tpCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php foreach ($banners as $key => $value){?>
		<li data-target="#tpCarousel" data-slide-to="<?php echo $key?>" class="<?php echo ($key==0)?"active":"" ?>"></li>
	   	<?php } ?>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php foreach ($banners as $key => $value){?>
	  	<div class="item <?php echo ($key==0)?"active":"" ?>" >
	    	<img src="<?php echo base_url("uploads/banner/".$value['image']); ?>">
	    	<div class="carousel-caption">
	        	<!-- <h1><?php echo $about['data']->name?></h1>
                <p><?php echo split_char($about['data']->description,200,'...')?></p>
                <p><a href="<?php echo base_url("about"); ?>" target="" class="btn btn-lg btn-primary">Read more</a></p> -->
	      	</div>
	    </div>
	   	<?php } ?>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#tpCarousel" role="button" data-slide="prev">
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#tpCarousel" role="button" data-slide="next">
		<span class="sr-only">Next</span>
	</a>
</div>
<?php }?>

<div class="container-fluid maintitle">
	<div class="container">
	  <h1> <i class="fa fa-road"></i><?php echo $about['data']->name?></h1>
	  <p><?php echo $about['data']->description?></p>
	</div>
	</div>
	<div class="container">
	<div class="feature-title">
	  <h1><span>our </span><span> services</span></h1>
	  <p> <b>The Construction</b> is proud to be recognized as an industry leader. Setting trends in construction methods, safety, quality, and client satisfaction.</p>
	</div>
	<div class="feature row">
		<?php foreach ($categories as $key => $value) {?>
			<div class="col-md-4">
			 	<h4><i class="fa fa-gear"></i><?php echo $value['name']?></h4><img src="<?php echo base_url('uploads/categories/'.$value['image']);?>" alt="">
			    <p><?php echo split_char($value['description'],200,'...')?></p>
			    <a href="<?php echo base_url('project/'.$value['slug']);?>" class="btn btn-default">more</a>
			</div>
		<?php }?>
	  </div>
	</div>
</div>