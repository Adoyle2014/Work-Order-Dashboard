<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("UPDATE `customers` SET 
			business_name 		= :business_name,
			address1 		= :address1,
			address2 		= :address2,
			city		 	= :city,
			state 			= :state,
			zip			= :zip,
			business_phone		= :business_phone,
			contact_name 		= :contact_name,
			contact_phone 		= :contact_phone,
			contact_email 		= :contact_email,
			notes 			= :notes
			WHERE id = :id
			");

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
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Customer was updated";
} else {
	echo "Could not update customer";
}
?>