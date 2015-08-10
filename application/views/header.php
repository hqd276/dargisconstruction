<div class="header">
	<div class="container">
		<nav id="nav-header" class="navbar">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="logo" href="/">
			  	<img src="<?php echo base_url();?>assets/images/logo.png">
			  </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav pull-right">
			    <li>
			    	<a href="<?php echo base_url();?>">Home</a>
			    </li>
			    <li>
			    	<a href="<?php echo base_url('about');?>">About Us</a>
			    </li>
			    <li class="dropdown">
			    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
		          	<ul class="dropdown-menu text-capitalize" role="menu">
		          		<?php foreach ($cat_service as $key => $value) {?>
		          			<li><a href="<?php echo base_url('service/'.$value['slug']);?>"><?php echo $value['name']?></a></li>
		          		<?php }?>
		          	</ul>
			    </li>
			    <li class="dropdown">
			    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <span class="caret"></span></a>
		          	<ul class="dropdown-menu text-capitalize" role="menu">
		          		<?php foreach ($cat_project as $key => $value) {?>
		          			<li><a href="<?php echo base_url('project/index/'.$value['id']);?>"><?php echo $value['name']?></a></li>
		          		<?php }?>
		          	</ul>
			    </li>
			    <li>
			    	<a href="<?php echo base_url('team');?>">Team</a>
			    </li>
			    <li>
			    	<a href="<?php echo base_url('contact');?>">Contact</a>
			    </li>
			  </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<?php if ($show_slide) {?>
		<div id="carousel-large" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php foreach ($banners as $key => $value){?>
				<li data-target="#carousel-large" data-slide-to="0" class="<?php echo ($key==0)?"active":"" ?>"></li>
			   	<?php } ?>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php foreach ($banners as $key => $value){?>
			  	<div class="item <?php echo ($key==0)?"active":"" ?>" >
			    	<img src="<?php echo base_url("uploads/banner/".$value['image']); ?>">
			    	<div class="carousel-caption">
			        	
			      	</div>
			    </div>
			   	<?php } ?>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-large" role="button" data-slide="prev">
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-large" role="button" data-slide="next">
				<span class="sr-only">Next</span>
			</a>
		</div>
		<?php }?>
	</div>
</div>