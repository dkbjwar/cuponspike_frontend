<h2>Details of coupon</h2>
<?php if (strtotime($coupon['cup_exp_date']) > strtotime(date('Y-m-d H:i:s'))): ?>
    <?php if (intval($coupon['cup_stock']) >= 0): ?>
        <form>
          <table class="table table-hover">
            <thead>
            <th>Name</th>
            <th>Expiration Date</th>
            <tbody>
              <tr>
                <td><?php echo $coupon['cup_name']; ?></td>
                <td><?php echo $coupon['cup_exp_date']; ?></td>
                <td><a href="<?php echo url_for('home/exchange') ?>?id=<?php echo $coupon['cup_id']; ?>" class="btn btn-success">Exchange Coupon</a></td>
              </tr>
            </tbody>
            </thead>
          </table>
        </form>
    <?php else: ?>
        <p>Sorry this coupon has passed the usage limit</p>
    <?php endif; ?>
<?php else: ?>
    <p>Sorry this coupon has expired already</p>
<?php endif; ?>