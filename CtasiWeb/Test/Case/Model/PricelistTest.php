<?php
App::uses('Pricelist', 'Model');

/**
 * Pricelist Test Case
 *
 */
class PricelistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pricelist',
		'app.country',
		'app.currency',
		'app.region',
		'app.department',
		'app.post',
		'app.transport',
		'app.store',
		'app.inventory',
		'app.transports_post',
		'app.product',
		'app.unit',
		'app.pricelists_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pricelist = ClassRegistry::init('Pricelist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pricelist);

		parent::tearDown();
	}

}
