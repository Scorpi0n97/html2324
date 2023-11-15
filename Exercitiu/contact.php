<?php
	$nume = $_POST['nume'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	if (empty($nume)) {
		echo "Completati campul nume";
	} elseif (empty($email)) {
		echo "Completati campul email"; 
	} elseif (empty($phone)) {
		echo "Completati campul phone";
	} else {
		echo $nume;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $phone;
	}

?>