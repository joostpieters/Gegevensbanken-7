<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class ShippingLine extends DomainObject {
      
    private $shipping_line_code;
    private $shipping_line_name;
    private $country_id;

    function __construct( $id=null ) {
        parent::__construct( $id );
    }
        
    function setShippingLineCode ( $shipping_line_code ) {
        $this->shipping_line_code = $shipping_line_code;
    }
    
    function getShippingLineCode () {
        return $this->shipping_line_code;
    }
    
    function setShippingLineName ($shipping_line_name) {
        $this->shipping_line_name = $shipping_line_name;
    }
    
    function getShippingLineName() {
        return $this->shipping_line_name;
    }
    
    function setCountryID ($country_id) {
        $this->country_id = $country_id;
    }
    
    function getCountryID () {
        return $this->country_id;
    }
}

?>
