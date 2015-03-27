<?php
namespace gb\controller;

use gb\connection\ConnectionManager;

require_once("gb/controller/PageController.php");
require_once("gb/mapper/ShipMapper.php" );
require_once("gb/connection/ConnectionManager.php");


class UpdateShipController extends PageController {

    protected static $con;

        
    function process() {
        if (isset($_POST["update_ship"])) {
            $this->con = new ConnectionManager();
        }
    }

    function updateShipID($id){


    }

}

?>