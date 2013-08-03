<?php

defined('DS')
|| define('DS', DIRECTORY_SEPARATOR);

define('REQUEST_MICROTIME', microtime(true))
|| define('REQUEST_MICROTIME', microtime(true));

defined('WEB_ROOT')
|| define('WEB_ROOT', realpath(dirname(dirname(dirname(__FILE__)))));

defined('LIBRARY_PATH')
|| define('LIBRARY_PATH', WEB_ROOT . DS . 'library' . DS);

defined('PUBLIC_PATH')
|| define('PUBLIC_PATH', WEB_ROOT . DS . 'public' . DS);

defined('ZF2_LIBRARY')
|| define('ZF2_LIBRARY', realpath((getenv('ZF2_PATH')?getenv('ZF2_PATH'):'vendors\ZendFramework\library')));

defined('DT2_LIBRARY')
|| define('DT2_LIBRARY', realpath((getenv('DT2_PATH')?getenv('DT2_PATH'):'vendors\Doctrine')));

defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', getenv('APPLICATION_ENV'));

defined('FRONT_TEMPLATES_PATH')
|| define('FRONT_TEMPLATES_PATH', WEB_ROOT . DS . 'templates' . DS . 'frontend' . DS . 'default' . DS);

defined('BACKEND_TEMPLATES_PATH')
|| define('BACKEND_TEMPLATES_PATH', WEB_ROOT . DS . 'templates' . DS . 'backend' . DS . 'system' . DS);

defined('ASSETS_PATH')
|| define('ASSETS_PATH', WEB_ROOT . DS . 'assets' . DS);

defined('ASSETS_LINK')
|| define('ASSETS_LINK', 'http://assets.zendgroup.local');

