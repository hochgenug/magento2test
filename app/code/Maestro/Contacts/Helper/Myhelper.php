<?php
namespace Maestro\Contacts\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Myhelper extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $storeManager;
    protected $objectManager;

    const XML_PATH_CONTACT = 'maestro_contacts/contact/';

    public function __construct(
        Context $context,
        ObjectManagerInterface $objectManager,
        StoreManagerInterface $storeManager
    ) {
        $this->objectManager = $objectManager;
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getConfig($code, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CONTACT . $code, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function foisdeux($nbr)
    {
        return $nbr*2;
    }
}
