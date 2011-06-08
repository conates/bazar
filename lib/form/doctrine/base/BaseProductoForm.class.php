<?php

/**
 * Producto form base class.
 *
 * @method Producto getObject() Returns the current form's model object
 *
 * @package    bazar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nombre'        => new sfWidgetFormInputText(),
      'unidad'        => new sfWidgetFormChoice(array('choices' => array('centrimetro' => 'centrimetro', 'gramo' => 'gramo', 'metro' => 'metro', 'unidad' => 'unidad', 'kilo' => 'kilo'))),
      'precio_compra' => new sfWidgetFormInputText(),
      'precio_venta'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'        => new sfValidatorString(array('max_length' => 45)),
      'unidad'        => new sfValidatorChoice(array('choices' => array(0 => 'centrimetro', 1 => 'gramo', 2 => 'metro', 3 => 'unidad', 4 => 'kilo'))),
      'precio_compra' => new sfValidatorInteger(array('required' => false)),
      'precio_venta'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Producto', 'column' => array('nombre')))
    );

    $this->widgetSchema->setNameFormat('producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

}
