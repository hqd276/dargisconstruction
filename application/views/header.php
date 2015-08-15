<header>
  <div class="topbar-tp"></div>
  <div class="sticky-header-tp">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-tp" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?php echo base_url();?>" class="navbar-brand"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
        </div>
        <div id="navbar-tp" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($page=='home') echo 'active';?>"><a href="<?php echo base_url();?>" target="">Home</a></li>
            <li class="<?php if($page=='about') echo 'active';?>"><a href="<?php echo base_url('about');?>" target="">About Us</a></li>
            <li class="dropdown <?php if($page=='service') echo 'active';?>"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php foreach ($cat_service as $key => $value) {?>
	      			<li><a href="<?php echo base_url('service/'.$value['slug']);?>"><?php echo $value['name']?></a></li>
	      		<?php }?>
              </ul>
            </li>
            <li class="dropdown <?php if($page=='project') echo 'active';?>"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Projects<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php foreach ($cat_project as $key => $value) {?>
          			<li><a href="<?php echo base_url('project/'.$value['slug']);?>"><?php echo $value['name']?></a></li>
          		<?php }?>
              </ul>
            </li>
            <li class="<?php if($page=='team') echo 'active';?>"><a href="<?php echo base_url('team');?>" target="">Team</a></li>
            <li class="<?php if($page=='contact') echo 'active';?>"><a href="<?php echo base_url('contact');?>" target="">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>