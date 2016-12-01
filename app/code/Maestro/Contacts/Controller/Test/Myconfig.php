<?php
namespace Maestro\Contacts\Controller\Test;
use Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Myconfig extends Action
{
    protected $_scopeConfig;
    protected $_myHelper;

    /**
     * @param \Maestro\Contacts\Helper\Myhelper $helper
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        Context $context,
        \Maestro\Contacts\Helper\Myhelper $helper,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_myHelper = $helper;
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function execute()
    {
        var_dump($this->_myHelper->getConfig('is_active'));
        var_dump($this->_scopeConfig->getValue('maestro_contacts/contact/title', \Magento\Store\Model\ScopeInterface::SCOPE_WEBSITES));
    }
}