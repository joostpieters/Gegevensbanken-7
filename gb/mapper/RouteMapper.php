<?php
namespace gb\mapper;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/Route.php" );


class RouteMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM ROUTE WHERE route_id = ?";
        $this->selectAllStmt = "SELECT * FROM ROUTE ";
    } 
    
    function getCollection( array $raw ) {
        
        $routeCollection = array();
        foreach($raw as $row) {
            array_push($routeCollection, $this->doCreateObject($row));
        }
        
        return $routeCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\Route( $array['route_id'] );
        $obj->setRouteID($array['route_id']);
        $obj->setFromPortCode($array['from_port_code']);
        $obj->setToPortCode($array['to_port_code']);
        
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
