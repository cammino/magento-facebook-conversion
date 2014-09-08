<?php
class Cammino_Facebookconversion_Model_Observer
{
	public function addTracker(Varien_Event_Observer $observer) {

		
		$block = Mage::app()->getFrontController()->getAction()->getLayout()->createBlock("facebookconversion/tracker");

		$blockContent = Mage::app()->getFrontController()->getAction()->getLayout()->getBlock('content');

		if ($blockContent) {
			$blockContent->append($block);
		}

	}
}
?>