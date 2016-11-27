<?php 
use is218\section101\utils as Everything;

require_once('FileUpload.php');

$file = $_FILES["myFile"];
	$fu = new Everything\FileUpload();
	$fu->sendFile($file);
	?>