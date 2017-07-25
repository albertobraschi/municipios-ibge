<?php

namespace MunicipiosIBGE;

/**
* Normalize String
*/
class Normalize
{

	protected $info;
	
	/**
	* @param $input String
	*/
	public function __construct($input)
	{
		$this->info = $input;
	}

	/**
	* All words to upper case
	* @return String
	*/
	public function formatUpperCase()
	{
		$this->info = strtoupper($this->info);
		
		return $this->info;
	}

	/**
	* Remover all characters especials
	* @return String
	*/
	public function removeCharactersEspecial()
	{
		$this->info = preg_replace( '/[`^~\'"-]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $this->info));

		return $this->info;
	}

	/**
	* Remover all spaces
	* @return String
	*/
	public function removeSpaces()
	{
		$this->info = preg_replace('/\s+/', '', $this->info);

		return $this->info;
	}

	/**
	* Return string without characters especial, spaces and all words uppercase
	* @return String
	*/
	public function getNormalizedString()
	{
		$this->removeCharactersEspecial();
		$this->removeSpaces();
		$this->formatUpperCase();

		return $this->info;
	}

}