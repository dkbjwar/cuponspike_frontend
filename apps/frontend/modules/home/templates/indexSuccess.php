<div class="row banner">
  <div class="col-md-12">
    <h1 class="text-center margin-top-100 editContent">
      Coupons Available
    </h1>
    <h3 class="text-center margin-top-100 editContent">See the list below</h3>
    <div class="text-center">
      <ul>
        <?php foreach ($coupons as $coupon): ?>
            <li><a href="#"><?php echo $coupon['cup_name']; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
