<?php

/**
 * Cupon form base class.
 *
 * @method Cupon getObject() Returns the current form's model object
 *
 * @package    cuponspike
 * @subpackage form
 * @author     Jairo Guerra
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCuponForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cup_id'       => new sfWidgetFormInputHidden(),
      'cup_name'     => new sfWidgetFormInputText(),
      'cup_exp_date' => new sfWidgetFormInputText(),
      'cup_max_use'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cup_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cup_id')), 'empty_value' => $this->getObject()->get('cup_id'), 'required' => false)),
      'cup_name'     => new sfValidatorPass(),
      'cup_exp_date' => new sfValidatorPass(),
      'cup_max_use'  => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('cupon[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cupon';
  }

}
