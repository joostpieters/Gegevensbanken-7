<?php
namespace gb\mapper;

$EG_DISABLE_INCLUDES=true;
require_once( "gb/mapper/Mapper.php" );
require_once( "gb/domain/Container.php" );


class ContainerMapper extends Mapper {

    function __construct() {
        parent::__construct();
        $this->selectStmt = "SELECT * FROM CONTAINER where container_id = ?";
        $this->selectAllStmt = "SELECT * FROM CONTAINER ";
        
    } 
    
    function getCollection( array $raw ) {
        
        $customerCollection = array();
        foreach($raw as $row) {
            array_push($customerCollection, $this->doCreateObject($row));
        }
        
        return $customerCollection;
    }

    protected function doCreateObject( array $array ) {
        $obj = new \gb\domain\Container( null );
        
        $obj->setContainerID($array['container_id']);
        $obj->setShippingLineCode($array['shipping_line_code']);
        $obj->setHeight($array['height']);
        $obj->setLength($array['length']);
        $obj->setWidth($array['width']);
        $obj->setWeight($array['weight']);
        
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
