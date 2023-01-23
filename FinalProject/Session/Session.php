<?php
namespace TresdTech\FinalProject\Model;
use Magento\Framework\Model\AbstractModel;
class Session extends AbstractModel
{
    protected $_session;

	public function __construct(
	    
	    \Magento\Customer\Model\Session $session
	    
	) {
	    
	    $this->_session = $session;
	    
	}
}