<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-10 05:19:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Seances.php [ 19 ] in :
2013-01-10 05:19:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 05:19:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movie->name' in 'order clause' [ SELECT `seance`.`id` AS `id`, `seance`.`date` AS `date`, `seance`.`time` AS `time`, `seance`.`movie_id` AS `movie_id` FROM `seances` AS `seance` WHERE `date` = '2013-01-11' ORDER BY `movie->name` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-10 05:19:39 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `seance`...', 'Model_Seance', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(19): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-10 05:19:47 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant time - assumed 'time' ~ APPPATH\classes\Controller\Seances.php [ 19 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:19
2013-01-10 05:19:47 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:19
2013-01-10 07:22:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-10 07:22:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 07:22:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-10 07:22:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 07:22:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-10 07:22:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 07:22:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_seances' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-10 07:22:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 07:30:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: actual_page ~ APPPATH\views\index.php [ 31 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php:31
2013-01-10 07:30:16 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 31, Array)
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
2013-01-10 07:57:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selected ~ APPPATH\views\tables\seance_list.php [ 31 ] in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\tables\seance_list.php:31
2013-01-10 07:57:20 --- DEBUG: #0 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\tables\seance_list.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\SvnTortoise\...', 31, Array)
#1 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\adm_cinema\index.php(1): include('D:\SvnTortoise\...')
#2 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\index.php(49): include('D:\SvnTortoise\...')
#3 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(61): include('D:\SvnTortoise\...')
#4 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\SvnTortoise\...', Array)
#5 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\classes\Controller\Admin.php(23): Kohana_Controller_Template->after()
#7 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Controller.php(87): Controller_Admin->after()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdM_Cinema))
#10 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 D:\SvnTortoise\phpnursery\ProjNursery\Cinema\index.php(118): Kohana_Request->execute()
#13 {main} in D:\SvnTortoise\phpnursery\ProjNursery\Cinema\application\views\tables\seance_list.php:31