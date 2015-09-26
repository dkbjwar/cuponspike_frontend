<?php

/**
 * Consumption filter form base class.
 *
 * @package    cuponspike
 * @subpackage filter
 * @author     Jairo Guerra
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseConsumptionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cns_user_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cns_ip'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cns_created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'cns_user_id'    => new sfValidatorPass(array('required' => false)),
      'cns_ip'         => new sfValidatorPass(array('required' => false)),
      'cns_created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('consumption_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Consumption';
  }

  public function getFields()
  {
    return array(
      'cns_id'         => 'Text',
      'cns_user_id'    => 'Text',
      'cns_ip'         => 'Text',
      'cns_created_at' => 'Date',
    );
  }
}
