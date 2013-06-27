<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TasksController extends AbstractActionController{
    
    public function indexAction(){
	$sm = $this->getServiceLocator();
	$taskTable = $sm->get('Application\Model\TaskTable');
        return new ViewModel(array(
		'tasks' => $taskTable->fetchAll()
	));
    }

}
