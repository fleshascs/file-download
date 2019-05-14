<?php
 $file = '';
  switch ($_GET['type']) {
    case 'pdf':
       $file = 'sample.pdf';
       break;
    case 'zip':
       $file = '10MB.zip';
       break;
    default:
       $file = 'Example.jpg';
  }

  header('Content-Disposition: attachment; filename="'.$file.'"');
  readfile($file);
/*
  $data = file_get_contents($file);
  $array = array(); 
  foreach(str_split($data) as $char){ 
      array_push($array, ord($char)); 
  }
  var_dump(implode(' ', $array));
 */
