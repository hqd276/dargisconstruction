<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container">
	<h2 class="text-uppercase"><?php echo $title?></h2>
	<hr>
	
	<div class="col-sm-3">
		<?php echo $template['partials']['left']; ?>
	</div>
	<div class="col-sm-9">
		
		<div class="news-form ">
			<?php foreach ($list_news as $key => $value) {?>
				<div class="item">
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
					</div>
					<div class="col-md-8">
						<a href="<?php echo base_url().'detail/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
						<p><?php echo split_char($value['description'],150,1)." ..."?></p>
						<a href="<?php echo base_url().'detail/'.$value['slug']?>" class="text-uppercase more pull-right">More</a>
					</div>
					
				</div>
			<?php }
			?>
		</div>
	</div>
	
	
</div>