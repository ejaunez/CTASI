<?php
App::uses('AppModel', 'Model');
/**
 * Sector Model
 *
 * @property Department $Department
 */
class Sector extends AppModel {

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
	public $primaryKey = 'sector_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Department' => array(
			'className' => 'Department',
			'foreignKey' => 'department_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
