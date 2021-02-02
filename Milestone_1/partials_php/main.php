<main id="root">

 <div class="container flex movie">
    <?php 

       foreach ($albums as $key => $value) {
      // var_dump($value);
      foreach ($value as $key => $listalbum) { ?>
         
         <div class="movie_card flex column">
         <img src="<?php echo $listalbum['poster'] ?>" style="width:200px" alt="">
         <h3><?php echo $listalbum['title']; ?></h3>
         <h4><?php echo $listalbum['author'] ?></h4>
         <h5><?php echo $listalbum['year']?> </h5>
         
         </div>

      <?php }
   }
    
    
    ?>
 </div>
</main>