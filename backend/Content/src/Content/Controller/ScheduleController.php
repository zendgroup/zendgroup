<?php
/**
 * ZEND GROUP
 *
 * @name        ScheduleController.php
 * @category    backend
 * @package 	Content
 * @subpackage  Content\Controller
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Jul 24, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 *
 */
namespace Content\Controller;

use ZG\Mvc\Controller\ActionController;
use Zend\View\Model\ViewModel;

class ScheduleController extends ActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
