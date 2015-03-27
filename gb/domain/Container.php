<?php
namespace gb\domain;

require_once( "gb/domain/DomainObject.php" );

class Container extends DomainObject {
      
    private $container_id;
    private $shipping_line_code;
    private $length;
    private $width;
    private $height;
    private $weight;

    function __construct( $id=null ) {
        parent::__construct( $id );
    }
        
    function setContainerID ( $container_id ) {
        $this->container_id = $container_id;
    }
    
    function getContainerID () {
        return $this->country_id;
    }
    
    function setShippingLineCode ($shipping_line_code) {
        $this->shipping_line_code = $shipping_line_code;
    }
    
    function getShippingLineCode() {
        return $this->shipping_line_code;
    }
    
    function setLength ($length) {
        $this->length = $length;
    }
    
    function getLength () {
        return $this->length;
    }

    function setWidth($width){
        return $this->width = $width;
    }

    function getWidth(){
        return $this->width;
    }

    function setHeight($height){
        $this->height = $height;
    }

    function getHeight(){
        return $this->height;
    }

    function setWeight($weight){
         $this->weight = $weight;
    }

    function  getWeight(){
        return $this->weight;
    }
}

?>
