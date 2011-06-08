<?php

/**
 * AdministrarProductos module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage AdministrarProductos
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAdministrarProductosGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  'guardar' =>   array(    'label' => 'Nuevo',  ),);
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%nombre%% - %%precio_venta%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Listado Productos en el Local';
  }

  public function getEditTitle()
  {
    return 'Edit AdministrarProductos';
  }

  public function getNewTitle()
  {
    return 'New AdministrarProductos';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'nombre',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'nombre',  2 => 'precio_venta',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'unidad' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',),
      'precio_compra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'precio_venta' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'unidad' => array(),
      'precio_compra' => array(),
      'precio_venta' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'unidad' => array(),
      'precio_compra' => array(),
      'precio_venta' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'unidad' => array(),
      'precio_compra' => array(),
      'precio_venta' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'unidad' => array(),
      'precio_compra' => array(),
      'precio_venta' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'nombre' => array(),
      'unidad' => array(),
      'precio_compra' => array(),
      'precio_venta' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ProductoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ProductoFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
