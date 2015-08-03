<div class="footer">
  <div class="container">
    <div class="col-sm-3">
      <a class="logo" href="#"><img src="<?php echo base_url('/assets/images/logo.png')?>"></a>
      Copyright &copy; 2015 Beptrexanh.net. All right reserved 
    </div>
    
    <div class="col-sm-6">
      <?php echo $setting['contact']['data']->detail;?>
    </div>

    <div class="col-sm-3">
      <div class="video-container">
        <iframe class="video" width="100%" height="150px" src="https://www.youtube.com/embed/<?php echo $video['link']?>" frameborder="0" allowfullscreen></iframe>
      </div>
        <br>
      	<?php echo $video['title']?>
      	<br>
      	<a class="pull-right" href="<?php echo base_url('video')?>"><i>Xem các video khác</i></a>
    </div>

  </div>
</div>