<?php

/**
 * AppInfo form base class.
 *
 * @method AppInfo getObject() Returns the current form's model object
 *
 * @package    cuponspike
 * @subpackage form
 * @author     Jairo Guerra
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAppInfoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'app_field' => new sfWidgetFormInputText(),
      'app_value' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'app_field' => new sfValidatorPass(),
      'app_value' => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('app_info[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AppInfo';
  }

}
