
<html>
<body>
<h1>
PHP assignment 1</h1>

<?php
	use is218\section101\utils as Everything;
	
	//require_once('HTMLUtils.php');
	//require_once('FormSanitize.php');
	

	function __autoload($class)
	{
		$parts = explode('\\', $class);
		require end($parts) . '.php';
	}
	
	$cars = array
	(
			array("Name","Stock","Sold","Year"),
			array("Volvo",22,18,2012),
			array("BMW",15,13,1986),
			array("Saab",5,2,2000),
			array("Land Rover",17,15,1978)
	);
	
	
	
	$obj = new Everything\HTMLUtils();
	$obj->toHTML2($cars);
	
	//
	//
	// Set path to CSV file
	echo '<br/><br/><u>Test with CSV file</u><br/>';
	$csvFile = 'data/cars.csv';
	$csvArray = $obj->readCSVtoArray($csvFile);
	$obj->toHTML2($csvArray);
	
	
	//
	//
	// Test Email Santization
	echo '<br/><br/><u>Test Email Sanitization</u><br/>';
	$sanitize = new Everything\FormSanitize();
	echo $sanitize->emailSan('<h1> rslawinski </h1>');
	echo '<br/>';
	echo $sanitize->emailCheck('<h1> rslawinski </h1>');
	echo '<br/><br/>';
	echo $sanitize->emailSan('rjs59@njit.edu');
	echo '<br/>';
	echo $sanitize->emailCheck('rjs59@njit.edu');
	
	
	echo '<form action="https://web.njit.edu/~rjs59/ProjectTwo/Upload2.php" method="post" enctype="multipart/form-data"> ';
	echo '<input type="file" name="myFile">';
	echo '<br>';
	echo '<input type="submit" value="Upload">';
	echo '</form>';
?>
</body>
</html>
