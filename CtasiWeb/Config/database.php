<?php
class DATABASE_CONFIG {

	public $ctasidb = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'port' => 3306,
		'login' => 'ctasiexpl',
		'password' => 'ctasiexpl',
		'database' => 'ctasi',
		'encoding' => 'utf8'
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'port' => 3306,
		'login' => 'root',
		'password' => 'mysql',
		'database' => 'ctasi',
		'encoding' => 'utf8'
	);
}
