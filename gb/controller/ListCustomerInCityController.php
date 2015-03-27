<?php
namespace gb\controller;

use gb\domain\Customer;
use gb\mapper\CustomerMapper;
require_once( "gb/mapper/CustomerMapper.php" );

require_once("gb/controller/PageController.php");

class ListCustomerInCityController extends PageController {
    private  $city;

    function process() {
        if (isset($_POST["list_customer"])) {
            $this->city = $_POST["selected_city"];
        }
    }


    function getRequest(){
        return $this->city;
    }

}
?>