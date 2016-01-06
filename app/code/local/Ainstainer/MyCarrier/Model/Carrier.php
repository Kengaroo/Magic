<?php
class Ainstainer_MyCarrier_Model_Carrier
    extends Mage_Shipping_Model_Carrier_Abstract
    implements Mage_Shipping_Model_Carrier_Interface
{
    protected $_code = 'ainstainer_mycarrier';

 public function collectRates(Mage_Shipping_Model_Rate_Request $request)
    {
        $result = Mage::getModel('shipping/rate_result');
        /* @var $result Mage_Shipping_Model_Rate_Result */      
        $result->append($this->_getStandardShippingRate());       
        return $result;
    }

    protected function _getStandardShippingRate()
    {
        $rate = Mage::getModel('shipping/rate_result_method');
        /* @var $rate Mage_Shipping_Model_Rate_Result_Method */       
        $rate->setCarrier($this->_code);
        $rate->setCarrierTitle($this->getConfigData('title'));
       
        $rate->setMethod('standand');
        $rate->setMethodTitle('Standard');
       
        $rate->setPrice(5);
        $rate->setCost(0);
       
        return $rate;
    }
   
    public function getAllowedMethods()
    {
        return array(
            'standard' => 'Standard',
        );
    }
}
