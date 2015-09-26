<?php

/**
 * AppInfo filter form base class.
 *
 * @package    cuponspike
 * @subpackage filter
 * @author     Jairo Guerra
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAppInfoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'app_field' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'app_value' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'app_field' => new sfValidatorPass(array('required' => false)),
      'app_value' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('app_info_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AppInfo';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'app_field' => 'Text',
      'app_value' => 'Text',
    );
  }
}
