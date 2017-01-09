<?php
/**
 * SaleFixture
 *
 */
class SaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'sale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'address_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'phone_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'sale_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'dispatch_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'transport_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'items_qty' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'sale_commission' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'sale_net' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'sale_tax' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'sale_total' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'sale_user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'aproval_user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'sale_id', 'unique' => 1),
			'fk_sale_customer_idx' => array('column' => 'customer_id', 'unique' => 0),
			'fk_sale_address_idx' => array('column' => 'address_id', 'unique' => 0),
			'fk_sale_phone_idx' => array('column' => 'phone_id', 'unique' => 0)
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
			'sale_id' => 1,
			'customer_id' => 1,
			'address_id' => 1,
			'phone_id' => 1,
			'sale_date' => '2016-04-30 17:24:18',
			'dispatch_date' => '2016-04-30 17:24:18',
			'transport_id' => 'Lorem ip',
			'items_qty' => 1,
			'sale_commission' => 1,
			'sale_net' => 1,
			'sale_tax' => 1,
			'sale_total' => 1,
			'sale_user_id' => 1,
			'aproval_user_id' => 1
		),
	);

}
