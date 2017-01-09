<?php
App::uses('Sale', 'Model');

/**
 * Sale Test Case
 *
 */
class SaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sale',
		'app.customer',
		'app.address',
		'app.department',
		'app.region',
		'app.post',
		'app.transport',
		'app.store',
		'app.inventory',
		'app.transports_post',
		'app.phone',
		'app.user',
		'app.saleitem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sale = ClassRegistry::init('Sale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sale);

		parent::tearDown();
	}

}
