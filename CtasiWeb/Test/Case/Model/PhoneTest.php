<?php
App::uses('Phone', 'Model');

/**
 * Phone Test Case
 *
 */
class PhoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.phone',
		'app.customer',
		'app.address',
		'app.department',
		'app.region',
		'app.post',
		'app.transport',
		'app.store',
		'app.inventory',
		'app.transports_post',
		'app.country',
		'app.currency',
		'app.product',
		'app.unit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Phone = ClassRegistry::init('Phone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Phone);

		parent::tearDown();
	}

}
