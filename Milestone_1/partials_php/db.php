<?php

   //Rest API   array of object

  $response = file_get_contents('https://flynn.boolean.careers/exercises/api/array/music');


   //Our movies PHP array from decoding json array of object
   $movies = json_decode($response, true);

   // var_dump($movies);

   foreach ($movies as $key => $value) {
      // var_dump($value);
      foreach ($value as $key => $listmovie) {
         // var_dump($listmovie);
      }
   }
?>

<!-- 

array (size=5)
  'poster' => string 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg' (length=59)
  'title' => string 'Bad' (length=3)
  'author' => string 'Michael Jacjson' (length=15)
  'genre' => string 'Pop' (length=3)
  'year' => string '1987' (length=4) -->