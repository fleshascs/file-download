<?php
  $filePath = '';
  switch ($_GET['type']) {
    case 'pdf':
       $filePath = 'sample.pdf';
       break;
    case 'zip':
       $filePath = '10MB.zip';
       break;
    default:
       $filePath = 'Example.jpg';
  }

  $data = file_get_contents($filePath);

  $array = array(); 
  foreach(str_split($data) as $char){ 
      array_push($array, ord($char)); 
  }
  var_dump(implode(' ', $array));
