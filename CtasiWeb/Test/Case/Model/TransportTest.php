<?php
App::uses('Transport', 'Model');

/**
 * Transport Test Case
 *
 */
class TransportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transport',
		'app.store',
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
		$this->Transport = ClassRegistry::init('Transport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transport);

		parent::tearDown();
	}

}
