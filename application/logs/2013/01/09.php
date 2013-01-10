<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<<<<<<< HEAD
2013-01-09 04:00:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\index.php [ 25 ] in :
2013-01-09 04:00:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 04:00:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\index.php [ 25 ] in :
2013-01-09 04:00:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 04:11:31 --- CRITICAL: View_Exception [ 0 ]: The requested view adm_auth could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 04:11:31 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('adm_auth')
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('adm_auth', NULL)
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('adm_auth')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(16): Kohana_Controller_Template->before()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Auth))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 04:20:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 33 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:33
2013-01-09 04:20:42 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 33, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(23): Kohana_Controller_Template->after()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:33
2013-01-09 04:34:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 31 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:31
2013-01-09 04:34:05 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 31, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(23): Kohana_Controller_Template->after()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:31
=======
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
<<<<<<< HEAD
2013-01-09 03:08:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 17 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php:17
2013-01-09 03:08:26 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Admin.php(23): Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php:17
2013-01-09 03:08:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 17 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php:17
2013-01-09 03:08:48 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Admin.php(23): Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php:17
2013-01-09 03:20:40 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in :
2013-01-09 03:20:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php(8): getdate('13:01:09')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-09 03:29:09 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\welcome\index.php [ 5 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 03:29:09 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 03:31:24 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 21 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:21
2013-01-09 03:31:24 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php(21): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:21
2013-01-09 03:31:36 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:18
2013-01-09 03:31:36 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php(18): Kohana_View->__get('content')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:18
2013-01-09 03:32:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 3 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 03:32:06 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 04:06:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: day ~ APPPATH\views\welcome\index.php [ 5 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:06:27 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:07:09 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\welcome\index.php [ 5 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:07:09 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:07:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ APPPATH\views\welcome\index.php [ 5 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:07:23 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:08:40 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\welcome\index.php [ 5 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:08:40 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:09:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: day ~ APPPATH\views\welcome\index.php [ 5 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:09:15 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:5
2013-01-09 04:43:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\welcome\index.php [ 11 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:11
2013-01-09 04:43:37 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(11): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:11
2013-01-09 04:43:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\welcome\index.php [ 11 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:11
2013-01-09 04:43:48 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(11): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:11
2013-01-09 05:33:12 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:33:12 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:34:33 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:34:33 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:34:44 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:34:44 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:36:31 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:36:31 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:38:48 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:38:48 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:42:02 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:42:02 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:42:08 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:42:08 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:43:12 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:43:12 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:44:19 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:44:19 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php:137
2013-01-09 05:47:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ APPPATH\classes\Controller\Seances.php [ 9 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:9
2013-01-09 05:47:33 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_get_seances()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:9
2013-01-09 05:48:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 17 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php:17
2013-01-09 05:48:48 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php:17
2013-01-09 05:51:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 3 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 05:51:08 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 05:56:13 --- CRITICAL: ErrorException [ 1 ]: Class 'DayCalculator' not found ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in :
2013-01-09 05:56:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 05:57:18 --- CRITICAL: ErrorException [ 1 ]: Class 'DayCalculator' not found ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in :
2013-01-09 05:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 05:57:26 --- CRITICAL: ErrorException [ 1 ]: Class 'DayCalculator' not found ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in :
2013-01-09 05:57:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 05:59:33 --- CRITICAL: ErrorException [ 2 ]: include(classes/Helper/DayCalculator.php): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:8
2013-01-09 05:59:33 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'include(classes...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php(8): Controller_Welcome::action_index()
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:8
2013-01-09 05:59:51 --- CRITICAL: ErrorException [ 2 ]: include(../classes/Helper/DayCalculator.php): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:8
2013-01-09 05:59:51 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'include(../clas...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php(8): Controller_Welcome::action_index()
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Welcome.php:8
2013-01-09 06:02:22 --- CRITICAL: ErrorException [ 1 ]: Class 'DayCalculator' not found ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in :
2013-01-09 06:02:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 06:06:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Seances.php [ 12 ] in :
2013-01-09 06:06:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 06:11:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selectedd ~ APPPATH\views\welcome\index.php [ 3 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 06:11:14 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 06:14:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selected ~ APPPATH\views\welcome\index.php [ 3 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 06:14:11 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:3
2013-01-09 06:14:35 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\welcome\index.php [ 2 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:14:35 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:14:46 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\welcome\index.php [ 2 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:14:46 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:14:59 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\welcome\index.php [ 2 ] in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:14:59 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\views\welcome\index.php:2
=======
2013-01-09 04:15:11 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-01-09 04:15:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\Cinema\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #86, 'name')
#2 C:\xampp\htdocs\Cinema\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('name')
#3 C:\xampp\htdocs\Cinema\application\views\searcher\index.php(4): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#11 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in :
2013-01-09 04:17:03 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\searcher\index.php [ 10 ] in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:10
2013-01-09 04:17:03 --- DEBUG: #0 C:\xampp\htdocs\Cinema\application\views\searcher\index.php(10): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#8 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:10
2013-01-09 04:17:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Genre as array ~ APPPATH\views\searcher\index.php [ 10 ] in :
2013-01-09 04:17:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 04:19:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\Controller\Searcher.php [ 9 ] in :
2013-01-09 04:19:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 04:32:08 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pn_cinema.movieses' doesn't exist [ SHOW FULL COLUMNS FROM `movieses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\Cinema\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-09 04:32:08 --- DEBUG: #0 C:\xampp\htdocs\Cinema\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\Cinema\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('movieses')
#2 C:\xampp\htdocs\Cinema\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\Cinema\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\Cinema\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\Cinema\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php(9): Kohana_ORM::factory('Movies')
#7 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#10 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\Cinema\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-09 04:32:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Movies' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 04:32:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 04:33:24 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Controller\Searcher.php [ 10 ] in :
2013-01-09 04:33:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php(10): implode(',', Object(Database_MySQL_Result))
#2 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-09 04:33:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: movies_typeahead ~ APPPATH\classes\Controller\Searcher.php [ 16 ] in C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php:16
2013-01-09 04:33:52 --- DEBUG: #0 C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php:16
2013-01-09 04:34:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: movieble ~ APPPATH\views\searcher\index.php [ 3 ] in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:3
2013-01-09 04:34:00 --- DEBUG: #0 C:\xampp\htdocs\Cinema\application\views\searcher\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\Cinema\application\views\index.php(26): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#8 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:3
2013-01-09 04:37:05 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Controller\Searcher.php [ 10 ] in :
2013-01-09 04:37:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php(10): implode(',', Object(Database_MySQL_Result))
#2 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-09 04:38:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\Controller\Searcher.php [ 10 ] in C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php:10
2013-01-09 04:38:09 --- DEBUG: #0 C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\Cinema\application\classes\Controller\Searcher.php:10
2013-01-09 04:40:20 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\Searcher.php [ 14 ] in :
2013-01-09 04:40:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
>>>>>>> fb6253cfd2751c384584512c46eb423078893a6e

<<<<<<< HEAD
2013-01-09 06:01:11 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\index.php [ 48 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:48
2013-01-09 06:01:11 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_Core::error_handler(2, 'include(): File...', 'D:\SvnTortoise\...', 48, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:48
2013-01-09 06:02:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$uri ~ APPPATH\classes\Controller\Template\Website.php [ 7 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:02:48 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\SvnTortoise\...', 7, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Template_Website->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:03:18 --- CRITICAL: ErrorException [ 2 ]: include(welcome/index): failed to open stream: No such file or directory ~ APPPATH\views\index.php [ 48 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:48
2013-01-09 06:03:18 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_Core::error_handler(2, 'include(welcome...', 'D:\SvnTortoise\...', 48, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:48
2013-01-09 06:03:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\index.php [ 48 ] in :
2013-01-09 06:03:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 06:08:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Searcher::$content ~ APPPATH\classes\Controller\Template\Website.php [ 7 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:08:49 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\SvnTortoise\...', 7, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Template_Website->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:21:41 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, string given, called in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php on line 9 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:28
2013-01-09 06:21:41 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\SvnTortoise\...', 28, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php(9): Kohana_View::factory('views', 'welcome/index')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Template_Website->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#8 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:28
2013-01-09 06:27:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: genres ~ APPPATH\views\searcher\index.php [ 4 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\searcher\index.php:4
2013-01-09 06:27:01 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\searcher\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 4, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\searcher\index.php:4
2013-01-09 06:27:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: genres ~ APPPATH\views\searcher\index.php [ 4 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\searcher\index.php:4
2013-01-09 06:27:42 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\searcher\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 4, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\searcher\index.php:4
=======
2013-01-09 05:26:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: movies ~ APPPATH\views\searcher\index.php [ 36 ] in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:36
2013-01-09 05:26:54 --- DEBUG: #0 C:\xampp\htdocs\Cinema\application\views\searcher\index.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\Cinema\application\views\index.php(48): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#8 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:36
2013-01-09 05:27:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\searcher\index.php [ 40 ] in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:40
2013-01-09 05:27:45 --- DEBUG: #0 C:\xampp\htdocs\Cinema\application\views\searcher\index.php(40): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\Cinema\application\views\index.php(48): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#8 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\Cinema\application\views\searcher\index.php:40
>>>>>>> 003d84da22375d5274c5e95bfc86a95cf142b087
>>>>>>> 06e5a1b40015ca50b6ac3d8c50e3065eb880702f

2013-01-09 06:32:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:32:45 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:33:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:33:00 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:33:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:33:47 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:34:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Seances::$content ~ APPPATH\classes\Controller\Template\Website.php [ 7 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:34:48 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\SvnTortoise\...', 7, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Template_Website->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:35:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Seances::$content ~ APPPATH\classes\Controller\Template\Website.php [ 7 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:35:18 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\SvnTortoise\...', 7, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Template_Website->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:35:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Seances::$content ~ APPPATH\classes\Controller\Template\Website.php [ 7 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:35:29 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\SvnTortoise\...', 7, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Template_Website->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:7
2013-01-09 06:36:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:36:57 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:38:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:38:00 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:38:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:38:31 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:38:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:38:58 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:40:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:40:19 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): include()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#15 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:40:19 --- CRITICAL: ErrorException [ 2 ]: include(&lt;style type=&quot;text/css&quot;&gt;
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style &amp;&amp; elem.style['display'])
		// Only works with the &quot;style&quot; attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the &quot;display&quot; style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}
&lt;/script&gt;
&lt;div id=&quot;kohana_error&quot;&gt;
	&lt;h1&gt;&lt;span class=&quot;type&quot;&gt;ErrorException [ Notice ]:&lt;/span&gt; &lt;span class=&quot;message&quot;&gt;Undefined variable: days&lt;/span&gt;&lt;/h1&gt;
	&lt;div id=&quot;error50ed653354720&quot; class=&quot;content&quot;&gt;
		&lt;p&gt;&lt;span class=&quot;file&quot;&gt;APPPATH\views\welcome\index.php [ 2 ]&lt;/span&gt;&lt;/p&gt;
		&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; &amp;lt;ul class=&quot;nav nav-tabs&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt;     &amp;lt;?php var_dump($days); ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;    &amp;lt;?php foreach($days as $key =&amp;gt; $value): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;         &amp;lt;?php if($selected == $value): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;             &amp;lt;li class=&quot;active&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;                 &amp;lt;a href=&quot;/seances/get_seances?date=&amp;lt;?php echo $value; ?&amp;gt;&quot;&amp;gt;&amp;lt;?php echo $key; ?&amp;gt;&amp;lt;/a&amp;gt;  
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;             &amp;lt;/li&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;		&lt;ol class=&quot;trace&quot;&gt;
					&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source0&quot; onclick=&quot;return koggle('error50ed653354720source0')&quot;&gt;APPPATH\views\welcome\index.php [ 2 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Core::error_handler(&lt;a href=&quot;#error50ed653354720args0&quot; onclick=&quot;return koggle('error50ed653354720args0')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args0&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 8&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;Undefined variable: days&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;2&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(80)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;3&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 2&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;4&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
    &quot;kohana_view_filename&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(80)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome/index.php&quot;
    &quot;kohana_view_data&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source0&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; &amp;lt;ul class=&quot;nav nav-tabs&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt;     &amp;lt;?php var_dump($days); ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;    &amp;lt;?php foreach($days as $key =&amp;gt; $value): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;         &amp;lt;?php if($selected == $value): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;             &amp;lt;li class=&quot;active&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;                 &amp;lt;a href=&quot;/seances/get_seances?date=&amp;lt;?php echo $value; ?&amp;gt;&quot;&amp;gt;&amp;lt;?php echo $key; ?&amp;gt;&amp;lt;/a&amp;gt;  
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;             &amp;lt;/li&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source1&quot; onclick=&quot;return koggle('error50ed653354720source1')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed653354720args1&quot; onclick=&quot;return koggle('error50ed653354720args1')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args1&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(80)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source1&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source2&quot; onclick=&quot;return koggle('error50ed653354720source2')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed653354720args2&quot; onclick=&quot;return koggle('error50ed653354720args2')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args2&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(80)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source2&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source3&quot; onclick=&quot;return koggle('error50ed653354720source3')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 228 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed653354720source3&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;223&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;224&lt;/span&gt; 	public function __toString()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;225&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;226&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;227&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;228&lt;/span&gt; 			return $this-&amp;gt;render();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;229&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;230&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;231&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;232&lt;/span&gt; 			/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;233&lt;/span&gt; 			 * Display the exception message.
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source4&quot; onclick=&quot;return koggle('error50ed653354720source4')&quot;&gt;APPPATH\views\index.php [ 48 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;__toString()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed653354720source4&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;43&lt;/span&gt;                     &amp;lt;/ul&amp;gt;                    
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php include isset($content) ? $content : ''; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/bootstrap.js&quot;&amp;gt;&amp;lt;/script&amp;gt;                       
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source5&quot; onclick=&quot;return koggle('error50ed653354720source5')&quot;&gt;APPPATH\views\index.php [ 48 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed653354720source5&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;43&lt;/span&gt;                     &amp;lt;/ul&amp;gt;                    
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php include isset($content) ? $content : ''; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/bootstrap.js&quot;&amp;gt;&amp;lt;/script&amp;gt;                       
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source6&quot; onclick=&quot;return koggle('error50ed653354720source6')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed653354720args6&quot; onclick=&quot;return koggle('error50ed653354720args6')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args6&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source6&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source7&quot; onclick=&quot;return koggle('error50ed653354720source7')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed653354720args7&quot; onclick=&quot;return koggle('error50ed653354720args7')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args7&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &lt;span&gt;(
    &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(80)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome/index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
    &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;home&quot;
    &quot;days&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &lt;span&gt;(
        &quot;Wednesday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-09&quot;
        &quot;Thursday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-10&quot;
        &quot;Friday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-11&quot;
        &quot;Saturday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-12&quot;
        &quot;Sunday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-13&quot;
        &quot;Monday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-14&quot;
        &quot;Tuesday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-15&quot;
    )&lt;/span&gt;
    &quot;selected&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-09&quot;
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source7&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source8&quot; onclick=&quot;return koggle('error50ed653354720source8')&quot;&gt;SYSPATH\classes\Kohana\Controller\Template.php [ 44 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed653354720source8&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;39&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;40&lt;/span&gt; 	public function after()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;41&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;42&lt;/span&gt; 		if ($this-&amp;gt;auto_render === TRUE)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;43&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 			$this-&amp;gt;response-&amp;gt;body($this-&amp;gt;template-&amp;gt;render());
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt; 		parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source9&quot; onclick=&quot;return koggle('error50ed653354720source9')&quot;&gt;SYSPATH\classes\Kohana\Controller.php [ 87 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller_Template-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed653354720source9&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;82&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;83&lt;/span&gt; 		// Execute the action itself
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;84&lt;/span&gt; 		$this-&amp;gt;{$action}();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;85&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;86&lt;/span&gt; 		// Execute the &quot;after action&quot; method
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;87&lt;/span&gt; 		$this-&amp;gt;after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;88&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;89&lt;/span&gt; 		// Return the response
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;90&lt;/span&gt; 		return $this-&amp;gt;response;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;91&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;92&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													{PHP internal call}
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller-&gt;execute()
				&lt;/p&gt;
											&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source11&quot; onclick=&quot;return koggle('error50ed653354720source11')&quot;&gt;SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					ReflectionMethod-&gt;invoke(&lt;a href=&quot;#error50ed653354720args11&quot; onclick=&quot;return koggle('error50ed653354720args11')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args11&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Controller_Welcome(5)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;public&lt;/small&gt; template =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &lt;span&gt;(
            &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(80)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome/index.php&quot;
                &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            }&lt;/code&gt;
            &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;home&quot;
            &quot;days&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &lt;span&gt;(
                &quot;Wednesday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-09&quot;
                &quot;Thursday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-10&quot;
                &quot;Friday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-11&quot;
                &quot;Saturday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-12&quot;
                &quot;Sunday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-13&quot;
                &quot;Monday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-14&quot;
                &quot;Tuesday&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-15&quot;
            )&lt;/span&gt;
            &quot;selected&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;2013-01-09&quot;
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;public&lt;/small&gt; content =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;welcome/index&quot;
    &lt;small&gt;public&lt;/small&gt; auto_render =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;public&lt;/small&gt; request =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
        &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
        &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _route =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Route(5)&lt;/span&gt; &lt;code&gt;{
            &lt;small&gt;protected&lt;/small&gt; _filters =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(32)&lt;/span&gt; &quot;(&amp;lt;controller&amp;gt;(/&amp;lt;action&amp;gt;(/&amp;lt;id&amp;gt;)))&quot;
            &lt;small&gt;protected&lt;/small&gt; _regex =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            &lt;small&gt;protected&lt;/small&gt; _defaults =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
                &quot;controller&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;welcome&quot;
                &quot;action&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
            )&lt;/span&gt;
            &lt;small&gt;protected&lt;/small&gt; _route_regex =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(95)&lt;/span&gt; &quot;#^(?:(?P&amp;lt;controller&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;action&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;id&amp;gt;[^/.,;?\n]++))?)?)?$#uD&quot;
        }&lt;/code&gt;
        &lt;small&gt;protected&lt;/small&gt; _routes =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
        }&lt;/code&gt;
        &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _directory =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
        &lt;small&gt;protected&lt;/small&gt; _controller =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;Welcome&quot;
        &lt;small&gt;protected&lt;/small&gt; _action =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
        &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
        &lt;small&gt;protected&lt;/small&gt; _external =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _get =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _post =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            &quot;session&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _client =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request_Client_Internal(9)&lt;/span&gt; &lt;code&gt;{
            &lt;small&gt;protected&lt;/small&gt; _previous_environment =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &lt;small&gt;protected&lt;/small&gt; _cache =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &lt;small&gt;protected&lt;/small&gt; _follow =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &lt;small&gt;protected&lt;/small&gt; _follow_headers =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
                0 =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;Authorization&quot;
            )&lt;/span&gt;
            &lt;small&gt;protected&lt;/small&gt; _strict_redirect =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
            &lt;small&gt;protected&lt;/small&gt; _header_callbacks =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
                &quot;Location&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;Request_Client::on_header_location&quot;
            )&lt;/span&gt;
            &lt;small&gt;protected&lt;/small&gt; _max_callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 5
            &lt;small&gt;protected&lt;/small&gt; _callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 1
            &lt;small&gt;protected&lt;/small&gt; _callback_params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        }&lt;/code&gt;
    }&lt;/code&gt;
    &lt;small&gt;public&lt;/small&gt; response =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Response(5)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _status =&gt; &lt;small&gt;integer&lt;/small&gt; 200
        &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
        }&lt;/code&gt;
        &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
        &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;NULL&lt;/small&gt;
    }&lt;/code&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source11&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 92&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 93&lt;/span&gt; 			// Create a new instance of the controller
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 94&lt;/span&gt; 			$controller = $class-&amp;gt;newInstance($request, $response);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 95&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 96&lt;/span&gt; 			// Run the controller's execute() method
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt; 97&lt;/span&gt; 			$response = $class-&amp;gt;getMethod('execute')-&amp;gt;invoke($controller);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 98&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 99&lt;/span&gt; 			if ( ! $response instanceof Response)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;100&lt;/span&gt; 			{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;101&lt;/span&gt; 				// Controller failed to return a Response.
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;102&lt;/span&gt; 				throw new Kohana_Exception('Controller failed to return a Response');
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source12&quot; onclick=&quot;return koggle('error50ed653354720source12')&quot;&gt;SYSPATH\classes\Kohana\Request\Client.php [ 114 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Request_Client_Internal-&gt;execute_request(&lt;a href=&quot;#error50ed653354720args12&quot; onclick=&quot;return koggle('error50ed653354720args12')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args12&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
    &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
    &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _route =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Route(5)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _filters =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(32)&lt;/span&gt; &quot;(&amp;lt;controller&amp;gt;(/&amp;lt;action&amp;gt;(/&amp;lt;id&amp;gt;)))&quot;
        &lt;small&gt;protected&lt;/small&gt; _regex =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _defaults =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
            &quot;controller&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;welcome&quot;
            &quot;action&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _route_regex =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(95)&lt;/span&gt; &quot;#^(?:(?P&amp;lt;controller&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;action&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;id&amp;gt;[^/.,;?\n]++))?)?)?$#uD&quot;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _routes =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _directory =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _controller =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;Welcome&quot;
    &lt;small&gt;protected&lt;/small&gt; _action =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
    &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _external =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _get =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _post =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
        &quot;session&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _client =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request_Client_Internal(9)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _previous_environment =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _cache =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _follow =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _follow_headers =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            0 =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;Authorization&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _strict_redirect =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
        &lt;small&gt;protected&lt;/small&gt; _header_callbacks =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            &quot;Location&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;Request_Client::on_header_location&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _max_callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 5
        &lt;small&gt;protected&lt;/small&gt; _callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 1
        &lt;small&gt;protected&lt;/small&gt; _callback_params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Response(5)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _status =&gt; &lt;small&gt;integer&lt;/small&gt; 200
    &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;NULL&lt;/small&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source12&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;109&lt;/span&gt; 		$orig_response = $response = Response::factory();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;110&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;111&lt;/span&gt; 		if (($cache = $this-&amp;gt;cache()) instanceof HTTP_Cache)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;112&lt;/span&gt; 			return $cache-&amp;gt;execute($this, $request, $response);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;113&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;114&lt;/span&gt; 		$response = $this-&amp;gt;execute_request($request, $response);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;115&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;116&lt;/span&gt; 		// Execute response callbacks
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;117&lt;/span&gt; 		foreach ($this-&amp;gt;header_callbacks() as $header =&amp;gt; $callback)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;118&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;119&lt;/span&gt; 			if ($response-&amp;gt;headers($header))
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source13&quot; onclick=&quot;return koggle('error50ed653354720source13')&quot;&gt;SYSPATH\classes\Kohana\Request.php [ 990 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Request_Client-&gt;execute(&lt;a href=&quot;#error50ed653354720args13&quot; onclick=&quot;return koggle('error50ed653354720args13')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed653354720args13&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
    &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
    &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _route =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Route(5)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _filters =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(32)&lt;/span&gt; &quot;(&amp;lt;controller&amp;gt;(/&amp;lt;action&amp;gt;(/&amp;lt;id&amp;gt;)))&quot;
        &lt;small&gt;protected&lt;/small&gt; _regex =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _defaults =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
            &quot;controller&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;welcome&quot;
            &quot;action&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _route_regex =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(95)&lt;/span&gt; &quot;#^(?:(?P&amp;lt;controller&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;action&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;id&amp;gt;[^/.,;?\n]++))?)?)?$#uD&quot;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _routes =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _directory =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _controller =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;Welcome&quot;
    &lt;small&gt;protected&lt;/small&gt; _action =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
    &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _external =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _get =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _post =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
        &quot;session&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _client =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request_Client_Internal(9)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _previous_environment =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _cache =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _follow =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _follow_headers =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            0 =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;Authorization&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _strict_redirect =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
        &lt;small&gt;protected&lt;/small&gt; _header_callbacks =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            &quot;Location&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;Request_Client::on_header_location&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _max_callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 5
        &lt;small&gt;protected&lt;/small&gt; _callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 1
        &lt;small&gt;protected&lt;/small&gt; _callback_params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed653354720source13&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;985&lt;/span&gt; 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;986&lt;/span&gt; 				':uri' =&amp;gt; $this-&amp;gt;_uri,
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;987&lt;/span&gt; 			));
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;988&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;989&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;990&lt;/span&gt; 		return $this-&amp;gt;_client-&amp;gt;execute($this);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;991&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;992&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;993&lt;/span&gt; 	/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;994&lt;/span&gt; 	 * Returns whether this request is the initial request Kohana received.
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;995&lt;/span&gt; 	 * Can be used to test for sub requests.
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed653354720source14&quot; onclick=&quot;return koggle('error50ed653354720source14')&quot;&gt;DOCROOT\index.php [ 118 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Request-&gt;execute()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed653354720source14&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;113&lt;/span&gt; 	/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;114&lt;/span&gt; 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;115&lt;/span&gt; 	 * If no source is specified, the URI will be automatically detected.
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;116&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;117&lt;/span&gt; 	echo Request::factory(TRUE, array(), FALSE)
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;118&lt;/span&gt; 		-&amp;gt;execute()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;119&lt;/span&gt; 		-&amp;gt;send_headers(TRUE)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;120&lt;/span&gt; 		-&amp;gt;body();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;121&lt;/span&gt; }
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
							&lt;/ol&gt;
	&lt;/div&gt;
	&lt;h2&gt;&lt;a href=&quot;#error50ed653354720environment&quot; onclick=&quot;return koggle('error50ed653354720environment')&quot;&gt;Environment&lt;/a&gt;&lt;/h2&gt;
	&lt;div id=&quot;error50ed653354720environment&quot; class=&quot;content collapsed&quot;&gt;
				&lt;h3&gt;&lt;a href=&quot;#error50ed653354720environment_included&quot; onclick=&quot;return koggle('error50ed653354720environment_included')&quot;&gt;Included files&lt;/a&gt; (112)&lt;/h3&gt;
		&lt;div id=&quot;error50ed653354720environment_included&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;DOCROOT\index.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\bootstrap.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Core.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\I18n.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\I18n.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Cookie.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Cookie.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Exception.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Kohana\Exception.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Log.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Log.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Config.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Log\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Log\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Log\Writer.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Log\Writer.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Config\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\File\Reader.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\Reader.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\Source.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Route.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Route.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Message.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Message.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Header.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Header.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Request\Client\Internal.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Request\Client\Internal.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Request\Client.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Request\Client.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Arr.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Arr.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Profiler.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Profiler.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\classes\Controller\Welcome.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\classes\Controller\Template\Website.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Controller\Template.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Controller.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Controller.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\View.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\View.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\classes\Helper\DayCalculator.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\views\index.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\auth\classes\Auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\auth\classes\Kohana\Auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\auth\config\auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\config\auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Config\Group.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\Group.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Auth\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Kohana\Auth\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\config\session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\config\session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Session\Native.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Session\Native.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\User.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\Auth\User.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Kohana\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Model.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Model.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Inflector.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Inflector.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\config\inflector.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\config\database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\config\database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\MySQL.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\MySQL.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\MySQL\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\MySQL\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\DB.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\DB.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query\Builder\Select.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query\Builder\Where.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query\Builder.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query\Builder.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\Role.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\Auth\Role.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Expression.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Expression.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\config\pageConfig.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\views\welcome\index.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Debug.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Debug.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Date.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Date.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\views\kohana\error.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTML.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTML.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\UTF8.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\UTF8.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
				&lt;h3&gt;&lt;a href=&quot;#error50ed653354720environment_loaded&quot; onclick=&quot;return koggle('error50ed653354720environment_loaded')&quot;&gt;Loaded extensions&lt;/a&gt; (49)&lt;/h3&gt;
		&lt;div id=&quot;error50ed653354720environment_loaded&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;Core&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;bcmath&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;calendar&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;ctype&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;date&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;ereg&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;filter&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;ftp&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;hash&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;iconv&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;json&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mcrypt&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SPL&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;odbc&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;pcre&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;Reflection&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;session&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;standard&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mysqlnd&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;tokenizer&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;zip&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;zlib&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;libxml&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;dom&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PDO&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;bz2&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SimpleXML&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;wddx&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xml&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xmlreader&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xmlwriter&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;apache2handler&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;Phar&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;curl&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mbstring&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;exif&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;gd&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;gettext&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mysql&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mysqli&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;pdo_mysql&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;pdo_sqlite&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;soap&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;sockets&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;sqlite3&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xmlrpc&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xsl&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mhash&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xdebug&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
						&lt;h3&gt;&lt;a href=&quot;#error50ed653354720environment_session&quot; onclick=&quot;return koggle('error50ed653354720environment_session')&quot;&gt;$_SESSION&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed653354720environment_session&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;last_active&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 1357735138&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;auth_user&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Model_User(34)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _has_many =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
        &quot;user_tokens&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &lt;span&gt;(
            &quot;foreign_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;user_id&quot;
            &quot;through&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;far_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;user_token_id&quot;
            &quot;model&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;User_Token&quot;
        )&lt;/span&gt;
        &quot;roles&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &lt;span&gt;(
            &quot;foreign_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;user_id&quot;
            &quot;through&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;roles_users&quot;
            &quot;far_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;role_id&quot;
            &quot;model&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;Role&quot;
        )&lt;/span&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _has_one =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _belongs_to =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _load_with =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _validation =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _object =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
        &quot;email&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;p@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;9&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357728437&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _changed =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _original_values =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
        &quot;email&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;p@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;9&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357728437&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _related =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _valid =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _loaded =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _saved =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _sorting =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _foreign_key_suffix =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;_id&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_plural =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 1
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;11&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(14)&lt;/span&gt; &quot;auto_increment&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;PRI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;email&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;email&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 2
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;254&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;username&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;username&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 3
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;32&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;password&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;password&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 4
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;64&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;logins&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;logins&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 5
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;last_login&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;last_login&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 6
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _updated_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _created_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _serialize_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _primary_key =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
    &lt;small&gt;protected&lt;/small&gt; _primary_key_value =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_names_plural =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _reload_on_wakeup =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL(6)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _connection_id =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(40)&lt;/span&gt; &quot;c45d8c80f225e7bc6843585eac509220d44e2dc8&quot;
        &lt;small&gt;protected&lt;/small&gt; _identifier =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;`&quot;
        &lt;small&gt;public&lt;/small&gt; last_query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(98)&lt;/span&gt; &quot;SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('2')&quot;
        &lt;small&gt;protected&lt;/small&gt; _instance =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;default&quot;
        &lt;small&gt;protected&lt;/small&gt; _connection =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql link)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _config =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;MySQL&quot;
            &quot;connection&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
                &quot;hostname&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(35)&lt;/span&gt; &quot;vm-phpnursery.future-processing.lan&quot;
                &quot;database&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pn_cinema&quot;
                &quot;persistent&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            )&lt;/span&gt;
            &quot;table_prefix&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;charset&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;utf8&quot;
            &quot;caching&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_group =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_pending =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_reset =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db_builder =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _with_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cast_data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _errors_filename =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
												&lt;h3&gt;&lt;a href=&quot;#error50ed653354720environment_cookie&quot; onclick=&quot;return koggle('error50ed653354720environment_cookie')&quot;&gt;$_COOKIE&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed653354720environment_cookie&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;session&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(26)&lt;/span&gt; &quot;nduf11hbqe7r7fammgttda3b94&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
						&lt;h3&gt;&lt;a href=&quot;#error50ed653354720environment_server&quot; onclick=&quot;return koggle('error50ed653354720environment_server')&quot;&gt;$_SERVER&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed653354720environment_server&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_HOST&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_USER_AGENT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(63)&lt;/span&gt; &quot;text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_LANGUAGE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(23)&lt;/span&gt; &quot;pl,en-us;q=0.7,en;q=0.3&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_ENCODING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;gzip, deflate&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CONNECTION&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;keep-alive&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_COOKIE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;session=nduf11hbqe7r7fammgttda3b94&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CACHE_CONTROL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;max-age=0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(221)&lt;/span&gt; &quot;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Program Files (x86)\Git\c&amp;nbsp;&amp;hellip;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SystemRoot&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;COMSPEC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;C:\Windows\system32\cmd.exe&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATHEXT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(53)&lt;/span&gt; &quot;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;WINDIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SIGNATURE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(94)&lt;/span&gt; &quot;&amp;lt;address&amp;gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at kino.local Port 80&amp;lt;/address&amp;gt;
&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SOFTWARE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(45)&lt;/span&gt; &quot;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;80&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_SCHEME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;http&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_PREFIX&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADMIN&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(20)&lt;/span&gt; &quot;postmaster@localhost&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_FILENAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(54)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;61779&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;GATEWAY_INTERFACE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;CGI/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PROTOCOL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_METHOD&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;QUERY_STRING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_URI&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;/&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_SELF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME_FLOAT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;float&lt;/small&gt; 1357735218.653&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 1357735218&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
			&lt;/div&gt;
&lt;/div&gt;
): failed to open stream: Invalid argument ~ APPPATH\views\index.php [ 48 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:48
2013-01-09 06:40:19 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_Core::error_handler(2, 'include(&lt;sty...', 'D:\SvnTortoise\...', 48, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:48
2013-01-09 06:41:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days ~ APPPATH\views\welcome\index.php [ 2 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:41:27 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 2, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(48): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#14 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:2
2013-01-09 06:44:41 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\Kohana\View.php [ 171 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:15
2013-01-09 06:44:41 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php(15): Kohana_View->__get('content')
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Controller_Template_Website->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Template\Website.php:15
2013-01-09 06:46:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 06:46:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
<<<<<<< HEAD
2013-01-09 07:09:12 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pn_cinema.seanceses' doesn't exist [ SHOW FULL COLUMNS FROM `seanceses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-09 07:09:12 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('seanceses')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\AdM\Cinema.php(10): Kohana_ORM::factory('seances')
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_AdM_Cinema->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#13 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-09 07:10:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:10:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:10:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:10:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:10:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:10:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:10:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: seances ~ APPPATH\views\adm_cinema\index.php [ 3 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:10:48 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 3, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#16 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:10:49 --- CRITICAL: ErrorException [ 2 ]: include(&lt;style type=&quot;text/css&quot;&gt;
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style &amp;&amp; elem.style['display'])
		// Only works with the &quot;style&quot; attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the &quot;display&quot; style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}
&lt;/script&gt;
&lt;div id=&quot;kohana_error&quot;&gt;
	&lt;h1&gt;&lt;span class=&quot;type&quot;&gt;ErrorException [ Notice ]:&lt;/span&gt; &lt;span class=&quot;message&quot;&gt;Undefined variable: seances&lt;/span&gt;&lt;/h1&gt;
	&lt;div id=&quot;error50ed6c58da375&quot; class=&quot;content&quot;&gt;
		&lt;p&gt;&lt;span class=&quot;file&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/span&gt;&lt;/p&gt;
		&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;		&lt;ol class=&quot;trace&quot;&gt;
					&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source0&quot; onclick=&quot;return koggle('error50ed6c58da375source0')&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Core::error_handler(&lt;a href=&quot;#error50ed6c58da375args0&quot; onclick=&quot;return koggle('error50ed6c58da375args0')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6c58da375args0&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 8&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;Undefined variable: seances&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;2&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;3&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 3&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;4&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
    &quot;kohana_view_filename&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
    &quot;kohana_view_data&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6c58da375source0&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source1&quot; onclick=&quot;return koggle('error50ed6c58da375source1')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6c58da375args1&quot; onclick=&quot;return koggle('error50ed6c58da375args1')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6c58da375args1&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6c58da375source1&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source2&quot; onclick=&quot;return koggle('error50ed6c58da375source2')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6c58da375args2&quot; onclick=&quot;return koggle('error50ed6c58da375args2')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6c58da375args2&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6c58da375source2&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source3&quot; onclick=&quot;return koggle('error50ed6c58da375source3')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 228 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6c58da375source3&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;223&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;224&lt;/span&gt; 	public function __toString()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;225&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;226&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;227&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;228&lt;/span&gt; 			return $this-&amp;gt;render();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;229&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;230&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;231&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;232&lt;/span&gt; 			/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;233&lt;/span&gt; 			 * Display the exception message.
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source4&quot; onclick=&quot;return koggle('error50ed6c58da375source4')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;__toString()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6c58da375source4&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source5&quot; onclick=&quot;return koggle('error50ed6c58da375source5')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6c58da375source5&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source6&quot; onclick=&quot;return koggle('error50ed6c58da375source6')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6c58da375args6&quot; onclick=&quot;return koggle('error50ed6c58da375args6')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6c58da375args6&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6c58da375source6&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source7&quot; onclick=&quot;return koggle('error50ed6c58da375source7')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6c58da375args7&quot; onclick=&quot;return koggle('error50ed6c58da375args7')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6c58da375args7&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
    &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
    &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
    &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
        &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
        &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
    }&lt;/code&gt;
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6c58da375source7&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source8&quot; onclick=&quot;return koggle('error50ed6c58da375source8')&quot;&gt;SYSPATH\classes\Kohana\Controller\Template.php [ 44 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6c58da375source8&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;39&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;40&lt;/span&gt; 	public function after()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;41&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;42&lt;/span&gt; 		if ($this-&amp;gt;auto_render === TRUE)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;43&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 			$this-&amp;gt;response-&amp;gt;body($this-&amp;gt;template-&amp;gt;render());
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt; 		parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source9&quot; onclick=&quot;return koggle('error50ed6c58da375source9')&quot;&gt;APPPATH\classes\Controller\Admin.php [ 28 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller_Template-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6c58da375source9&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;23&lt;/span&gt;         }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;24&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;25&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;26&lt;/span&gt;     public function after() {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;27&lt;/span&gt;                   
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;28&lt;/span&gt;         parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;29&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;30&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;31&lt;/span&gt;     public function action_index()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;32&lt;/span&gt;     {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;33&lt;/span&gt;         
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source10&quot; onclick=&quot;return koggle('error50ed6c58da375source10')&quot;&gt;SYSPATH\classes\Kohana\Controller.php [ 87 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Controller_Admin-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6c58da375source10&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;82&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;83&lt;/span&gt; 		// Execute the action itself
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;84&lt;/span&gt; 		$this-&amp;gt;{$action}();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;85&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;86&lt;/span&gt; 		// Execute the &quot;after action&quot; method
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;87&lt;/span&gt; 		$this-&amp;gt;after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;88&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;89&lt;/span&gt; 		// Return the response
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;90&lt;/span&gt; 		return $this-&amp;gt;response;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;91&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;92&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													{PHP internal call}
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller-&gt;execute()
				&lt;/p&gt;
											&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6c58da375source12&quot; onclick=&quot;return koggle('error50ed6c58da375source12')&quot;&gt;SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					ReflectionMethod-&gt;invoke(&lt;a href=&quot;#error50ed6c58da375args12&quot; onclick=&quot;return koggle('error50ed6c58da375args12')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6c58da375args12&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Controller_AdM_Cinema(6)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;public&lt;/small&gt; template =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
            &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
                &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            }&lt;/code&gt;
            &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
            &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
                &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
                &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
                &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
            }&lt;/code&gt;
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;public&lt;/small&gt; content =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;adm_cinema\index&quot;
    &lt;small&gt;protected&lt;/small&gt; title =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;public&lt;/small&gt; auto_render =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;public&lt;/small&gt; request =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
        &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
        &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(18)&lt;/span&gt; &quot;http://...@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _changed =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _original_values =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
        &quot;email&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;p@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _related =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _valid =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _loaded =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _saved =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _sorting =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _foreign_key_suffix =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;_id&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_plural =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 1
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;11&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(14)&lt;/span&gt; &quot;auto_increment&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;PRI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;email&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;email&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 2
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;254&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;username&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;username&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 3
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;32&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;password&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;password&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 4
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;64&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;logins&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;logins&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 5
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;last_login&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;last_login&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 6
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _updated_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _created_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _serialize_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _primary_key =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
    &lt;small&gt;protected&lt;/small&gt; _primary_key_value =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_names_plural =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _reload_on_wakeup =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL(6)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _connection_id =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(40)&lt;/span&gt; &quot;c45d8c80f225e7bc6843585eac509220d44e2dc8&quot;
        &lt;small&gt;protected&lt;/small&gt; _identifier =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;`&quot;
        &lt;small&gt;public&lt;/small&gt; last_query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(98)&lt;/span&gt; &quot;SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('2')&quot;
        &lt;small&gt;protected&lt;/small&gt; _instance =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;default&quot;
        &lt;small&gt;protected&lt;/small&gt; _connection =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql link)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _config =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;MySQL&quot;
            &quot;connection&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
                &quot;hostname&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(35)&lt;/span&gt; &quot;vm-phpnursery.future-processing.lan&quot;
                &quot;database&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pn_cinema&quot;
                &quot;persistent&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            )&lt;/span&gt;
            &quot;table_prefix&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;charset&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;utf8&quot;
            &quot;caching&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_group =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_pending =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_reset =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db_builder =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _with_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cast_data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _errors_filename =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
												&lt;h3&gt;&lt;a href=&quot;#error50ed6c58da375environment_cookie&quot; onclick=&quot;return koggle('error50ed6c58da375environment_cookie')&quot;&gt;$_COOKIE&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6c58da375environment_cookie&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;session&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(26)&lt;/span&gt; &quot;i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
						&lt;h3&gt;&lt;a href=&quot;#error50ed6c58da375environment_server&quot; onclick=&quot;return koggle('error50ed6c58da375environment_server')&quot;&gt;$_SERVER&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6c58da375environment_server&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_STATUS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;200&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_HOST&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_USER_AGENT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(63)&lt;/span&gt; &quot;text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_LANGUAGE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(23)&lt;/span&gt; &quot;pl,en-us;q=0.7,en;q=0.3&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_ENCODING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;gzip, deflate&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CONNECTION&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;keep-alive&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_REFERER&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(18)&lt;/span&gt; &quot;http://kino.local/&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_COOKIE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;session=i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CACHE_CONTROL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;max-age=0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(221)&lt;/span&gt; &quot;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Program Files (x86)\Git\c&amp;nbsp;&amp;hellip;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SystemRoot&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;COMSPEC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;C:\Windows\system32\cmd.exe&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATHEXT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(53)&lt;/span&gt; &quot;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;WINDIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SIGNATURE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(94)&lt;/span&gt; &quot;&amp;lt;address&amp;gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at kino.local Port 80&amp;lt;/address&amp;gt;
&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SOFTWARE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(45)&lt;/span&gt; &quot;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;80&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_SCHEME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;http&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_PREFIX&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADMIN&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(20)&lt;/span&gt; &quot;postmaster@localhost&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_FILENAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(54)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;62678&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_URL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;GATEWAY_INTERFACE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;CGI/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PROTOCOL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_METHOD&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;QUERY_STRING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_URI&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_INFO&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_TRANSLATED&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(30)&lt;/span&gt; &quot;redirect:\index.php\adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_SELF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(21)&lt;/span&gt; &quot;/index.php/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME_FLOAT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;float&lt;/small&gt; 1357737048.235&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 1357737048&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
			&lt;/div&gt;
&lt;/div&gt;
): failed to open stream: Invalid argument ~ APPPATH\views\index.php [ 49 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:10:49 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_Core::error_handler(2, 'include(&lt;sty...', 'D:\SvnTortoise\...', 49, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:13:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: seances ~ APPPATH\views\adm_cinema\index.php [ 3 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:13:08 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 3, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#16 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:13:08 --- CRITICAL: ErrorException [ 2 ]: include(&lt;style type=&quot;text/css&quot;&gt;
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style &amp;&amp; elem.style['display'])
		// Only works with the &quot;style&quot; attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the &quot;display&quot; style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}
&lt;/script&gt;
&lt;div id=&quot;kohana_error&quot;&gt;
	&lt;h1&gt;&lt;span class=&quot;type&quot;&gt;ErrorException [ Notice ]:&lt;/span&gt; &lt;span class=&quot;message&quot;&gt;Undefined variable: seances&lt;/span&gt;&lt;/h1&gt;
	&lt;div id=&quot;error50ed6ce452e9b&quot; class=&quot;content&quot;&gt;
		&lt;p&gt;&lt;span class=&quot;file&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/span&gt;&lt;/p&gt;
		&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;		&lt;ol class=&quot;trace&quot;&gt;
					&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource0&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource0')&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Core::error_handler(&lt;a href=&quot;#error50ed6ce452e9bargs0&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs0')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs0&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 8&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;Undefined variable: seances&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;2&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;3&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 3&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;4&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
    &quot;kohana_view_filename&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
    &quot;kohana_view_data&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource0&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource1&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource1')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6ce452e9bargs1&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs1')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs1&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource1&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource2&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource2')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6ce452e9bargs2&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs2')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs2&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource2&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource3&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource3')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 228 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource3&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;223&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;224&lt;/span&gt; 	public function __toString()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;225&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;226&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;227&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;228&lt;/span&gt; 			return $this-&amp;gt;render();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;229&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;230&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;231&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;232&lt;/span&gt; 			/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;233&lt;/span&gt; 			 * Display the exception message.
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource4&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource4')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;__toString()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource4&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource5&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource5')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource5&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource6&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource6')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6ce452e9bargs6&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs6')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs6&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource6&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource7&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource7')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6ce452e9bargs7&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs7')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs7&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
    &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
    &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
    &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
        &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
        &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
    }&lt;/code&gt;
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource7&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource8&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource8')&quot;&gt;SYSPATH\classes\Kohana\Controller\Template.php [ 44 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource8&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;39&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;40&lt;/span&gt; 	public function after()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;41&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;42&lt;/span&gt; 		if ($this-&amp;gt;auto_render === TRUE)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;43&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 			$this-&amp;gt;response-&amp;gt;body($this-&amp;gt;template-&amp;gt;render());
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt; 		parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource9&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource9')&quot;&gt;APPPATH\classes\Controller\Admin.php [ 28 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller_Template-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource9&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;23&lt;/span&gt;         }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;24&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;25&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;26&lt;/span&gt;     public function after() {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;27&lt;/span&gt;                   
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;28&lt;/span&gt;         parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;29&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;30&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;31&lt;/span&gt;     public function action_index()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;32&lt;/span&gt;     {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;33&lt;/span&gt;         
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource10&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource10')&quot;&gt;SYSPATH\classes\Kohana\Controller.php [ 87 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Controller_Admin-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource10&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;82&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;83&lt;/span&gt; 		// Execute the action itself
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;84&lt;/span&gt; 		$this-&amp;gt;{$action}();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;85&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;86&lt;/span&gt; 		// Execute the &quot;after action&quot; method
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;87&lt;/span&gt; 		$this-&amp;gt;after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;88&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;89&lt;/span&gt; 		// Return the response
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;90&lt;/span&gt; 		return $this-&amp;gt;response;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;91&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;92&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													{PHP internal call}
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller-&gt;execute()
				&lt;/p&gt;
											&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource12&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource12')&quot;&gt;SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					ReflectionMethod-&gt;invoke(&lt;a href=&quot;#error50ed6ce452e9bargs12&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs12')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs12&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Controller_AdM_Cinema(6)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;public&lt;/small&gt; template =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
            &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
                &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            }&lt;/code&gt;
            &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
            &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
                &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
                &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
                &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
            }&lt;/code&gt;
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;public&lt;/small&gt; content =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;adm_cinema\index&quot;
    &lt;small&gt;protected&lt;/small&gt; title =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;public&lt;/small&gt; auto_render =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;public&lt;/small&gt; request =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
        &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
        &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _route =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Route(5)&lt;/span&gt; &lt;code&gt;{
            &lt;small&gt;protected&lt;/small&gt; _filters =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(32)&lt;/span&gt; &quot;(&amp;lt;controller&amp;gt;(/&amp;lt;action&amp;gt;(/&amp;lt;id&amp;gt;)))&quot;
            &lt;small&gt;protected&lt;/small&gt; _regex =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            &lt;small&gt;protected&lt;/small&gt; _defaults =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
                &quot;controller&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;seances&quot;
                &quot;action&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
            )&lt;/span&gt;
            &lt;small&gt;protected&lt;/small&gt; _route_regex =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(95)&lt;/span&gt; &quot;#^(?:(?P&amp;lt;controller&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;action&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;id&amp;gt;[^/.,;?\n]++))?)?)?$#uD&quot;
        }&lt;/code&gt;
        &lt;small&gt;protected&lt;/small&gt; _routes =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
        }&lt;/code&gt;
        &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _directory =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
        &lt;small&gt;protected&lt;/small&gt; _controller =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;Adm_Cinema&quot;
        &lt;small&gt;protected&lt;/small&gt; _action =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
        &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;adm_cinema&quot;
        &lt;small&gt;protected&lt;/small&gt; _external =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _get =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _post =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            &quot;session&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _client =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request_Client_Internal(9)&lt;/span&gt; &lt;code&gt;{
            &lt;small&gt;protected&lt;/small&gt; _previous_environment =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &lt;small&gt;protected&lt;/small&gt; _cache =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &lt;small&gt;protected&lt;/small&gt; _follow =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &lt;small&gt;protected&lt;/small&gt; _follow_headers =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
                0 =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;Authorization&quot;
            )&lt;/span&gt;
            &lt;small&gt;protected&lt;/small&gt; _strict_redirect =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
            &lt;small&gt;protected&lt;/small&gt; _header_callbacks =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
                &quot;Location&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;Request_Client::on_header_location&quot;
            )&lt;/span&gt;
            &lt;small&gt;protected&lt;/small&gt; _max_callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 5
            &lt;small&gt;protected&lt;/small&gt; _callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 1
            &lt;small&gt;protected&lt;/small&gt; _callback_params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        }&lt;/code&gt;
    }&lt;/code&gt;
    &lt;small&gt;public&lt;/small&gt; response =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Response(5)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _status =&gt; &lt;small&gt;integer&lt;/small&gt; 200
        &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
        }&lt;/code&gt;
        &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
        &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;NULL&lt;/small&gt;
    }&lt;/code&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource12&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 92&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 93&lt;/span&gt; 			// Create a new instance of the controller
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 94&lt;/span&gt; 			$controller = $class-&amp;gt;newInstance($request, $response);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 95&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 96&lt;/span&gt; 			// Run the controller's execute() method
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt; 97&lt;/span&gt; 			$response = $class-&amp;gt;getMethod('execute')-&amp;gt;invoke($controller);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 98&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt; 99&lt;/span&gt; 			if ( ! $response instanceof Response)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;100&lt;/span&gt; 			{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;101&lt;/span&gt; 				// Controller failed to return a Response.
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;102&lt;/span&gt; 				throw new Kohana_Exception('Controller failed to return a Response');
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource13&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource13')&quot;&gt;SYSPATH\classes\Kohana\Request\Client.php [ 114 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Request_Client_Internal-&gt;execute_request(&lt;a href=&quot;#error50ed6ce452e9bargs13&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs13')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs13&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
    &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
    &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _route =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Route(5)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _filters =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(32)&lt;/span&gt; &quot;(&amp;lt;controller&amp;gt;(/&amp;lt;action&amp;gt;(/&amp;lt;id&amp;gt;)))&quot;
        &lt;small&gt;protected&lt;/small&gt; _regex =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _defaults =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
            &quot;controller&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;seances&quot;
            &quot;action&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _route_regex =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(95)&lt;/span&gt; &quot;#^(?:(?P&amp;lt;controller&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;action&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;id&amp;gt;[^/.,;?\n]++))?)?)?$#uD&quot;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _routes =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _directory =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _controller =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;Adm_Cinema&quot;
    &lt;small&gt;protected&lt;/small&gt; _action =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
    &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;adm_cinema&quot;
    &lt;small&gt;protected&lt;/small&gt; _external =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _get =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _post =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
        &quot;session&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _client =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request_Client_Internal(9)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _previous_environment =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _cache =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _follow =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _follow_headers =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            0 =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;Authorization&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _strict_redirect =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
        &lt;small&gt;protected&lt;/small&gt; _header_callbacks =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            &quot;Location&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;Request_Client::on_header_location&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _max_callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 5
        &lt;small&gt;protected&lt;/small&gt; _callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 1
        &lt;small&gt;protected&lt;/small&gt; _callback_params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Response(5)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _status =&gt; &lt;small&gt;integer&lt;/small&gt; 200
    &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;NULL&lt;/small&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource13&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;109&lt;/span&gt; 		$orig_response = $response = Response::factory();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;110&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;111&lt;/span&gt; 		if (($cache = $this-&amp;gt;cache()) instanceof HTTP_Cache)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;112&lt;/span&gt; 			return $cache-&amp;gt;execute($this, $request, $response);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;113&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;114&lt;/span&gt; 		$response = $this-&amp;gt;execute_request($request, $response);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;115&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;116&lt;/span&gt; 		// Execute response callbacks
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;117&lt;/span&gt; 		foreach ($this-&amp;gt;header_callbacks() as $header =&amp;gt; $callback)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;118&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;119&lt;/span&gt; 			if ($response-&amp;gt;headers($header))
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource14&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource14')&quot;&gt;SYSPATH\classes\Kohana\Request.php [ 990 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Request_Client-&gt;execute(&lt;a href=&quot;#error50ed6ce452e9bargs14&quot; onclick=&quot;return koggle('error50ed6ce452e9bargs14')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6ce452e9bargs14&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
    &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
    &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _route =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Route(5)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _filters =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(32)&lt;/span&gt; &quot;(&amp;lt;controller&amp;gt;(/&amp;lt;action&amp;gt;(/&amp;lt;id&amp;gt;)))&quot;
        &lt;small&gt;protected&lt;/small&gt; _regex =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
        &lt;small&gt;protected&lt;/small&gt; _defaults =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
            &quot;controller&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;seances&quot;
            &quot;action&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _route_regex =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(95)&lt;/span&gt; &quot;#^(?:(?P&amp;lt;controller&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;action&amp;gt;[^/.,;?\n]++)(?:/(?P&amp;lt;id&amp;gt;[^/.,;?\n]++))?)?)?$#uD&quot;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _routes =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _header =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;HTTP_Header(0)&lt;/span&gt; &lt;code&gt;{
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _body =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _directory =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;protected&lt;/small&gt; _controller =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;Adm_Cinema&quot;
    &lt;small&gt;protected&lt;/small&gt; _action =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;index&quot;
    &lt;small&gt;protected&lt;/small&gt; _uri =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;adm_cinema&quot;
    &lt;small&gt;protected&lt;/small&gt; _external =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
    &lt;small&gt;protected&lt;/small&gt; _params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _get =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _post =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cookies =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
        &quot;session&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _client =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request_Client_Internal(9)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _previous_environment =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _cache =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _follow =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _follow_headers =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            0 =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;Authorization&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _strict_redirect =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
        &lt;small&gt;protected&lt;/small&gt; _header_callbacks =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &lt;span&gt;(
            &quot;Location&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;Request_Client::on_header_location&quot;
        )&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _max_callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 5
        &lt;small&gt;protected&lt;/small&gt; _callback_depth =&gt; &lt;small&gt;integer&lt;/small&gt; 1
        &lt;small&gt;protected&lt;/small&gt; _callback_params =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource14&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;985&lt;/span&gt; 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;986&lt;/span&gt; 				':uri' =&amp;gt; $this-&amp;gt;_uri,
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;987&lt;/span&gt; 			));
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;988&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;989&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;990&lt;/span&gt; 		return $this-&amp;gt;_client-&amp;gt;execute($this);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;991&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;992&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;993&lt;/span&gt; 	/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;994&lt;/span&gt; 	 * Returns whether this request is the initial request Kohana received.
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;995&lt;/span&gt; 	 * Can be used to test for sub requests.
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6ce452e9bsource15&quot; onclick=&quot;return koggle('error50ed6ce452e9bsource15')&quot;&gt;DOCROOT\index.php [ 118 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Request-&gt;execute()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6ce452e9bsource15&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;113&lt;/span&gt; 	/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;114&lt;/span&gt; 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;115&lt;/span&gt; 	 * If no source is specified, the URI will be automatically detected.
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;116&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;117&lt;/span&gt; 	echo Request::factory(TRUE, array(), FALSE)
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;118&lt;/span&gt; 		-&amp;gt;execute()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;119&lt;/span&gt; 		-&amp;gt;send_headers(TRUE)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;120&lt;/span&gt; 		-&amp;gt;body();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;121&lt;/span&gt; }
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
							&lt;/ol&gt;
	&lt;/div&gt;
	&lt;h2&gt;&lt;a href=&quot;#error50ed6ce452e9benvironment&quot; onclick=&quot;return koggle('error50ed6ce452e9benvironment')&quot;&gt;Environment&lt;/a&gt;&lt;/h2&gt;
	&lt;div id=&quot;error50ed6ce452e9benvironment&quot; class=&quot;content collapsed&quot;&gt;
				&lt;h3&gt;&lt;a href=&quot;#error50ed6ce452e9benvironment_included&quot; onclick=&quot;return koggle('error50ed6ce452e9benvironment_included')&quot;&gt;Included files&lt;/a&gt; (113)&lt;/h3&gt;
		&lt;div id=&quot;error50ed6ce452e9benvironment_included&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;DOCROOT\index.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\bootstrap.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Core.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\I18n.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\I18n.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Cookie.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Cookie.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Exception.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Kohana\Exception.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Log.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Log.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Config.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Log\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Log\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Log\Writer.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Log\Writer.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Config\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\File.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\File\Reader.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\Reader.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\Source.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Route.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Route.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Request.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Message.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Message.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Header.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Header.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Request\Client\Internal.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Request\Client\Internal.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Request\Client.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Request\Client.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Arr.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Arr.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTTP\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTTP\Response.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Profiler.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Profiler.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\classes\Controller\AdM\Cinema.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\classes\Controller\Admin.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Controller\Template.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Controller\Template.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Controller.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Controller.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\auth\classes\Auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\auth\classes\Kohana\Auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\auth\config\auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\config\auth.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Config\Group.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Config\Group.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Auth\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Kohana\Auth\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\config\session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\config\session.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Session\Native.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Session\Native.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\User.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\Auth\User.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Kohana\ORM.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Model.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Model.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Inflector.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Inflector.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\config\inflector.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\config\database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\config\database.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\MySQL.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\MySQL.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\MySQL\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\MySQL\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Result.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\DB.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\DB.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query\Builder\Select.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query\Builder\Where.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query\Builder.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query\Builder.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Query.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Query.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\View.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\View.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\classes\Model\seance.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\views\index.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\Role.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\orm\classes\Model\Auth\Role.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Database\Expression.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MODPATH\database\classes\Kohana\Database\Expression.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\config\pageConfig.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;APPPATH\views\adm_cinema\index.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Debug.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Debug.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Date.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\Date.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\views\kohana\error.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\HTML.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\HTML.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\UTF8.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SYSPATH\classes\Kohana\UTF8.php&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
				&lt;h3&gt;&lt;a href=&quot;#error50ed6ce452e9benvironment_loaded&quot; onclick=&quot;return koggle('error50ed6ce452e9benvironment_loaded')&quot;&gt;Loaded extensions&lt;/a&gt; (49)&lt;/h3&gt;
		&lt;div id=&quot;error50ed6ce452e9benvironment_loaded&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;Core&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;bcmath&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;calendar&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;ctype&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;date&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;ereg&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;filter&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;ftp&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;hash&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;iconv&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;json&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mcrypt&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SPL&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;odbc&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;pcre&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;Reflection&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;session&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;standard&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mysqlnd&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;tokenizer&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;zip&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;zlib&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;libxml&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;dom&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PDO&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;bz2&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SimpleXML&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;wddx&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xml&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xmlreader&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xmlwriter&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;apache2handler&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;Phar&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;curl&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mbstring&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;exif&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;gd&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;gettext&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mysql&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mysqli&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;pdo_mysql&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;pdo_sqlite&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;soap&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;sockets&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;sqlite3&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xmlrpc&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xsl&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;mhash&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;xdebug&lt;/code&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
						&lt;h3&gt;&lt;a href=&quot;#error50ed6ce452e9benvironment_session&quot; onclick=&quot;return koggle('error50ed6ce452e9benvironment_session')&quot;&gt;$_SESSION&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6ce452e9benvironment_session&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;last_active&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 1357737049&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;auth_user&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Model_User(34)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;protected&lt;/small&gt; _has_many =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
        &quot;user_tokens&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &lt;span&gt;(
            &quot;foreign_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;user_id&quot;
            &quot;through&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;far_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;user_token_id&quot;
            &quot;model&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;User_Token&quot;
        )&lt;/span&gt;
        &quot;roles&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &lt;span&gt;(
            &quot;foreign_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;user_id&quot;
            &quot;through&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;roles_users&quot;
            &quot;far_key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;role_id&quot;
            &quot;model&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;Role&quot;
        )&lt;/span&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _has_one =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _belongs_to =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _load_with =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _validation =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _object =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
        &quot;email&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;p@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _changed =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _original_values =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
        &quot;email&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;p@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _related =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _valid =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _loaded =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _saved =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _sorting =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _foreign_key_suffix =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;_id&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_plural =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 1
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;11&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(14)&lt;/span&gt; &quot;auto_increment&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;PRI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;email&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;email&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 2
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;254&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;username&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;username&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 3
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;32&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;password&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;password&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 4
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;64&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;logins&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;logins&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 5
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;last_login&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;last_login&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 6
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _updated_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _created_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _serialize_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _primary_key =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
    &lt;small&gt;protected&lt;/small&gt; _primary_key_value =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_names_plural =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _reload_on_wakeup =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL(6)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _connection_id =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(40)&lt;/span&gt; &quot;c45d8c80f225e7bc6843585eac509220d44e2dc8&quot;
        &lt;small&gt;protected&lt;/small&gt; _identifier =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;`&quot;
        &lt;small&gt;public&lt;/small&gt; last_query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(98)&lt;/span&gt; &quot;SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('2')&quot;
        &lt;small&gt;protected&lt;/small&gt; _instance =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;default&quot;
        &lt;small&gt;protected&lt;/small&gt; _connection =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql link)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _config =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;MySQL&quot;
            &quot;connection&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
                &quot;hostname&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(35)&lt;/span&gt; &quot;vm-phpnursery.future-processing.lan&quot;
                &quot;database&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pn_cinema&quot;
                &quot;persistent&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            )&lt;/span&gt;
            &quot;table_prefix&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;charset&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;utf8&quot;
            &quot;caching&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_group =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_pending =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_reset =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db_builder =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _with_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cast_data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _errors_filename =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
												&lt;h3&gt;&lt;a href=&quot;#error50ed6ce452e9benvironment_cookie&quot; onclick=&quot;return koggle('error50ed6ce452e9benvironment_cookie')&quot;&gt;$_COOKIE&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6ce452e9benvironment_cookie&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;session&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(26)&lt;/span&gt; &quot;i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
						&lt;h3&gt;&lt;a href=&quot;#error50ed6ce452e9benvironment_server&quot; onclick=&quot;return koggle('error50ed6ce452e9benvironment_server')&quot;&gt;$_SERVER&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6ce452e9benvironment_server&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_STATUS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;200&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_HOST&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_USER_AGENT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(63)&lt;/span&gt; &quot;text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_LANGUAGE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(23)&lt;/span&gt; &quot;pl,en-us;q=0.7,en;q=0.3&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_ENCODING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;gzip, deflate&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CONNECTION&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;keep-alive&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_COOKIE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;session=i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(221)&lt;/span&gt; &quot;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Program Files (x86)\Git\c&amp;nbsp;&amp;hellip;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SystemRoot&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;COMSPEC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;C:\Windows\system32\cmd.exe&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATHEXT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(53)&lt;/span&gt; &quot;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;WINDIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SIGNATURE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(94)&lt;/span&gt; &quot;&amp;lt;address&amp;gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at kino.local Port 80&amp;lt;/address&amp;gt;
&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SOFTWARE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(45)&lt;/span&gt; &quot;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;80&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_SCHEME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;http&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_PREFIX&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADMIN&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(20)&lt;/span&gt; &quot;postmaster@localhost&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_FILENAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(54)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;62745&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_URL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;GATEWAY_INTERFACE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;CGI/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PROTOCOL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_METHOD&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;QUERY_STRING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_URI&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_INFO&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_TRANSLATED&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(30)&lt;/span&gt; &quot;redirect:\index.php\adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_SELF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(21)&lt;/span&gt; &quot;/index.php/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME_FLOAT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;float&lt;/small&gt; 1357737187.554&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 1357737187&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
			&lt;/div&gt;
&lt;/div&gt;
): failed to open stream: Invalid argument ~ APPPATH\views\index.php [ 49 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:13:08 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_Core::error_handler(2, 'include(&lt;sty...', 'D:\SvnTortoise\...', 49, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:13:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: seances ~ APPPATH\views\adm_cinema\index.php [ 3 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:13:19 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 3, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#16 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:13:20 --- CRITICAL: ErrorException [ 2 ]: include(&lt;style type=&quot;text/css&quot;&gt;
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style &amp;&amp; elem.style['display'])
		// Only works with the &quot;style&quot; attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the &quot;display&quot; style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}
&lt;/script&gt;
&lt;div id=&quot;kohana_error&quot;&gt;
	&lt;h1&gt;&lt;span class=&quot;type&quot;&gt;ErrorException [ Notice ]:&lt;/span&gt; &lt;span class=&quot;message&quot;&gt;Undefined variable: seances&lt;/span&gt;&lt;/h1&gt;
	&lt;div id=&quot;error50ed6cf00d46e&quot; class=&quot;content&quot;&gt;
		&lt;p&gt;&lt;span class=&quot;file&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/span&gt;&lt;/p&gt;
		&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;		&lt;ol class=&quot;trace&quot;&gt;
					&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource0&quot; onclick=&quot;return koggle('error50ed6cf00d46esource0')&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Core::error_handler(&lt;a href=&quot;#error50ed6cf00d46eargs0&quot; onclick=&quot;return koggle('error50ed6cf00d46eargs0')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6cf00d46eargs0&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 8&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;Undefined variable: seances&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;2&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;3&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 3&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;4&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
    &quot;kohana_view_filename&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
    &quot;kohana_view_data&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource0&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource1&quot; onclick=&quot;return koggle('error50ed6cf00d46esource1')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6cf00d46eargs1&quot; onclick=&quot;return koggle('error50ed6cf00d46eargs1')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6cf00d46eargs1&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource1&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource2&quot; onclick=&quot;return koggle('error50ed6cf00d46esource2')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6cf00d46eargs2&quot; onclick=&quot;return koggle('error50ed6cf00d46eargs2')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6cf00d46eargs2&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource2&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource3&quot; onclick=&quot;return koggle('error50ed6cf00d46esource3')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 228 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource3&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;223&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;224&lt;/span&gt; 	public function __toString()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;225&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;226&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;227&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;228&lt;/span&gt; 			return $this-&amp;gt;render();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;229&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;230&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;231&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;232&lt;/span&gt; 			/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;233&lt;/span&gt; 			 * Display the exception message.
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource4&quot; onclick=&quot;return koggle('error50ed6cf00d46esource4')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;__toString()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource4&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource5&quot; onclick=&quot;return koggle('error50ed6cf00d46esource5')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource5&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource6&quot; onclick=&quot;return koggle('error50ed6cf00d46esource6')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6cf00d46eargs6&quot; onclick=&quot;return koggle('error50ed6cf00d46eargs6')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6cf00d46eargs6&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource6&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource7&quot; onclick=&quot;return koggle('error50ed6cf00d46esource7')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6cf00d46eargs7&quot; onclick=&quot;return koggle('error50ed6cf00d46eargs7')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6cf00d46eargs7&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
    &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
    &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
    &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
        &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
        &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
    }&lt;/code&gt;
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource7&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource8&quot; onclick=&quot;return koggle('error50ed6cf00d46esource8')&quot;&gt;SYSPATH\classes\Kohana\Controller\Template.php [ 44 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource8&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;39&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;40&lt;/span&gt; 	public function after()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;41&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;42&lt;/span&gt; 		if ($this-&amp;gt;auto_render === TRUE)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;43&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 			$this-&amp;gt;response-&amp;gt;body($this-&amp;gt;template-&amp;gt;render());
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt; 		parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource9&quot; onclick=&quot;return koggle('error50ed6cf00d46esource9')&quot;&gt;APPPATH\classes\Controller\Admin.php [ 28 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller_Template-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource9&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;23&lt;/span&gt;         }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;24&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;25&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;26&lt;/span&gt;     public function after() {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;27&lt;/span&gt;                   
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;28&lt;/span&gt;         parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;29&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;30&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;31&lt;/span&gt;     public function action_index()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;32&lt;/span&gt;     {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;33&lt;/span&gt;         
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource10&quot; onclick=&quot;return koggle('error50ed6cf00d46esource10')&quot;&gt;SYSPATH\classes\Kohana\Controller.php [ 87 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Controller_Admin-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6cf00d46esource10&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;82&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;83&lt;/span&gt; 		// Execute the action itself
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;84&lt;/span&gt; 		$this-&amp;gt;{$action}();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;85&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;86&lt;/span&gt; 		// Execute the &quot;after action&quot; method
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;87&lt;/span&gt; 		$this-&amp;gt;after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;88&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;89&lt;/span&gt; 		// Return the response
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;90&lt;/span&gt; 		return $this-&amp;gt;response;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;91&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;92&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													{PHP internal call}
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller-&gt;execute()
				&lt;/p&gt;
											&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6cf00d46esource12&quot; onclick=&quot;return koggle('error50ed6cf00d46esource12')&quot;&gt;SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					ReflectionMethod-&gt;invoke(&lt;a href=&quot;#error50ed6cf00d46eargs12&quot; onclick=&quot;return koggle('error50ed6cf00d46eargs12')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6cf00d46eargs12&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Controller_AdM_Cinema(6)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;public&lt;/small&gt; template =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
            &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
                &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            }&lt;/code&gt;
            &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
            &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
                &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
                &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
                &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
            }&lt;/code&gt;
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;public&lt;/small&gt; content =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;adm_cinema\index&quot;
    &lt;small&gt;protected&lt;/small&gt; title =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;public&lt;/small&gt; auto_render =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;public&lt;/small&gt; request =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
        &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
        &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(18)&lt;/span&gt; &quot;http://...@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _changed =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _original_values =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
        &quot;email&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;p@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _related =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _valid =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _loaded =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _saved =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _sorting =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _foreign_key_suffix =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;_id&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_plural =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 1
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;11&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(14)&lt;/span&gt; &quot;auto_increment&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;PRI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;email&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;email&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 2
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;254&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;username&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;username&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 3
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;32&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;password&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;password&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 4
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;64&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;logins&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;logins&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 5
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;last_login&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;last_login&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 6
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _updated_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _created_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _serialize_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _primary_key =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
    &lt;small&gt;protected&lt;/small&gt; _primary_key_value =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_names_plural =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _reload_on_wakeup =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL(6)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _connection_id =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(40)&lt;/span&gt; &quot;c45d8c80f225e7bc6843585eac509220d44e2dc8&quot;
        &lt;small&gt;protected&lt;/small&gt; _identifier =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;`&quot;
        &lt;small&gt;public&lt;/small&gt; last_query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(98)&lt;/span&gt; &quot;SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('2')&quot;
        &lt;small&gt;protected&lt;/small&gt; _instance =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;default&quot;
        &lt;small&gt;protected&lt;/small&gt; _connection =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql link)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _config =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;MySQL&quot;
            &quot;connection&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
                &quot;hostname&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(35)&lt;/span&gt; &quot;vm-phpnursery.future-processing.lan&quot;
                &quot;database&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pn_cinema&quot;
                &quot;persistent&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            )&lt;/span&gt;
            &quot;table_prefix&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;charset&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;utf8&quot;
            &quot;caching&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_group =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_pending =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_reset =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db_builder =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _with_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cast_data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _errors_filename =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
												&lt;h3&gt;&lt;a href=&quot;#error50ed6cf00d46eenvironment_cookie&quot; onclick=&quot;return koggle('error50ed6cf00d46eenvironment_cookie')&quot;&gt;$_COOKIE&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6cf00d46eenvironment_cookie&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;session&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(26)&lt;/span&gt; &quot;i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
						&lt;h3&gt;&lt;a href=&quot;#error50ed6cf00d46eenvironment_server&quot; onclick=&quot;return koggle('error50ed6cf00d46eenvironment_server')&quot;&gt;$_SERVER&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6cf00d46eenvironment_server&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_STATUS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;200&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_HOST&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_USER_AGENT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(63)&lt;/span&gt; &quot;text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_LANGUAGE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(23)&lt;/span&gt; &quot;pl,en-us;q=0.7,en;q=0.3&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_ENCODING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;gzip, deflate&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CONNECTION&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;keep-alive&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_REFERER&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(18)&lt;/span&gt; &quot;http://kino.local/&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_COOKIE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;session=i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(221)&lt;/span&gt; &quot;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Program Files (x86)\Git\c&amp;nbsp;&amp;hellip;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SystemRoot&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;COMSPEC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;C:\Windows\system32\cmd.exe&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATHEXT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(53)&lt;/span&gt; &quot;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;WINDIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SIGNATURE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(94)&lt;/span&gt; &quot;&amp;lt;address&amp;gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at kino.local Port 80&amp;lt;/address&amp;gt;
&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SOFTWARE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(45)&lt;/span&gt; &quot;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;80&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_SCHEME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;http&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_PREFIX&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADMIN&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(20)&lt;/span&gt; &quot;postmaster@localhost&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_FILENAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(54)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;62747&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_URL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;GATEWAY_INTERFACE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;CGI/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PROTOCOL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_METHOD&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;QUERY_STRING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_URI&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_INFO&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_TRANSLATED&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(30)&lt;/span&gt; &quot;redirect:\index.php\adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_SELF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(21)&lt;/span&gt; &quot;/index.php/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME_FLOAT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;float&lt;/small&gt; 1357737199.296&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 1357737199&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
			&lt;/div&gt;
&lt;/div&gt;
): failed to open stream: Invalid argument ~ APPPATH\views\index.php [ 49 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:13:20 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_Core::error_handler(2, 'include(&lt;sty...', 'D:\SvnTortoise\...', 49, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:13:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:13:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:13:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: seances ~ APPPATH\views\adm_cinema\index.php [ 3 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:13:59 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 3, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_View->__toString()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#13 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#16 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:14:00 --- CRITICAL: ErrorException [ 2 ]: include(&lt;style type=&quot;text/css&quot;&gt;
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style &amp;&amp; elem.style['display'])
		// Only works with the &quot;style&quot; attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the &quot;display&quot; style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}
&lt;/script&gt;
&lt;div id=&quot;kohana_error&quot;&gt;
	&lt;h1&gt;&lt;span class=&quot;type&quot;&gt;ErrorException [ Notice ]:&lt;/span&gt; &lt;span class=&quot;message&quot;&gt;Undefined variable: seances&lt;/span&gt;&lt;/h1&gt;
	&lt;div id=&quot;error50ed6d18484ed&quot; class=&quot;content&quot;&gt;
		&lt;p&gt;&lt;span class=&quot;file&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/span&gt;&lt;/p&gt;
		&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;		&lt;ol class=&quot;trace&quot;&gt;
					&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource0&quot; onclick=&quot;return koggle('error50ed6d18484edsource0')&quot;&gt;APPPATH\views\adm_cinema\index.php [ 3 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Core::error_handler(&lt;a href=&quot;#error50ed6d18484edargs0&quot; onclick=&quot;return koggle('error50ed6d18484edargs0')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6d18484edargs0&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 8&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;Undefined variable: seances&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;2&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;3&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 3&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;4&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &lt;span&gt;(
    &quot;kohana_view_filename&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
    &quot;kohana_view_data&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6d18484edsource0&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;2&lt;/span&gt; &amp;lt;table&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;3&lt;/span&gt;     &amp;lt;?php foreach($seances as $show) :?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;4&lt;/span&gt;     &amp;lt;tr&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;5&lt;/span&gt;         &amp;lt;td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;6&lt;/span&gt;            &amp;lt;?php echo $show ?&amp;gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;7&lt;/span&gt;         &amp;lt;/td&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;8&lt;/span&gt;     &amp;lt;/tr&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource1&quot; onclick=&quot;return koggle('error50ed6d18484edsource1')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6d18484edargs1&quot; onclick=&quot;return koggle('error50ed6d18484edargs1')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6d18484edargs1&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6d18484edsource1&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource2&quot; onclick=&quot;return koggle('error50ed6d18484edsource2')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6d18484edargs2&quot; onclick=&quot;return koggle('error50ed6d18484edargs2')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6d18484edargs2&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6d18484edsource2&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource3&quot; onclick=&quot;return koggle('error50ed6d18484edsource3')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 228 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6d18484edsource3&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;223&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;224&lt;/span&gt; 	public function __toString()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;225&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;226&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;227&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;228&lt;/span&gt; 			return $this-&amp;gt;render();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;229&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;230&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;231&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;232&lt;/span&gt; 			/**
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;233&lt;/span&gt; 			 * Display the exception message.
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource4&quot; onclick=&quot;return koggle('error50ed6d18484edsource4')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;__toString()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6d18484edsource4&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource5&quot; onclick=&quot;return koggle('error50ed6d18484edsource5')&quot;&gt;APPPATH\views\index.php [ 49 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6d18484edsource5&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt;                 &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt;             &amp;lt;div class=&quot;container-fluid&quot;&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt;                 &amp;lt;?php if (isset($content)): ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt;                     &amp;lt;?php include $content; ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;50&lt;/span&gt;                 &amp;lt;?php endif ?&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;51&lt;/span&gt;             &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;52&lt;/span&gt;         &amp;lt;/div&amp;gt;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;53&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;54&lt;/span&gt;         &amp;lt;script src=&quot;/assets/js/jquery-1.8.2.min.js&quot;&amp;gt;&amp;lt;/script&amp;gt;
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource6&quot; onclick=&quot;return koggle('error50ed6d18484edsource6')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 61 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					include(&lt;a href=&quot;#error50ed6d18484edargs6&quot; onclick=&quot;return koggle('error50ed6d18484edargs6')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6d18484edargs6&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6d18484edsource6&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;56&lt;/span&gt; 		ob_start();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;57&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;58&lt;/span&gt; 		try
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;59&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;60&lt;/span&gt; 			// Load the view within the current scope
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;61&lt;/span&gt; 			include $kohana_view_filename;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;62&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;63&lt;/span&gt; 		catch (Exception $e)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;64&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;65&lt;/span&gt; 			// Delete the output buffer
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;66&lt;/span&gt; 			ob_end_clean();
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource7&quot; onclick=&quot;return koggle('error50ed6d18484edsource7')&quot;&gt;SYSPATH\classes\Kohana\View.php [ 348 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View::capture(&lt;a href=&quot;#error50ed6d18484edargs7&quot; onclick=&quot;return koggle('error50ed6d18484edargs7')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6d18484edargs7&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;1&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
    &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    }&lt;/code&gt;
    &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
    &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
        &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
        &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
        &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
    }&lt;/code&gt;
)&lt;/span&gt;&lt;/pre&gt;&lt;/td&gt;
						&lt;/tr&gt;
										&lt;/table&gt;
				&lt;/div&gt;
													&lt;pre id=&quot;error50ed6d18484edsource7&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;343&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;344&lt;/span&gt; 			throw new View_Exception('You must set the file to use within your view before rendering');
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;345&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;346&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;347&lt;/span&gt; 		// Combine local and global data and capture the output
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;348&lt;/span&gt; 		return View::capture($this-&amp;gt;_file, $this-&amp;gt;_data);
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;349&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;350&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;351&lt;/span&gt; } // End View
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource8&quot; onclick=&quot;return koggle('error50ed6d18484edsource8')&quot;&gt;SYSPATH\classes\Kohana\Controller\Template.php [ 44 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_View-&gt;render()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6d18484edsource8&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;39&lt;/span&gt; 	 */
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;40&lt;/span&gt; 	public function after()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;41&lt;/span&gt; 	{
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;42&lt;/span&gt; 		if ($this-&amp;gt;auto_render === TRUE)
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;43&lt;/span&gt; 		{
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;44&lt;/span&gt; 			$this-&amp;gt;response-&amp;gt;body($this-&amp;gt;template-&amp;gt;render());
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;45&lt;/span&gt; 		}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;46&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;47&lt;/span&gt; 		parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;48&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;49&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource9&quot; onclick=&quot;return koggle('error50ed6d18484edsource9')&quot;&gt;APPPATH\classes\Controller\Admin.php [ 28 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller_Template-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6d18484edsource9&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;23&lt;/span&gt;         }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;24&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;25&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;26&lt;/span&gt;     public function after() {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;27&lt;/span&gt;                   
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;28&lt;/span&gt;         parent::after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;29&lt;/span&gt;     }
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;30&lt;/span&gt;     
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;31&lt;/span&gt;     public function action_index()
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;32&lt;/span&gt;     {
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;33&lt;/span&gt;         
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource10&quot; onclick=&quot;return koggle('error50ed6d18484edsource10')&quot;&gt;SYSPATH\classes\Kohana\Controller.php [ 87 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					Controller_Admin-&gt;after()
				&lt;/p&gt;
													&lt;pre id=&quot;error50ed6d18484edsource10&quot; class=&quot;source collapsed&quot;&gt;&lt;code&gt;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;82&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;83&lt;/span&gt; 		// Execute the action itself
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;84&lt;/span&gt; 		$this-&amp;gt;{$action}();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;85&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;86&lt;/span&gt; 		// Execute the &quot;after action&quot; method
&lt;/span&gt;&lt;span class=&quot;line highlight&quot;&gt;&lt;span class=&quot;number&quot;&gt;87&lt;/span&gt; 		$this-&amp;gt;after();
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;88&lt;/span&gt; 
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;89&lt;/span&gt; 		// Return the response
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;90&lt;/span&gt; 		return $this-&amp;gt;response;
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;91&lt;/span&gt; 	}
&lt;/span&gt;&lt;span class=&quot;line&quot;&gt;&lt;span class=&quot;number&quot;&gt;92&lt;/span&gt; 
&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/code&gt;&lt;/pre&gt;
							&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													{PHP internal call}
											&lt;/span&gt;
					&amp;raquo;
					Kohana_Controller-&gt;execute()
				&lt;/p&gt;
											&lt;/li&gt;
								&lt;li&gt;
				&lt;p&gt;
					&lt;span class=&quot;file&quot;&gt;
													&lt;a href=&quot;#error50ed6d18484edsource12&quot; onclick=&quot;return koggle('error50ed6d18484edsource12')&quot;&gt;SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]&lt;/a&gt;
											&lt;/span&gt;
					&amp;raquo;
					ReflectionMethod-&gt;invoke(&lt;a href=&quot;#error50ed6d18484edargs12&quot; onclick=&quot;return koggle('error50ed6d18484edargs12')&quot;&gt;arguments&lt;/a&gt;)
				&lt;/p&gt;
								&lt;div id=&quot;error50ed6d18484edargs12&quot; class=&quot;collapsed&quot;&gt;
					&lt;table cellspacing=&quot;0&quot;&gt;
											&lt;tr&gt;
							&lt;td&gt;&lt;code&gt;0&lt;/code&gt;&lt;/td&gt;
							&lt;td&gt;&lt;pre&gt;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;Controller_AdM_Cinema(6)&lt;/span&gt; &lt;code&gt;{
    &lt;small&gt;public&lt;/small&gt; template =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php&quot;
        &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
            &quot;content&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;View(2)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _file =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(83)&lt;/span&gt; &quot;D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php&quot;
                &lt;small&gt;protected&lt;/small&gt; _data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
            }&lt;/code&gt;
            &quot;actual_page&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;administrate&quot;
            &quot;shows&quot; =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL_Result(7)&lt;/span&gt; &lt;code&gt;{
                &lt;small&gt;protected&lt;/small&gt; _internal_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(144)&lt;/span&gt; &quot;SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `sean&amp;nbsp;&amp;hellip;&quot;
                &lt;small&gt;protected&lt;/small&gt; _result =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql result)&lt;/span&gt;
                &lt;small&gt;protected&lt;/small&gt; _total_rows =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _current_row =&gt; &lt;small&gt;integer&lt;/small&gt; 0
                &lt;small&gt;protected&lt;/small&gt; _as_object =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;Model_Seance&quot;
                &lt;small&gt;protected&lt;/small&gt; _object_params =&gt; &lt;small&gt;NULL&lt;/small&gt;
            }&lt;/code&gt;
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;public&lt;/small&gt; content =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;adm_cinema\index&quot;
    &lt;small&gt;protected&lt;/small&gt; title =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
    &lt;small&gt;public&lt;/small&gt; auto_render =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;public&lt;/small&gt; request =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Request(19)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _requested_with =&gt; &lt;small&gt;NULL&lt;/small&gt;
        &lt;small&gt;protected&lt;/small&gt; _method =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;
        &lt;small&gt;protected&lt;/small&gt; _protocol =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;
        &lt;small&gt;protected&lt;/small&gt; _secure =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        &lt;small&gt;protected&lt;/small&gt; _referrer =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(18)&lt;/span&gt; &quot;http://...@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _changed =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _original_values =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
        &quot;email&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;p@b.pl&quot;
        &quot;username&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pbartela2&quot;
        &quot;password&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(64)&lt;/span&gt; &quot;db1a368b125493640fd2c6ea08cc57e36414510d10fd622cdadd824c15ff803c&quot;
        &quot;logins&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;12&quot;
        &quot;last_login&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;1357736946&quot;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _related =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _valid =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _loaded =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _saved =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _sorting =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _foreign_key_suffix =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;_id&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
    &lt;small&gt;protected&lt;/small&gt; _object_plural =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_name =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;users&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &lt;span&gt;(
        &quot;id&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 1
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;11&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(14)&lt;/span&gt; &quot;auto_increment&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;PRI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;email&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;email&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 2
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;254&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;username&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;username&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 3
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;32&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;UNI&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;password&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;string&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;password&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;varchar&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 4
            &quot;character_maximum_length&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;64&quot;
            &quot;collation_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(15)&lt;/span&gt; &quot;utf8_general_ci&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;logins&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(6)&lt;/span&gt; &quot;logins&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 5
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
        &quot;last_login&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;int&quot;
            &quot;min&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;0&quot;
            &quot;max&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;4294967295&quot;
            &quot;column_name&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;last_login&quot;
            &quot;column_default&quot; =&gt; &lt;small&gt;NULL&lt;/small&gt;
            &quot;data_type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(12)&lt;/span&gt; &quot;int unsigned&quot;
            &quot;is_nullable&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
            &quot;ordinal_position&quot; =&gt; &lt;small&gt;integer&lt;/small&gt; 6
            &quot;display&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;10&quot;
            &quot;comment&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;extra&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;key&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;privileges&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;select,insert,update,references&quot;
        )&lt;/span&gt;
    )&lt;/span&gt;
    &lt;small&gt;protected&lt;/small&gt; _updated_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _created_column =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _serialize_columns =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _primary_key =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;id&quot;
    &lt;small&gt;protected&lt;/small&gt; _primary_key_value =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;1&quot;
    &lt;small&gt;protected&lt;/small&gt; _table_names_plural =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _reload_on_wakeup =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db =&gt; &lt;small&gt;object&lt;/small&gt; &lt;span&gt;Database_MySQL(6)&lt;/span&gt; &lt;code&gt;{
        &lt;small&gt;protected&lt;/small&gt; _connection_id =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(40)&lt;/span&gt; &quot;c45d8c80f225e7bc6843585eac509220d44e2dc8&quot;
        &lt;small&gt;protected&lt;/small&gt; _identifier =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(1)&lt;/span&gt; &quot;`&quot;
        &lt;small&gt;public&lt;/small&gt; last_query =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(98)&lt;/span&gt; &quot;SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('2')&quot;
        &lt;small&gt;protected&lt;/small&gt; _instance =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;default&quot;
        &lt;small&gt;protected&lt;/small&gt; _connection =&gt; &lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(mysql link)&lt;/span&gt;
        &lt;small&gt;protected&lt;/small&gt; _config =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &lt;span&gt;(
            &quot;type&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;MySQL&quot;
            &quot;connection&quot; =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &lt;span&gt;(
                &quot;hostname&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(35)&lt;/span&gt; &quot;vm-phpnursery.future-processing.lan&quot;
                &quot;database&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;pn_cinema&quot;
                &quot;persistent&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
            )&lt;/span&gt;
            &quot;table_prefix&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;
            &quot;charset&quot; =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;utf8&quot;
            &quot;caching&quot; =&gt; &lt;small&gt;bool&lt;/small&gt; FALSE
        )&lt;/span&gt;
    }&lt;/code&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_group =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _db_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_pending =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _db_reset =&gt; &lt;small&gt;bool&lt;/small&gt; TRUE
    &lt;small&gt;protected&lt;/small&gt; _db_builder =&gt; &lt;small&gt;NULL&lt;/small&gt;
    &lt;small&gt;protected&lt;/small&gt; _with_applied =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _cast_data =&gt; &lt;small&gt;array&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; 
    &lt;small&gt;protected&lt;/small&gt; _errors_filename =&gt; &lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;user&quot;
}&lt;/code&gt;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
												&lt;h3&gt;&lt;a href=&quot;#error50ed6d18484edenvironment_cookie&quot; onclick=&quot;return koggle('error50ed6d18484edenvironment_cookie')&quot;&gt;$_COOKIE&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6d18484edenvironment_cookie&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;session&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(26)&lt;/span&gt; &quot;i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
						&lt;h3&gt;&lt;a href=&quot;#error50ed6d18484edenvironment_server&quot; onclick=&quot;return koggle('error50ed6d18484edenvironment_server')&quot;&gt;$_SERVER&lt;/a&gt;&lt;/h3&gt;
		&lt;div id=&quot;error50ed6d18484edenvironment_server&quot; class=&quot;collapsed&quot;&gt;
			&lt;table cellspacing=&quot;0&quot;&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_STATUS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;200&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MIBDIRS&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(24)&lt;/span&gt; &quot;C:/xampp/php/extras/mibs&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;MYSQL_HOME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(16)&lt;/span&gt; &quot;\xampp\mysql\bin&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;OPENSSL_CONF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(31)&lt;/span&gt; &quot;C:/xampp/apache/bin/openssl.cnf&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_PEAR_SYSCONF_DIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHPRC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;TMP&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;\xampp\tmp&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_HOST&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_USER_AGENT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(72)&lt;/span&gt; &quot;Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(63)&lt;/span&gt; &quot;text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_LANGUAGE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(23)&lt;/span&gt; &quot;pl,en-us;q=0.7,en;q=0.3&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_ACCEPT_ENCODING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(13)&lt;/span&gt; &quot;gzip, deflate&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CONNECTION&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;keep-alive&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_REFERER&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(18)&lt;/span&gt; &quot;http://kino.local/&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_COOKIE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(34)&lt;/span&gt; &quot;session=i7mkdhf19rik1upo357qqv9r22&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;HTTP_CACHE_CONTROL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;max-age=0&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(221)&lt;/span&gt; &quot;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Program Files (x86)\Git\c&amp;nbsp;&amp;hellip;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SystemRoot&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;COMSPEC&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(27)&lt;/span&gt; &quot;C:\Windows\system32\cmd.exe&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATHEXT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(53)&lt;/span&gt; &quot;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;WINDIR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;C:\Windows&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SIGNATURE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(94)&lt;/span&gt; &quot;&amp;lt;address&amp;gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at kino.local Port 80&amp;lt;/address&amp;gt;
&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_SOFTWARE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(45)&lt;/span&gt; &quot;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;kino.local&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(2)&lt;/span&gt; &quot;80&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_ADDR&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(9)&lt;/span&gt; &quot;127.0.0.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_SCHEME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(4)&lt;/span&gt; &quot;http&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_PREFIX&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;CONTEXT_DOCUMENT_ROOT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(44)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_ADMIN&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(20)&lt;/span&gt; &quot;postmaster@localhost&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_FILENAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(54)&lt;/span&gt; &quot;D:/SvnTortoise/phpnursery/ProjNursery/Cinema/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REMOTE_PORT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(5)&lt;/span&gt; &quot;62758&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REDIRECT_URL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;GATEWAY_INTERFACE&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(7)&lt;/span&gt; &quot;CGI/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SERVER_PROTOCOL&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(8)&lt;/span&gt; &quot;HTTP/1.1&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_METHOD&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(3)&lt;/span&gt; &quot;GET&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;QUERY_STRING&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(0)&lt;/span&gt; &quot;&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_URI&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;SCRIPT_NAME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(10)&lt;/span&gt; &quot;/index.php&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_INFO&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(11)&lt;/span&gt; &quot;/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PATH_TRANSLATED&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(30)&lt;/span&gt; &quot;redirect:\index.php\adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;PHP_SELF&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(21)&lt;/span&gt; &quot;/index.php/adm_cinema&quot;&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME_FLOAT&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;float&lt;/small&gt; 1357737239.426&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
								&lt;tr&gt;
					&lt;td&gt;&lt;code&gt;REQUEST_TIME&lt;/code&gt;&lt;/td&gt;
					&lt;td&gt;&lt;pre&gt;&lt;small&gt;integer&lt;/small&gt; 1357737239&lt;/pre&gt;&lt;/td&gt;
				&lt;/tr&gt;
							&lt;/table&gt;
		&lt;/div&gt;
			&lt;/div&gt;
&lt;/div&gt;
): failed to open stream: Invalid argument ~ APPPATH\views\index.php [ 49 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:14:00 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): Kohana_Core::error_handler(2, 'include(&lt;sty...', 'D:\SvnTortoise\...', 49, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(28): Kohana_Controller_Template->after()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:49
2013-01-09 07:15:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: seances ~ APPPATH\views\adm_cinema\index.php [ 3 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
2013-01-09 07:15:01 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 3, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(29): Kohana_Controller_Template->after()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php:3
=======
2013-01-09 07:34:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:34:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:35:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:35:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:35:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:35:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:35:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:36:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_movies' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-09 07:36:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-09 07:36:22 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pn_cinema.movie_genre' doesn't exist [ SELECT `genre`.`id` AS `id`, `genre`.`name` AS `name` FROM `genres` AS `genre` JOIN `movie_genre` ON (`movie_genre`.`genre_id` = `genre`.`id`) WHERE `movie_genre`.`movie_id` IS NULL AND `id` = 2 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:36:22 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `genre`....', false, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:36:40 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pn_cinema.movie_genre' doesn't exist [ SELECT `genre`.`id` AS `id`, `genre`.`name` AS `name` FROM `genres` AS `genre` JOIN `movie_genre` ON (`movie_genre`.`genre_id` = `genre`.`id`) WHERE `movie_genre`.`movie_id` IS NULL AND `id` = 2 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:36:40 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `genre`....', false, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:36:59 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in where clause is ambiguous [ SELECT `genre`.`id` AS `id`, `genre`.`name` AS `name` FROM `genres` AS `genre` JOIN `movies_genres` ON (`movies_genres`.`genre_id` = `genre`.`id`) WHERE `movies_genres`.`movie_id` IS NULL AND `id` = 2 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:36:59 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `genre`....', false, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:37:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:37:49 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:40:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:40:05 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:46:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:46:38 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:48:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:48:34 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:48:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:48:50 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:49:08 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pn_cinema.movie_genre' doesn't exist [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movie_genre` ON (`movie_genre`.`movy_id` = `movie`.`id`) WHERE `movie_genre`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:49:08 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:49:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:49:35 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:58:09 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:58:09 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:58:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 07:58:33 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:01:24 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:01:24 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:10:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movies_id' in 'where clause' [ SELECT `genre`.`id` AS `id`, `genre`.`name` AS `name` FROM `genres` AS `genre` JOIN `movies_genres` ON (`movies_genres`.`genre_id` = `genre`.`id`) WHERE `movies_genres`.`movies_id` IS NULL AND `id` = 2 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:10:38 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `genre`....', false, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:10:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:10:58 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:11:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:11:12 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:11:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movies_id' in 'where clause' [ SELECT `genre`.`id` AS `id`, `genre`.`name` AS `name` FROM `genres` AS `genre` JOIN `movies_genres` ON (`movies_genres`.`genre_id` = `genre`.`id`) WHERE `movies_genres`.`movies_id` IS NULL AND `id` = 2 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:11:16 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `genre`....', false, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:12:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movies_id' in 'where clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`movies_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:12:36 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:12:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`movie_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-09 08:12:47 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
>>>>>>> d007437fe1eace4acfd578f454b51b7d77aacbaf
