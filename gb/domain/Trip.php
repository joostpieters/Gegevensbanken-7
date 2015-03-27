<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class Trip extends DomainObject {
      
    private $arrival_date;
    private $departure_date;
    private $route_id;
    private $ship_id;

    function __construct( $id=null ) {
        parent::__construct( $id );
    }
        
    function setArrivalDate ( $arrival_date ) {
        $this->arrival_date = $arrival_date;
    }
    
    function getArrivalDate () {
        return $this->arrival_date;
    }
    
    function setDepartureDate ($departure_date) {
        $this->departure_date = $departure_date;
    }
    
    function getDepartureDate() {
        return $this->departure_date;
    }
    
    function setRouteID ($route_id) {
        $this->route_id = $route_id;
    }
    
    function getRouteID () {
        return $this->route_id;
    }

    function setShipID($ship_id){
        $this->ship_id = $ship_id;
    }

    function getShipID(){
        return $this->ship_id;
    }
}

?>
