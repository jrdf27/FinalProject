<?php
namespace TresdTech\FinalProject\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('mageplaza_helloworld_post', 'post_id');  
    }
}