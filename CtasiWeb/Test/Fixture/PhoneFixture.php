<?php
/**
 * PhoneFixture
 *
 */
class PhoneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'phone_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'country_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'area_code' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'phone_id', 'unique' => 1),
			'fk_phone_country_idx' => array('column' => 'country_id', 'unique' => 0),
			'fk_phone_customer_idx' => array('column' => 'customer_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'phone_id' => 1,
			'customer_id' => 1,
			'country_id' => 'Lorem ip',
			'area_code' => 1,
			'number' => 1
		),
	);

}
