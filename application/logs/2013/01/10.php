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