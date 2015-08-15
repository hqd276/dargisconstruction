<footer>
  <div class="container-fluid footer">
    <div class="container">
      <div class="sitemap row">
        <?php foreach ($list_service as $key => $value) {?>
        <div class="col-sm-3">
          <ul class="list-unstyled">
            <li class="footer-title"><?php echo $value['name']?></li>
            <?php foreach ($value['items'] as $k => $v) {?>
              <li><a href="<?php echo base_url('detail/'.$v['slug']);?>"><?php echo $v['title']?></a>
            <?php }?>
          </ul>
        </div>
        <?php }?>
      </div>
      <div class="copyright">© Copyright HD 2015</div>
    </div>
  </div>
</footer>