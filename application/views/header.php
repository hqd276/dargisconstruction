<div class="header">

		<div class="container hidden-xs">
			<a class="logo pull-left" href="#"><img src="<?php echo base_url('/assets/images/logo.png')?>"></a>
			<!-- <form class="navbar-form pull-right" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Tìm kiếm">
		        </div>
		        <button type="submit" class="btn btn-default">Tìm</button>
	      	</form> -->
      	</div>

			<nav class="navbar">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand visible-xs" href="/"><img src="<?php echo base_url('/assets/images/logo.png')?>"></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav text-uppercase">
			      	<li><a href="/"> <i class="fa fa-home"></i> </a></li>
			        <li><a href="<?php echo base_url('/about')?>">Nagoya Việt Nam</a></li>
			        <li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sản phẩm sản xuất<span class="caret"></span></a>
				          <ul class="dropdown-menu text-capitalize" role="menu">
				      		<?php	foreach ($cat_product as $key => $value) {
			      				echo "<li><a href='".base_url().'danh-muc-san-pham/'.$value['slug']."'>".$value['name']."</a></li>";
			      			}?>
				          </ul>
			        </li>
			        <?php	foreach ($cat_news as $key => $value) {
	      				echo "<li><a href='".base_url().'danh-muc/'.$value['slug']."'>".$value['name']."</a></li>";
	      			}?>
			        <li><a href="<?php echo base_url('/contact')?>">Liên hệ</a></li>
			      </ul>
			      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	</div>