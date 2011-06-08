<?php

/**
 * Producto filter form base class.
 *
 * @package    bazar
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'centrimetro' => 'centrimetro', 'gramo' => 'gramo', 'metro' => 'metro', 'unidad' => 'unidad', 'kilo' => 'kilo'))),
      'precio_compra' => new sfWidgetFormFilterInput(),
      'precio_venta'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'unidad'        => new sfValidatorChoice(array('required' => false, 'choices' => array('centrimetro' => 'centrimetro', 'gramo' => 'gramo', 'metro' => 'metro', 'unidad' => 'unidad', 'kilo' => 'kilo'))),
      'precio_compra' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precio_venta'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('producto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'nombre'        => 'Text',
      'unidad'        => 'Enum',
      'precio_compra' => 'Number',
      'precio_venta'  => 'Number',
    );
  }
}
