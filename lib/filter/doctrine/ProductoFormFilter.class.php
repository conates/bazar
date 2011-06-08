		<?php

/**
 * Producto filter form.
 *
 * @package    bazar
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductoFormFilter extends BaseProductoFormFilter
{
  public function configure()
  {
	$context = sfContext::getInstance();
        $this->widgetSchema['nombre'] = new sfWidgetFormJQueryAutocompleter(array(
					'url' => $context->getController()->genUrl('@ajax_getnombres')
	));
        $this->widgetSchema['nombre'] = new sfWidgetFormChoice(array('choices' => array('')));
        $this->widgetSchema['nombre']->setOption('renderer_class',
                'sfWidgetFormJQueryAutocompleter');
        $this->widgetSchema['nombre']->setOption('renderer_options', array(
                'url' => $context->getController()->genUrl('@ajax_getnombres'),
                'config' => '{width:300}'
                )
        );
      


  }
        public function addNombreColumnQuery(Doctrine_Query $query, $field, $value) {
        if (!empty($value)) {
        	    $query->andWhere('LOWER(r.nombre) LIKE ?', '%' . $value . '%');
        	}
    }
}
