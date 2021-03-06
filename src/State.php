<?php

namespace MunicipiosIBGE;

/**
* Verify and format state
*/
class State
{

    protected $state;

    protected $states = [
        "ACRE" => "AC",
        "ALAGOAS" => "AL",
        "AMAZONAS" => "AM",
        "AMAPA" => "AP",
        "BAHIA" => "BA",
        "CEARA" => "CE",
        "DISTRITOFEDERAL" => "DF",
        "ESPIRITOSANTO" => "ES",
        "GOIAS" => "GO",
        "MARANHAO" => "MA",
        "MATOGROSSO" => "MT",
        "MATOGROSSODOSUL" => "MS",
        "MINASGERAIS" => "MG",
        "PARA" => "PA",
        "PARAIBA" => "PB",
        "PARANA" => "PR",
        "PERNAMBUCO" => "PE",
        "PIAUI" => "PI",
        "RIODEJANEIRO" => "RJ",
        "RIOGRANDEDONORTE" => "RN",
        "RONDONIA" => "RO",
        "RIOGRANDEDOSUL" => "RS",
        "RORAIMA" => "RR",
        "SANTACATARINA" => "SC",
        "SERGIPE" => "SE",
        "SAOPAULO" => "SP",
        "TOCANTINS" => "TO"
    ]; 

    /**
    * @param object MunicipiosIBGE/Normalize
    */
    function __construct(Normalize $State)
    {
        $this->state = $State->getNormalizedString();       
    }

    /**
    * Verify if input is state
    * @return bool
    */
    public function exist()
    {
        return isset($this->states[$this->state]) || array_search($this->state, $this->states);
    }

    /**
    * Get UF/code state by string normalized
    * @return string
    */
    public function getCodeStateByName()
    {
        if (isset($this->states[$this->state]))
            return $this->states[$this->state];

        $key = array_search($this->state, $this->states);

        if ((!isset($key) && empty($key)))
            return false;
        
        return $this->states[$key];
    }

}