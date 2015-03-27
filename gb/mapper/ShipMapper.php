<?php
namespace gb\mapper;

use gb\domain\Ship;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/Ship.php" );


class ShipMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM SHIP";
        $this->selectAllStmt = "SELECT * FROM SHIP ";
        
    } 
    
    function getCollection( array $raw ) {
        
        $customerCollection = array();
        foreach($raw as $row) {
            array_push($customerCollection, $this->doCreateObject($row));
        }
        
        return $customerCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\Ship( $array['ship_id'] );
        
        $obj->setShipId($array['ship_id']);
        $obj->setShipName($array['ship_name']);
        $obj->setType($array['type']);
        
        return $obj;
    }

    protected function doInsert( \gb\domain\DomainObject $object ) {
        
    }
    
    function update( \gb\domain\DomainObject $object ) {
        $updateStmt = "UPDATE SHIP SET ship_name = ?, type = ? WHERE ship_id = ?";
        $this->con->executeUpdateStatement($updateStmt,  $array=array($object->get));

    }

    function selectStmt() {
        return $this->selectStmt;
    }
    
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
    
    
}


?>
