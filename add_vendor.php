<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("INSERT INTO `vendors` (business_name, address1, address2, city, state, zip, business_phone, contact_name, contact_phone, contact_email, notes)
		VALUES (:business_name, :address1, :address2, :city, :state, :zip, :business_phone, :contact_name, :contact_phone, :contact_email, :notes)");

//Bind Values
$db->bind(':business_name', $_POST['business_name']);
$db->bind(':address1', $_POST['address1']);
$db->bind(':address2', $_POST['address2']);
$db->bind(':city', $_POST['city']);
$db->bind(':state', $_POST['state']);
$db->bind(':zip', $_POST['zip']);
$db->bind(':business_phone', $_POST['business_phone']);
$db->bind(':contact_name', $_POST['contact_name']);
$db->bind(':contact_phone', $_POST['contact_phone']);
$db->bind(':contact_email', $_POST['contact_email']);
$db->bind(':notes', $_POST['notes']);


if($db->execute()){
	echo "Vendor was added";
} else {
	echo "Could not add Vendor";
}
?>