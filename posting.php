<?php
	error_reporting(E_ALL);
  if(isset($_POST)){echo "posted";}
  else {echo "not posted";}
  
//  print_r($_POST);
  $json = $_POST;
	echo $json;
//	$json = '{"four":"4 / four"}';
	
   if ($json != "") { /* sanity check */

//     $json = json_decode($json);     
     
	 echo "success";
     
     $fileContents = file_get_contents('data.json');
     $data = json_decode($fileContents);
     unset($fileContents);

 //    var_dump($data);
     
     $merged = array_merge((array)$data, (array)$json);

	 print_r($merged);
     file_put_contents('data.json',json_encode($merged));
     var_dump($data);
     unset($data);     
   } 
   else {
   	
   		echo "error";
     // handle error 
   }
?>
