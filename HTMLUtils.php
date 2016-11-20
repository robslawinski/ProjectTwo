<?php
namespace is218\section101\utils;
class HTMLUtils
{
	
      function toHTML($ray)
      {
      $tableString = "<table>";
	      for ($row = 0; $row < count($ray); $row++) 
	      {
	      	
	      		$tableString .= "<tr>";
	      	
	      	for ($col = 0; $col < count($ray[$row]); $col++) {
	      		if ($row = 0)
	      		{
	      			$tableString .= "<th>" . $ray[$row][$col] . "</th>";
	      		}
	      		else
	      		{
	      			$tableString .= "<td>" . $ray[$row][$col] . "</td>";
	      		}
	      	}
	      	$tableString .= "</tr>";
	      }
	      $tableString .= "</table>";
      	echo $tableString;
      }
 
      function toHTML2( $ray )
      {
      	$tableString = "<table>";
 			
      	foreach($ray as $row) {
      		$tableString .= "<tr>";
      		foreach($row as $col)
      		{
      			$tableString .= "<td>" .$col. "</td>";
      		}
      		$tableString .= "</tr>";
      	}
      	
      	$tableString .= "</table>";
      	echo $tableString;
      }
      
      
      function readCSVtoArray($csvFile){
      	$file_handle = fopen($csvFile, 'r');
      	while (!feof($file_handle) ) {
      		$line_of_text[] = fgetcsv($file_handle, 1024);
      	}
      	fclose($file_handle);
      	return $line_of_text;
      }
   
}
	

?>
