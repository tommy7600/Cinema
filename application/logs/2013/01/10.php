<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-10 03:49:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'movies_genres.movy_id' in 'on clause' [ SELECT `movie`.`id` AS `id`, `movie`.`title` AS `title`, `movie`.`duration` AS `duration` FROM `movies` AS `movie` JOIN `movies_genres` ON (`movies_genres`.`movy_id` = `movie`.`id`) WHERE `movies_genres`.`genre_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-10 03:49:30 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movie', Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\phpnursery\Cinema\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(76): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(16): Controller_Searcher->get_serched_movies_by_genres(Array)
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#8 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\phpnursery\Cinema\modules\database\classes\Kohana\Database\Query.php:251
2013-01-10 03:55:27 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Searcher.php [ 77 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php:77
2013-01-10 03:55:27 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(77): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 77, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(30): Controller_Searcher->get_serched_movies_by_genres(Array)
#2 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php:77
2013-01-10 04:03:48 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Seances.php [ 28 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:28
2013-01-10 04:03:48 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(28): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:28
2013-01-10 04:04:16 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Seances.php [ 28 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:28
2013-01-10 04:04:16 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(28): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:28
2013-01-10 04:04:33 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Seances.php [ 28 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:28
2013-01-10 04:04:33 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(28): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:28
2013-01-10 04:05:12 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Seances.php [ 29 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:29
2013-01-10 04:05:12 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php(29): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Seances->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Seances))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Seances.php:29
2013-01-10 04:06:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\Controller\Searcher.php [ 33 ] in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php:33
2013-01-10 04:06:26 --- DEBUG: #0 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#4 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php:33
2013-01-10 04:09:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Searcher.php [ 79 ] in :
2013-01-10 04:09:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 04:09:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Searcher.php [ 79 ] in :
2013-01-10 04:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 04:10:03 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Searcher.php [ 78 ] in :
2013-01-10 04:10:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(78): array_push(NULL, Object(Database_MySQL_Result))
#2 C:\xampp\htdocs\phpnursery\Cinema\application\classes\Controller\Searcher.php(30): Controller_Searcher->get_serched_movies_by_genres(Array)
#3 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Controller.php(84): Controller_Searcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Searcher))
#6 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\phpnursery\Cinema\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\phpnursery\Cinema\index.php(118): Kohana_Request->execute()
#9 {main} in :