<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('coupon/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?cup_id='.$form->getObject()->getCupId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('coupon/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'coupon/delete?cup_id='.$form->getObject()->getCupId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['cup_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['cup_name']->renderError() ?>
          <?php echo $form['cup_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cup_exp_date']->renderLabel() ?></th>
        <td>
          <?php echo $form['cup_exp_date']->renderError() ?>
          <?php echo $form['cup_exp_date'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cup_max_use']->renderLabel() ?></th>
        <td>
          <?php echo $form['cup_max_use']->renderError() ?>
          <?php echo $form['cup_max_use'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cup_stock']->renderLabel() ?></th>
        <td>
          <?php echo $form['cup_stock']->renderError() ?>
          <?php echo $form['cup_stock'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
