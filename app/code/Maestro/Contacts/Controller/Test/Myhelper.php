<?php
namespace Maestro\Contacts\Controller\Test;
use Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Myhelper extends Action
{
    protected $_myHelper;

    /**
     * @param \Maestro\Contacts\Helper\Myhelper $helperData
     */
    public function __construct(
        Context $context,
        \Maestro\Contacts\Helper\Myhelper $helper
    ) {
        $this->_myHelper = $helper;
        parent::__construct($context);
    }

    public function execute()
    {
        $nbr = 2;
        echo $nbr.' fois 2 = '.$this->_myHelper->foisdeux($nbr);
    }
}
