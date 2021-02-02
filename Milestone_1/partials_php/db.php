<?php

   //Rest API   array of object

  $response = file_get_contents('https://flynn.boolean.careers/exercises/api/array/music');


   //Our movies PHP array from decoding json array of object
   $movies = json_decode($response, true);

   // var_dump($movies);

   foreach ($movies as $key => $value) {
      // var_dump($value);
      foreach ($value as $key => $listmovie) {
         var_dump($listmovie);
      }
   }
?>



