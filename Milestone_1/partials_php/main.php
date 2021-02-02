<main id="root">

 <div class="container flex movie">
    <?php 

       foreach ($movies as $key => $value) {
      // var_dump($value);
      foreach ($value as $key => $listmovie) { ?>
         
         <div class="movie_card flex column">
         <h3><?php echo $listmovie['title']; ?></h3>
         <h4><?php echo $listmovie['author'] ?></h4>
         <h5><?php echo $listmovie['year']?> </h5>
         
         </div>

      <?php }
   }
    
    
    ?>
 </div>
</main>