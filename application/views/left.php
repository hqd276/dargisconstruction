<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/left.css">
<ul class="list-unstyled cat">
	<?php foreach ($list_service as $key => $value) {?>
		<li><a href="<?php echo base_url('service/'.$value['slug']);?>"><?php echo $value['name']?></a>
			<ul class="list-unstyled service">
				<?php foreach ($value['items'] as $k => $v) {?>
					<li><a href="<?php echo base_url('detail/'.$v['slug']);?>"><i class="fa fa-caret-right"></i><?php echo $v['title']?></a>
				<?php }?>
			</ul>
		</li>
	<?php }?>
</ul>