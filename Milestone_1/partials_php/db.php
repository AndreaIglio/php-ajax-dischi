<?php

   //Rest API   array of object

  $response = file_get_contents('https://flynn.boolean.careers/exercises/api/array/music');


   //Our albums PHP array from decoding json array of object
   $albums = json_decode($response, true);

   // var_dump($albums);

?>