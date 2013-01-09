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
