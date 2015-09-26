<?php

/**
 * Consumption form base class.
 *
 * @method Consumption getObject() Returns the current form's model object
 *
 * @package    cuponspike
 * @subpackage form
 * @author     Jairo Guerra
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConsumptionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cns_id'         => new sfWidgetFormInputHidden(),
      'cns_cup_id'     => new sfWidgetFormInputText(),
      'cns_username'   => new sfWidgetFormInputText(),
      'cns_ip'         => new sfWidgetFormInputText(),
      'cns_created_at' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cns_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cns_id')), 'empty_value' => $this->getObject()->get('cns_id'), 'required' => false)),
      'cns_cup_id'     => new sfValidatorPass(),
      'cns_username'   => new sfValidatorPass(),
      'cns_ip'         => new sfValidatorPass(),
      'cns_created_at' => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('consumption[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Consumption';
  }

}
