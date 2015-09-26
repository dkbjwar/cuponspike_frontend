<h1>Coupons List</h1>

<table>
  <thead>
    <tr>
      <th>Cup</th>
      <th>Cup name</th>
      <th>Cup exp date</th>
      <th>Cup max use</th>
      <th>Cup stock</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($coupons as $coupon): ?>
    <tr>
      <td><a href="<?php echo url_for('coupon/edit?cup_id='.$coupon->getCupId()) ?>"><?php echo $coupon->getCupId() ?></a></td>
      <td><?php echo $coupon->getCupName() ?></td>
      <td><?php echo $coupon->getCupExpDate() ?></td>
      <td><?php echo $coupon->getCupMaxUse() ?></td>
      <td><?php echo $coupon->getCupStock() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('coupon/new') ?>">New</a>
