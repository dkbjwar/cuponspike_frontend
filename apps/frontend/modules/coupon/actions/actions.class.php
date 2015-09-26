<?php

/**
 * coupon actions.
 *
 * @package    cuponspike
 * @subpackage coupon
 * @author     Jairo Guerra
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class couponActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->coupons = Doctrine_Core::getTable('Coupon')
                ->createQuery('a')
                ->execute();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new CouponForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new CouponForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($coupon = Doctrine_Core::getTable('Coupon')->find(array($request->getParameter('cup_id'))), sprintf('Object coupon does not exist (%s).', $request->getParameter('cup_id')));
        $this->form = new CouponForm($coupon);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($coupon = Doctrine_Core::getTable('Coupon')->find(array($request->getParameter('cup_id'))), sprintf('Object coupon does not exist (%s).', $request->getParameter('cup_id')));
        $this->form = new CouponForm($coupon);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($coupon = Doctrine_Core::getTable('Coupon')->find(array($request->getParameter('cup_id'))), sprintf('Object coupon does not exist (%s).', $request->getParameter('cup_id')));
        $coupon->delete();

        $this->redirect('coupon/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

        if ($form->isValid()) {
            $coupon = new Coupon();
            $coupon->setCupId(UsefullStuff::gen_uuid());
            $coupon->setCupName($form->getValue('cup_name'));
            $coupon->setCupExpDate($form->getValue('cup_exp_date'));
            $coupon->setCupMaxUse($form->getValue('cup_max_use'));
            $coupon->setCupStock($form->getValue('cup_stock'));
            $coupon->save();
            $this->redirect('coupon/edit?cup_id=' . $coupon->getCupId());
        }
    }

}
