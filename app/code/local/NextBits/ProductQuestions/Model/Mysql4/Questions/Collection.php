<?php 
class NextBits_ProductQuestions_Model_Mysql4_Questions_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
		parent::_construct();
        $this->_init('productquestions/questions');
    }
}