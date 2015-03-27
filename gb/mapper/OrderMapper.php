<?php
namespace gb\mapper;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/Order.php" );


class OrderMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM ORDERS WHERE shipment_id = ?";
        $this->selectAllStmt = "SELECT * FROM ORDERS ";
        
    } 
    
    function getCollection( array $raw ) {
        
        $customerCollection = array();
        foreach($raw as $row) {
            array_push($customerCollection, $this->doCreateObject($row));
        }
        
        return $customerCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\Order( $array['shipment_id'] );
        
        $obj->setShipmentID($array['shipment_id']);
        $obj->setOrderDate($array['order_date']);
        $obj->setPrice($array['price']);
	$obj->setShipbrokerName($array['ship_broker_name']);
	$obj->setSsn($array['ssn']);
        
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
