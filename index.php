<?php
  $data = file_get_contents("Example.jpg");

  $array = array(); 
  foreach(str_split($data) as $char){ 
      array_push($array, ord($char)); 
  }
  var_dump(implode(' ', $array));
