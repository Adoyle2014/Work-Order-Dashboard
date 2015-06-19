<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("DELETE FROM `vendors` WHERE id = :id");

//Bind Values
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Vender was deleted";
} else {
	echo "Could not delete vender";
}
?>