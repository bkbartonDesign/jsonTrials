<?php
	error_reporting(E_ALL);
  
//  print_r($_POST);
  $json = $_POST;
	print_r($json);

	
   if ($json != "") { /* sanity check */     
	 echo "success";     
     $fileContents = file_get_contents('data.json');
     $data = json_decode($fileContents);
     unset($fileContents);

 //    var_dump($data);
     
     $merged = array_merge((array)$data, (array)$json);

//	 print_r($merged);
     file_put_contents('data.json',json_encode($merged));
//    var_dump($data);
     unset($data);     
   } 
   else {
   	
   		echo "error";
     // handle error 
   }
?>
