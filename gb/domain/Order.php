<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class Order extends DomainObject {    
      
    private $order_date;
    private $price;
    private $shipment_id;
    private $ship_broker_name;
    private $ssn;

    function __construct( $id=null ) {
        parent::__construct( $id );
    }
        
    function setOrderDate( $order_date ) {
        $this->order_date = $order_date;        
    }
    
    function getOrderDate () {
        return $this->order_date;
    }
    
    function setPrice($price) {
        $this->price = $price;
    }
    
    function getPrice() {
        return $this->price;
    }
    
    function setShipmentID ($shipment_id) {
        $this->shipment_id = $shipment_id;
    }
    
    function getShipmentID () {
        return $this->shipment_id;
    }

    function setShipbrokerName ($ship_broker_name) {
        $this->ship_broker_name = $ship_broker_name;
    }
    
    function getShipbrokerName () {
        return $this->ship_broker_name;
    }

    function setSsn ($ssn) {
        $this->ssn = $ssn;
    }
    
    function getSsn () {
        return $this->ssn;
    }
}

?>
