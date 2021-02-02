<?php

   //Json formatted array of object

  $response = file_get_contents('https://flynn.boolean.careers/exercises/api/array/music');


   //Our movies PHP array from decoding json array of object
   $movies = json_decode($response);

   var_dump($movies);
?>



