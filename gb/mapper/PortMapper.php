<?php
namespace gb\mapper;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/Port.php" );


class PortMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM PORT where port_code = ?";
        $this->selectAllStmt = "SELECT * FROM PORT ";
        
    } 
    
    function getCollection( array $raw ) {
        
        $customerCollection = array();
        foreach($raw as $row) {
            array_push($customerCollection, $this->doCreateObject($row));
        }
        
        return $customerCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\Port( $array['port_code'] );
        
        $obj->setPortCode($array['port_code']);
        $obj->setCountryID($array['country_id']);
        $obj->setDSTZone($array['DST_zone']);
        $obj->setLatitude($array['latitude']);
        $obj->setLongitude($array['longitude']);
        $obj->setPortName($array['port_name']);
        $obj->setTax($array['tax']);
        $obj->setTimeZone($array['time_zone']);
        
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
