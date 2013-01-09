<?php defined('SYSPATH') OR die('No direct script access.'); ?>

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