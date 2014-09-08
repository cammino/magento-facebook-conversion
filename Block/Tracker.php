<?php
class Cammino_Facebookconversion_Block_Tracker extends Mage_Core_Block_Template {
	
	private $_active;
	private $_conversionCode;
	
	protected function _construct() {
		$this->_enabled = Mage::getStoreConfig('sales/facebook_conversion/active');
		$this->_conversionCode = Mage::getStoreConfig('sales/facebook_conversion/conversion_code');
	}

	protected function _toHtml() {
		$html = "";
		
		if (strval($this->_enabled) == "1") {
			$html .= strval($this->_conversionCode);
		}


		return $html;
	}

	// private function getOrderTotal() {
	// 	$session = Mage::getSingleton('checkout/session');
	// 	$order = Mage::getModel("sales/order");
	// 	$order->loadByIncrementId($session->getLastRealOrderId());
	// 	return $order->getTotalDue();
	// }
	
}
?>