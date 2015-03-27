<?php
namespace gb\mapper;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/ShipBroker.php" );


class ShipBrokerMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM CUSTOMER where ssn = ?";
        $this->selectAllStmt = "SELECT * FROM SHIP_BROKER ";       
    } 
    
    function getCollection( array $raw ) {
        
        $customerCollection = array();
        foreach($raw as $row) {
            array_push($customerCollection, $this->doCreateObject($row));
        }
        
        return $customerCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\ShipBroker( $array['name'] );
        
        $obj->setName($array['name']);
        $obj->setNumber($array['number']);
        $obj->setStreet($array['street']);
        $obj->setBus($array['bus']);
        $obj->setPostalCode($array['postal_code']);
        $obj->setCity($array['city']);
        
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
    
    function getShipBrokerRevenues() {
        
        $con = $this->getConnectionManager();
        $selectStmt = "SELECT R.Route_id, O.Ship_broker_name AS ship_broker_name, P1.Port_Name AS from_port_name, P2.Port_Name AS to_port_name, SUM(O.Price) AS revenue, S.Departure_date AS departure_date
                        FROM SHIPS S, ROUTE R, ORDERS O, PORT P1, PORT P2
                        WHERE S.Route_id = R.Route_id AND P1.Port_Code = R.From_port_code AND P2.Port_Code = R.To_port_code AND S.Shipment_id = O.Shipment_id
                        GROUP BY O.Ship_broker_name, R.Route_id ";
        $results = $con->executeSelectStatement($selectStmt, array());
        return $results;
        
        
    }
}


?>
