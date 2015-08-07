<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/member.css">

<div class="bg-white container">
	<h2 class="text-uppercase">Team</h2>
	<hr>

	<div class="row col-md-12 wrapper-parent">
        <ul class="list-unstyled member-list">
        <?php foreach ($list_items as $key => $value) {?>
            <li>
                <div class="col-sm-4">
                    <img src="<?php echo base_url('uploads/member/'.$value['image'])?>">
                    <strong><?php echo $value['name']?></strong> 
                    <div class="clearfix"></div>
                    <strong><?php echo $value['job']?></strong> <br>
                    <?php echo $value['position']?>
                </div>
                <div class="col-sm-8">
                    <?php echo $value['description']?>
                </div>
            </li>
        <?php }
        ?>
        </ul>
    </div>
	<div class="clearfix"></div>
</div>