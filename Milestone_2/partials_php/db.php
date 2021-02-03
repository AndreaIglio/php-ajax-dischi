<?php

   //Rest API   array of object

  $response = file_get_contents('https://flynn.boolean.careers/exercises/api/array/music');

  
   
   header('Content-Type: application/json');

   echo $response;

?>