<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("DELETE FROM `customers` WHERE id = :id");

//Bind Values
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Customer was deleted";
} else {
	echo "Could not delete customer";
}


?>
