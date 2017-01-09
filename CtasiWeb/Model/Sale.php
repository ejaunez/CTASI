<?php
App::uses('AppModel', 'Model');
/**
 * Sale Model
 *
 * @property Customer $Customer
 * @property Address $Address
 * @property Phone $Phone
 * @property Transport $Transport
 * @property User $SaleUser
 * @property User $AprovalUser
 * @property Saleitem $Saleitem
 */
class Sale extends AppModel {

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
	public $primaryKey = 'sale_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'address_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Phone' => array(
			'className' => 'Phone',
			'foreignKey' => 'phone_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Transport' => array(
			'className' => 'Transport',
			'foreignKey' => 'transport_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SaleUser' => array(
			'className' => 'User',
			'foreignKey' => 'sale_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AprovalUser' => array(
			'className' => 'User',
			'foreignKey' => 'aproval_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Saleitem' => array(
			'className' => 'Saleitem',
			'foreignKey' => 'sale_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
