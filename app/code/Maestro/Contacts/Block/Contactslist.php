<?php
namespace Maestro\Contacts\Block;
use Magento\Framework\View\Element\Template;

class Contactslist extends Template
{
    private $_contact;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Maestro\Contacts\Model\Contact $contact,
        \Magento\Framework\App\ResourceConnection $resource,
        array $data = []
    ) {
        $this->_contact = $contact;
        $this->_resource = $resource;

        parent::__construct(
            $context,
            $data
        );
    }

    public function getContacts()
    {
        $collection = $this->_contact->getCollection();
        return $collection;
    }
}