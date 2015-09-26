<?php

/**
 * Cupon filter form base class.
 *
 * @package    cuponspike
 * @subpackage filter
 * @author     Jairo Guerra
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCuponFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cup_name'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cup_exp_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cup_max_use'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cup_name'     => new sfValidatorPass(array('required' => false)),
      'cup_exp_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cup_max_use'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cupon_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cupon';
  }

  public function getFields()
  {
    return array(
      'cup_id'       => 'Text',
      'cup_name'     => 'Text',
      'cup_exp_date' => 'Date',
      'cup_max_use'  => 'Text',
    );
  }
}
