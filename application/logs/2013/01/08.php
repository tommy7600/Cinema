<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-08 02:07:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 23 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:23
2013-01-08 02:07:30 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 23, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:23
2013-01-08 02:25:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS) ~ APPPATH\views\index.php [ 12 ] in :
2013-01-08 02:25:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 02:25:45 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index.php [ 12 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:25:45 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\SvnTortoise\...', 12, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:26:24 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php:8
2013-01-08 02:26:24 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\SvnTortoise\...', 8, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php:8
2013-01-08 02:30:13 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index.php [ 12 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:30:13 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\SvnTortoise\...', 12, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:30:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 12 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:30:31 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 12, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:30:39 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index.php [ 12 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:30:39 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\SvnTortoise\...', 12, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:12
2013-01-08 02:31:19 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index.php [ 13 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:13
2013-01-08 02:31:19 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\SvnTortoise\...', 13, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:13
2013-01-08 03:18:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\index.php [ 22 ] in :
2013-01-08 03:18:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 03:22:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function phpvar_dump() ~ APPPATH\views\index.php [ 20 ] in :
2013-01-08 03:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 03:31:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\index.php [ 24 ] in :
2013-01-08 03:31:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 03:34:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\index.php [ 24 ] in :
2013-01-08 03:34:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 03:42:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\index.php [ 24 ] in :
2013-01-08 03:42:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 03:42:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\index.php [ 24 ] in :
2013-01-08 03:42:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 03:50:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 13 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:13
2013-01-08 03:50:42 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 13, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:13
2013-01-08 04:39:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 4 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:39:31 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 4, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:40:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 4 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:40:23 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 4, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:40:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 4 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:40:29 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 4, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:41:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$title' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Template\Website.php [ 5 ] in :
2013-01-08 04:41:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 04:41:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 4 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:41:25 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 4, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:45:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 4 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:45:06 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 4, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:4
2013-01-08 04:46:08 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php:7
2013-01-08 04:46:08 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\SvnTortoise\...', 7, Array)
#1 [internal function]: Controller_Welcome->__construct(Object(Request), Object(Response))
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#6 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php:7
2013-01-08 04:46:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php on line 7 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php:43
2013-01-08 04:46:31 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\SvnTortoise\...', 43, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Welcome.php(7): Kohana_Controller->__construct()
#2 [internal function]: Controller_Welcome->__construct(Object(Request), Object(Response))
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php:43
2013-01-08 04:57:50 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Profiler.php [ 41 ] in :
2013-01-08 04:57:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 04:57:57 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Profiler.php [ 41 ] in :
2013-01-08 04:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 04:58:10 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Profiler.php [ 41 ] in :
2013-01-08 04:58:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-08 05:29:56 --- CRITICAL: ErrorException [ 2 ]: include(tables/week): failed to open stream: No such file or directory ~ APPPATH\views\welcome\index.php [ 11 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:11
2013-01-08 05:29:56 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(11): Kohana_Core::error_handler(2, 'include(tables/...', 'D:\SvnTortoise\...', 11, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(11): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(32): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:11
2013-01-08 05:30:08 --- CRITICAL: ErrorException [ 2 ]: include(tables\week): failed to open stream: No such file or directory ~ APPPATH\views\welcome\index.php [ 11 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:11
2013-01-08 05:30:08 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(11): Kohana_Core::error_handler(2, 'include(tables\...', 'D:\SvnTortoise\...', 11, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(11): include()
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(32): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php:11
2013-01-08 05:31:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\tables\movie.php [ 18 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\tables\movie.php:18
2013-01-08 05:31:10 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\tables\movie.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 18, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\welcome\index.php(11): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(32): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#12 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\tables\movie.php:18
2013-01-08 06:09:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:06 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:06 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:06 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:17 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:09:18 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:11:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67
2013-01-08 06:11:53 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Cookie.php:67