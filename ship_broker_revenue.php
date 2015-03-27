<?php
	$title = "Ship broker revenues";

	// Voer de inhoud van "top.inc.php" uit. Deze verzorgt de
	// algemene pagina lay-out en het menu.
	require("template/top.tpl.php");

    require_once( "gb/mapper/ShipBrokerMapper.php" );
    $mapper = new gb\mapper\ShipBrokerMapper();//
    $resuls = $mapper->getShipBrokerRevenues();

 ?>
<table>
    <tr>
        <td>Ship broker name</td>
        <td>From port</td>
        <td>To port</td>
        <td>Revenue</td>
        <td>Date (mm/yyyy)</td>
    </tr>

    <?php
    $min = (new DateTime())->modify('first day of previous month');
    $max = (new DateTime())->modify('last day of previous month');
        foreach($resuls as $row){
            $date = new DateTime($row['departure_date']);

            if ($date >= $min && $date <= $max){
        ?>
        <tr>
            <td><?php echo $row['ship_broker_name']; ?></td>
            <td><?php echo $row['from_port_name'];  ?></td>
            <td><?php echo $row['to_port_name'];  ?></td>
            <td><?php echo $row['revenue'];  ?></td>
            <td><?php echo  $date->format('m/Y') ?></td>

        </tr>
    <?php
       }
    }
    ?>
</table>
<?php
	require("template/bottom.tpl.php");
?>