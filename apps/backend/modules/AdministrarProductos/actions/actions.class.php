<?php

require_once dirname(__FILE__).'/../lib/AdministrarProductosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/AdministrarProductosGeneratorHelper.class.php';

/**
 * AdministrarProductos actions.
 *
 * @package    bazar
 * @subpackage AdministrarProductos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AdministrarProductosActions extends autoAdministrarProductosActions
{
    public function executeGetNombres(sfWebRequest $request) {

        $this->getResponse()->setContentType('application/json');
        // Parametro 'q', contiene lo que fue introducido en el campo por teclado
        $string = $request->getParameter('q');

        // Consulta al modelo Estado
        $rows = ProductoTable::getNombres($string);

        $nombres = array();
        foreach ($rows as $row) {
            $nombres[$row['nombre']] = $row['nombre'];
        }

//        print_r($nombres);

        return $this->renderText(json_encode($nombres));
    }
    public function executeListGuardar(sfWebRequest $request) {
	$this->redirect('@producto_new');
        
    }
}
