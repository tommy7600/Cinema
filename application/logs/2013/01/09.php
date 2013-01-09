<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-09 02:13:20 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:171
2013-01-09 02:13:20 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\Auth\ORM.php(75): Kohana_ORM::factory('User')
#8 C:\xampp\htdocs\phpnursery\Cinema\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('gfh', 'fgh', false)
#9 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\AdM\Auth.php(12): Kohana_Auth->login('gfh', 'fgh')
#10 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_AdM_Auth->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Auth))
#13 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:171
2013-01-09 02:39:45 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:171
2013-01-09 02:39:45 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('genreses')
#3 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(8): Kohana_ORM::factory('genres')
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#11 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:171
2013-01-09 02:40:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pn_cinema.genreses' doesn't exist [ SHOW FULL COLUMNS FROM `genreses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-09 02:40:09 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('genreses')
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(8): Kohana_ORM::factory('genres')
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#10 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-09 02:41:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_genre' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 02:41:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 02:41:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Genre' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 02:41:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 02:43:10 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\classes\Controller\Searcher.php [ 12 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php:12
2013-01-09 02:43:10 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php:12