<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class Route extends DomainObject {
      
    private $from_port_code;
    private $to_port_code;
    private $route_id;

    function __construct( $id ) {
        parent::__construct( $id );
    }
        
    function setFromPortCode ( $from_port_code ) {
        $this->from_port_code = $from_port_code;
    }
    
    function getFromPortCode () {
        return $this->from_port_code;
    }
    
    function setToPortCode ($to_port_code) {
        $this->to_port_code = $to_port_code;
    }
    
    function getToPortCode() {
        return $this->to_port_code;
    }
    
    function setRouteID ($route_id) {
        $this->route_id = $route_id;
    }
    
    function getRouteID () {
        return $this->route_id;
    }
}

?>
