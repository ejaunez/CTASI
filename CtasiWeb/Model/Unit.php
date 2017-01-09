<?php
App::uses('AppModel', 'Model');
/**
 * Unit Model
 *
 */
class Unit extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'ctasidb';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'unit_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'unit_name';

}
