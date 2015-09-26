<?php

/**
 * home actions.
 *
 * @package    cuponspike
 * @subpackage home
 * @author     Jairo Guerra
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $ns_client = new nusoap_client('http://localhost/coupons_backend/coupones_ws/service.php?wsdl', 'wsdl');
        $param = array();
        $coupons = $ns_client->call('getCoupons', $param);
        $this->coupons = json_decode($coupons, true);
    }

}
