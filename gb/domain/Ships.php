<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class Ships extends DomainObject {

    private $container_id;
    private $departure_date;
    private $route_id;
    private $shipment_id;
    private $shipping_line_code;
    private $ship_id;

    function __construct( $id=null ) {
        parent::__construct( $id );
    }
        
    function setShipmentID ( $shipment_id ) {
        $this->shipment_id = $shipment_id;        
    }
    
    function getShipmentID () {
        return $this->shipment_id;
    }
    
    function setContainerID ($container_id) {
        $this->container_id = $container_id;
    }
    
    function getContainerID() {
        return $this->container_id;
    }
    
    function setDepartureDate ($departure_date) {
        $this->departure_date = $departure_date;
    }
    
    function getDepartureDate () {
        return $this->departure_date;
    }

    function setRouteID($route_id){
        $this->route_id = $route_id;
    }

    function getRouteID(){
        return $this->route_id;
    }

    function setShippinglineCode($shipping_line_code){
        $this->shipping_line_code = $shipping_line_code;
    }

    function getShippinglineCode(){
        return $this->shipping_line_code;
    }

    function setShipID($ship_id){
        $this->ship_id = $ship_id;
    }

    function getShipID(){
        return $this->ship_id;
    }
}

?>
