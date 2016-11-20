<?php
namespace Maestro\Contacts\Controller\Test;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        // charge le layout
        $this->_view->loadLayout();
        // fait le rendu
        $this->_view->renderLayout();
    }
}