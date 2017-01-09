<?php
App::uses('Store', 'Model');

/**
 * Store Test Case
 *
 */
class StoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.store',
		'app.inventory',
		'app.transport',
		'app.post',
		'app.department',
		'app.region',
		'app.address',
		'app.transports_post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Store = ClassRegistry::init('Store');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Store);

		parent::tearDown();
	}

}
