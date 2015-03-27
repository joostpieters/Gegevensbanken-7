<?php
	// Dit is de titel die op de pagina en in de menubalk
	// zal verschijnen.
	$title = "List of orders";

	// Voer de inhoud van "top.inc.php" uit. Deze verzorgt de
	// algemene pagina lay-out en het menu.
	require("template/top.tpl.php");

	require_once( "gb/mapper/OrderMapper.php" );
	require_once( "gb/mapper/CustomerMapper.php");
    $mapper = new gb\mapper\OrderMapper();//
    $allOrders = $mapper->findAll();
    $customerMapper = new gb\mapper\customerMapper();
?>
<table>
    <tr>
        <td>Shipment id</td>
        <td>Customer name</td>
        <td>Ship broker name</td>
        <td>Price</td>
        <td>Order date</td>
    </tr>
    <?php
    foreach($allOrders as $order) {
 ?>
       <tr>
		<td><?php echo $order->getShipmentID(); ?></td>
		<td>
		<?php
			$customerQuery = $customerMapper->getOrderingCustomer($order->getSsn());
			echo $customerQuery[0]->getFirstName();
			echo ' ';
			echo $customerQuery[0]->getLastName();?>
		</td>
		<td><?php echo $order->getShipbrokerName(); ?></td>
		<td><?php echo $order->getPrice(); ?></td>
		<td><?php echo $order->getOrderDate(); ?></td>

	</tr>     
<?php    
}
?>
</table>  
<?php
	require("template/bottom.tpl.php");
?>