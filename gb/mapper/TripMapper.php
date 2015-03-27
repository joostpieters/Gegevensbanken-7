<?php
namespace gb\mapper;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/Trip.php" );


class TripMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM TRIP where ship_id = ? and route_id = ? and departure_date = ?";
        $this->selectAllStmt = "SELECT * FROM TRIP";
        
    } 
    
    function getCollection( array $raw ) {
        
        $customerCollection = array();
        foreach($raw as $row) {
            array_push($customerCollection, $this->doCreateObject($row));
        }
        
        return $customerCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\Trip( null );
        
        $obj->setShipID($array['ship_id']);
        $obj->setRouteID($array['route_id']);
        $obj->setDepartureDate($array['departure_date']);
        $obj->setArrivalDate($array['arrival_date']);
        
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
