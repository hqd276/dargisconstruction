<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
<div class="container">
	<div class="about-home">
		<h2 class="text-uppercase"><?php echo $about['data']->name?></h2>
		<hr>
		
		<p><i><?php echo $about['data']->description?></i></p>
	</div>

	<hr>

	<div class="product-home">
		<div class="row">
			<?php foreach ($categories as $key => $value) {?>
				 <div class="col-md-4">
					<div class="item-home">
						<h4 class="text-uppercase"><?php echo $value['name']?></h4>
						<img src="<?php echo base_url('uploads/categories/'.$value['image']);?>"/>
						<p><?php echo $value['description']?></p>
						<a href="<?php echo base_url('project/index/'.$value['id']);?>" class="text-uppercase more pull-right">More</a>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</div>
