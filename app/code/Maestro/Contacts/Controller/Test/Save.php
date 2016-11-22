<?php
namespace Maestro\Contacts\Controller\Test;
class Save extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $contact = $this->_objectManager->create('Maestro\Contacts\Model\Contact');
        $contact->setName('Paul Dupond');
        $contact->save();

        die('contact save');
    }
}