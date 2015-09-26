<div class="jumbotron">
  <h1>Coupons Available</h1>
  <p>See the list below!</p> 
</div>
<div class="row banner">
  <div class="col-md-12">
    <div class="text-center">
      <?php if (sizeof($coupons) > 0): ?>
          <ul>
            <?php foreach ($coupons as $coupon): ?>
                <li><a href="<?php echo url_for('home/show') ?>?cup_id=<?php echo $coupon['cup_id']; ?>"><?php echo $coupon['cup_name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
      <?php else: ?>
          <p>There are no coupons available at this time!</p> 
      <?php endif; ?>
    </div>
  </div>
</div>
