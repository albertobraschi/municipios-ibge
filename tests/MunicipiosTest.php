<?php

namespace MunicipiosIBGE;

/**
* 
*/
class MunicipiosTest extends \PHPUnit_Framework_TestCase
{

	protected $Municipios;

	public function testMunicipioExist()
	{
		$guarulhos = new Normalize('Guarulhos');
		$saopaulo = new Normalize('São Paulo');

		$Municipios = new Municipios($guarulhos, $saopaulo);

		$this->assertTrue($Municipios->exist());
	}

	public function testMunicipioExistButStateNot()
	{
		$guarulhos = new Normalize('Guarulhos');
		$saopaulo = new Normalize('New York');

		$Municipios = new Municipios($guarulhos, $saopaulo);

		$this->assertFalse($Municipios->exist());
	}

	public function testGetCodesIBGE()
	{
		$saopaulo = new Normalize('SAO PAUlo');

		$guarulhos = new Normalize('Guarulhos'); 
		$osasco = new Normalize('Osasco'); 
		$barueri = new Normalize('BaRu-eri'); 
		$saomiguel = new Normalize('São Miguel'); 

		$test = new Municipios($guarulhos, $saopaulo);
		$this->assertEquals('3518800', $test->getCodeIBGE());

		$test = new Municipios($osasco, $saopaulo);
		$this->assertEquals('3534401', $test->getCodeIBGE());

		$test = new Municipios($barueri, $saopaulo);
		$this->assertEquals('3505708', $test->getCodeIBGE());

		$sp = new Normalize('SP');

		$test = new Municipios($guarulhos, $sp);
		$this->assertEquals('3518800', $test->getCodeIBGE());

		$test = new Municipios($osasco, $sp);
		$this->assertEquals('3534401', $test->getCodeIBGE());

		$test = new Municipios($barueri, $sp);
		$this->assertEquals('3505708', $test->getCodeIBGE());

	}

}