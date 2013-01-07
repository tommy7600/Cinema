<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-07 04:05:47 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome/template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:137
2013-01-07 04:05:47 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome/templat...')
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome/templat...', NULL)
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('welcome/templat...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:137
2013-01-07 04:06:13 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome/templates could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:137
2013-01-07 04:06:13 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome/templat...')
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome/templat...', NULL)
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('welcome/templat...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php:137
2013-01-07 04:08:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\welcome\index.php [ 16 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:16
2013-01-07 04:08:24 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 16, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:16
2013-01-07 04:11:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\welcome\index.php [ 16 ] in :
2013-01-07 04:11:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-07 04:11:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'elseif' (T_ELSEIF) ~ APPPATH\views\welcome\index.php [ 19 ] in :
2013-01-07 04:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-07 04:11:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\welcome\index.php [ 19 ] in :
2013-01-07 04:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :