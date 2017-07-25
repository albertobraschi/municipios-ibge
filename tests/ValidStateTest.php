<?php

namespace MunicipiosIBGE;

/**
* 
*/
class StateTest extends \PHPUnit_Framework_TestCase
{

	public function testStateSaoPauloExists()
	{
		$state = new State(new Normalize('São Paulo'));

		$this->assertTrue($state->exist());
	}

	public function testStateNotExists()
	{
		$state = new State(new Normalize('New York'));

		$this->assertFalse($state->exist());
	}

	public function testGetCodeStateSP()
	{
		$state = new State(new Normalize('São Paulo'));

		$this->assertEquals($state->getCodeStateByName(), 'SP');		
	}

}