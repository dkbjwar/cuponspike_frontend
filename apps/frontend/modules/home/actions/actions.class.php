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
    public function preExecute() {
        $this->ns_client = new nusoap_client('http://localhost/coupons_backend/coupones_ws/service.php?wsdl', 'wsdl');
    }

    public function executeIndex(sfWebRequest $request) {
        $param = array();
        $coupons = $this->ns_client->call('getCoupons', $param);
        $this->coupons = json_decode($coupons, true);
    }

    public function executeAbout(sfWebRequest $request) {
        
    }

    public function executeContact(sfWebRequest $request) {
        
    }

    public function executeShow(sfWebRequest $request) {
        $cupId = $request->getParameter('cup_id');
        $couponResp = $this->ns_client->call('getCouponById', array('cup_id' => $cupId));
        $coupon = json_decode($couponResp, true);
        $this->coupon = $coupon[0];
    }

    public function executeExchange(sfWebRequest $request) {
        $cupId = $request->getParameter('cup_id');
        $parameters = array('cns_cup_id' => $cupId, 'cns_username' => $this->getUser()->getGuardUser()->getUsername(), 'cns_ip' => $request->getRemoteAddress());
        $couponResp = $this->ns_client->call('exchangeCoupon', $parameters);
        if ($couponResp) {
            $this->getUser()->setFlash('notice', 'Coupun exchanged successfully');
        } else {
            $this->getUser()->setFlash('err', 'Coupun could not be exchanged as');
        }
    }

}
