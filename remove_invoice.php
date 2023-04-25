<?php
require "dbconnection.php";
$dbcon = createDbConnection();

if(isset($_GET['invoice_id']))
{
   $invoice_id = $_GET['invoice_id'];
	
	$stmt = $dbcon->prepare("DELETE FROM invoice_items WHERE InvoiceId = ?");
	$stmt->execute([$invoice_id]);

	echo "Poistaminen onnistui.";
	
}
elseif (isset($_GET['invoice_item_id']))
{
   $invoice_item_id = $_GET['invoice_item_id'];
	
	$stmt = $dbcon->prepare("DELETE FROM invoice_items WHERE InvoiceItemId = ?");
	$stmt->execute([$invoice_item_id]);
	
	echo "Poistaminen onnistui.";
	
}
else
{
	echo "invoice_id tai invoice_item_id ei annettu.";
}
?>
