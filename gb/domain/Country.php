<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class Country extends DomainObject {
      
    private $country_id;
    private $country_name;

    function __construct($id=null){
        parent::__construct($id);
    }

    function setCountryID($country_id){
        $this->country_id = $country_id;
    }

    function getCountryID(){
        return $this->country_id;
    }

    function setCountryName($country_name){
        $this->country_name = $country_name;
    }

    function getCountryName(){
        return $this->country_name;
    }
}

?>
