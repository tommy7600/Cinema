<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => 'http://vm-phpnursery.future-processing.lan',
			'database'   => 'pn_cinema',
			'username'   => 'pkalita',
			'password'   => 'q1w2e3r4',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	)
    
);
