<?php

/**
 * ZEND GROUP
 *
 * @name        AboutController.php
 * @category    Module
 * @package 	Front
 * @subpackage  Controller
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Aug 12, 2013
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

namespace Front\Controller;

use ZG\Utilities\ModelGenerator;

use Zend\View\Model\ViewModel;
use ZG\Mvc\Controller\ActionController;

class AboutController extends ActionController
{
	public function indexAction()
	{
		return new ViewModel();
	}
}