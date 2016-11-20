<?php
namespace is218\section101\utils;



class FileUpload
{
	
	
	function sendFile($myFile)
	{
		try 
		{
				define("UPLOAD_DIR", "/afs/cad.njit.edu/u/r/j/rjs59/public_html/ProjectTwo/pictures/");
			if (!empty($_FILES["myFile"]))
			{
				$myFile = $_FILES["myFile"];
			
				if ($myFile["error"] !== UPLOAD_ERR_OK) {
					echo "<p>An error occurred.</p>";
					exit;
				}
			
				// ensure a safe filename
				$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
			
				// don't overwrite an existing file
				$i = 0;
				$parts = pathinfo($name);
				while (file_exists(UPLOAD_DIR . $name)) {
					$i++;
					$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
				}
			
				// preserve file from temporary directory
				$success = move_uploaded_file($myFile["tmp_name"],
						UPLOAD_DIR . $name);
				if (!$success) {
					echo "<p>Unable to save file.</p>";
					exit;
				}
				else
				{
					echo "<p>File Uploaded</p>";
				}
			
				// set proper permissions on the new file
				chmod(UPLOAD_DIR . $name, 0644);
				
			}
		}
		catch(Exception $e)
		{
			echo "<p>Exception: </p>",  $e->getMessage(), "<br/>";
		}	
	}
}
?>
