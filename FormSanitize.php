<?php
namespace is218\section101\utils;

class FormSanitize
{
	function emailCheck($email)
	{
		
			$emailTemp = filter_var($email, FILTER_SANITIZE_EMAIL);
			if($emailTemp != $email)
			{
				return "invalid";
			}
			else return "valid";
			
	}
	
	function nameCheck($name){

			$nTemp = filter_var($name, FILTER_SANITIZE_STRING);
			if($nTemp != $name)
			{
				echo "Please Enter a Valid Name";
				echo "<br/><br/>";
			}

	}
	
	function emailSan($email)
	{
		
			return filter_var($email, FILTER_SANITIZE_EMAIL);
	}
	
	function nameSan($name)
	{
		if (isset($name)) 
		{
			echo filter_var($name, FILTER_SANITIZE_STRING);
		}
	}
}
?>
