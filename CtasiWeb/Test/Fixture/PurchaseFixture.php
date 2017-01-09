<?php
/**
 * PurchaseFixture
 *
 */
class PurchaseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'purchase_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false, 'key' => 'primary'),
		'provider_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'provider_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'provider_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'net_amount' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'discount_percentage' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '3,3', 'unsigned' => false),
		'discount_amount' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'tax_amount' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,3', 'unsigned' => false),
		'total_amount' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '12,3', 'unsigned' => false),
		'purchase_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'purchase_id', 'unique' => 1)
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
			'purchase_id' => 1,
			'provider_id' => 'Lorem ipsum dolor ',
			'provider_name' => 'Lorem ipsum dolor sit amet',
			'provider_address' => 'Lorem ipsum dolor sit amet',
			'net_amount' => '',
			'discount_percentage' => '',
			'discount_amount' => '',
			'tax_amount' => '',
			'total_amount' => '',
			'purchase_date' => '2016-07-05 20:00:55'
		),
	);

}
