<?php
App::uses('AppModel', 'Model');
/**
 * Currency Model
 *
 * @property Country $Country
 */
class Currency extends AppModel {

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
	public $primaryKey = 'currency_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
// 	public $belongsTo = array(
// 		'Country' => array(
// 			'className' => 'Country',
// 			'foreignKey' => 'country_id',
// 			'conditions' => '',
// 			'fields' => '',
// 			'order' => ''
// 		)
// 	);
}
