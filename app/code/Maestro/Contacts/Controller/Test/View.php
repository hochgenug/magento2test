<?php
namespace Maestro\Contacts\Controller\Test;
class View extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        /** @var \Maestro\Contacts\Model\Contact $contactModel */
        $contactModel = $this->_objectManager->create('Maestro\Contacts\Model\Contact');

        /** @var \Maestro\Contacts\Model\ResourceModel\Contact\Collection $contactCollection */
        $contactCollection =  $contactModel->getCollection();

        $collection = $contactCollection->addFieldToFilter('name', array('like'=> 'Paul%'));
        foreach($collection as $contact) {
            var_dump($contact->getData());
        }

        die('Collection');
    }
}
