<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Unit $Unit
 * @property Country $Country
 */
class Product extends AppModel {

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
	public $primaryKey = 'product_id';

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
		'Unit' => array(
			'className' => 'Unit',
			'foreignKey' => 'unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
