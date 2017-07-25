<?php

namespace MunicipiosIBGE;

/**
* 
*/
class NormalizeTest extends \PHPUnit_Framework_TestCase
{
	
	protected $Normalize;

	public function testReturnIsUpperCaseCorrect()
	{
		$saopaulo = new Normalize('São Paulo');
		
		$this->assertEquals('SãO PAULO', $saopaulo->formatUpperCase());
	}

	public function testReturnIsUpperCaseCorrectRioDeJaneiro()
	{
		$rio = new Normalize('RIO de Janeiro');
		$rioWithWifen = new Normalize('RIO-de-Janeiro');
		$riolower = new Normalize('rio de janeiro');
		
		$this->assertEquals('RIO DE JANEIRO', $rio->formatUpperCase());	
		$this->assertEquals('RIO-DE-JANEIRO', $rioWithWifen->formatUpperCase());	
		$this->assertEquals('RIO DE JANEIRO', $riolower->formatUpperCase());	
	}

	public function testReturnIsWithoutSpacesWhites()
	{
		$saopaulo = new Normalize('São Paulo');
		$rio = new Normalize('RIO de Janeiro');
		
		$this->assertEquals('SãoPaulo', $saopaulo->removeSpaces());
		$this->assertEquals('RIOdeJaneiro', $rio->removeSpaces());	
	}

	public function testReturnWithoutAccents()
	{
		$saopaulo = new Normalize('São Paulo');
		
		$this->assertEquals('Sao Paulo', $saopaulo->removeCharactersEspecial());
	}

	public function testIfStringIsNormalized()
	{
		$saopaulo = new Normalize('São Paulo');
		$rio = new Normalize('RIO de Janeiro');
		$rio2 = new Normalize('RIO-de-Janeiro');
		$guarulhos = new Normalize('Guarul h o s');
		
		$this->assertEquals('SAOPAULO', $saopaulo->getNormalizedString());
		$this->assertEquals('RIODEJANEIRO', $rio->getNormalizedString());	
		$this->assertEquals('RIODEJANEIRO', $rio2->getNormalizedString());	
		$this->assertEquals('GUARULHOS', $guarulhos->getNormalizedString());
	}

}