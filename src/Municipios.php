<?php

namespace MunicipiosIBGE;

/**
* Verify and format state
*/
class Municipios extends State
{

    protected $Municipio;

    /**
    * @param object MunicipiosIBGE/Normalize
    */
	function __construct(Normalize $Municipio, Normalize $State)
	{
		parent::__construct($State);

        $this->Municipio = $Municipio;
	}

	/**
	* Verify if input is state and municipio exist
	* @return bool
	*/
	public function exist()
	{
        if (!parent::exist())
            return false;

		$municipios = json_decode(file_get_contents('dados.json'));
        
        $state = $this->getCodeStateByName();

        $municipio = $this->Municipio->getNormalizedString();
        
        return isset($municipios->$state->$municipio);
	}

    public function getCodeIBGE()
    {
        if (!$this->exist())
            return false;

        $municipios = json_decode(file_get_contents('dados.json'));
        
        $state = $this->getCodeStateByName();

        $municipio = $this->Municipio->getNormalizedString();
        
        return (string) $municipios->$state->$municipio;   
    }

}