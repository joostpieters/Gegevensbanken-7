<?php
namespace gb\mapper;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/Ships.php" );


class ShipsMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM SHIPS";
        $this->selectAllStmt = "SELECT * FROM SHIPS ";
        
    } 
    
    function getCollection( array $raw ) {
        
        $customerCollection = array();
        foreach($raw as $row) {
            array_push($customerCollection, $this->doCreateObject($row));
        }
        
        return $customerCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\Ships( null );
        
        $obj->setRouteID($array['route_id']);
        $obj->setShipID($array['ship_id']);
        $obj->setContainerID($array['container_id']);
        $obj->setDepartureDate($array['departure_date']);
        $obj->setShipmentID($array['shipment_id']);
        $obj->setShippinglineCode($array['shipping_line_code']);
        
        return $obj;
    }

    protected function doInsert( \gb\domain\DomainObject $object ) {
        
    }
    
    function update( \gb\domain\DomainObject $object ) {
        
    }

    function selectStmt() {
        return $this->selectStmt;
    }
    
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
    
    
}


?>
