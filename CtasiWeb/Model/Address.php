<?php
App::uses('AppModel', 'Model');
/**
 * Address Model
 *
 * @property Customer $Customer
 * @property Department $Department
 */
class Address extends AppModel {

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
	public $primaryKey = 'address_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'customer_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'There cant\'t be Addresses without Customer',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
// 		'Customer' => array(
// 			'className' => 'Customer',
// 			'foreignKey' => 'customer_id',
// 			'conditions' => '',
// 			'fields' => '',
// 			'order' => ''
// 		),
		'Department' => array(
				'className' => 'Department',
				'foreignKey' => 'department_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
		)
				
	);
}
