<div class="footer">
  <div class="container">
    <?php foreach ($list_service as $key => $value) {?>
    <div class="col-sm-3">
      <h6 class="text-uppercase"><?php echo $value['name']?></h6>
      <ul class="list-unstyled">
        <?php foreach ($value['items'] as $k => $v) {?>
          <li><a href="<?php echo base_url('detail/'.$v['slug']);?>"><?php echo $v['title']?></a>
        <?php }?>
      </ul>
    </div>
    <?php }?>
    <div class="clearfix"></div>
    <div>&copy Copyright HD 2015</div>
  </div>
</div>