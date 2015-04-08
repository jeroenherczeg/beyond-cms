<?php

class RoutesTest extends TestCase {

	/**
	 * A basic test for getting homepage.
	 *
	 * @return void
	 */
	public function testHome()
	{
		$response = $this->call('GET', '/');
		$this->assertEquals(200, $response->getStatusCode());
	}


	/**
	 * A basic test for getting the backend homepage.
	 *
	 * @return void
	 */
	public function testBackendHome()
	{
		$response = $this->call('GET', '/admin');
		$this->assertEquals(200, $response->getStatusCode());
	}
}