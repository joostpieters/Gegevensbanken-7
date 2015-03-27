<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class Port extends DomainObject {
      
    private $port_code;
    private $port_name;
    private $tax;
    private $longitude;
    private $latitude;
    private $time_zone;
    private $DST_zone;
    private $country_id;

    function __construct( $id=null ) {
        parent::__construct( $id );
    }
        
    function setPortCode($port_code){
        $this->port_code = $port_code;
    }

    function getPortCode(){
        return $this->port_code;
    }

    function setPortName($port_name){
        $this->port_name = $port_name;
    }

    function getPortName(){
        return $this->port_name;
    }

    function setTax($tax){
        $this->tax = $tax;
    }

    function getTax(){
        $this->tax;
    }

    function setLongitude($longitude){
        $this->longitude = $longitude;
    }

    function getLongitude(){
        return $this->longitude;
    }

    function setLatitude($latitude){
        $this->latitude = $latitude;
    }

    function getLatitude(){
        return $this->latitude;
    }

    function setTimeZone($time_zone){
        $this->time_zone = $time_zone;
    }

    function getTimeZone(){
        return $this->time_zone;
    }

    function setDSTZone($DST_zone){
        $this->DST_zone = $DST_zone;
    }

    function getDSTZone(){
        return $this->DST_zone;
    }

    function setCountryID($country_id){
        $this->country_id = $country_id;
    }

    function getCountryID(){
        return $this->country_id;
    }
}

?>
