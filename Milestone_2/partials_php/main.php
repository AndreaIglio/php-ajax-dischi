<main id="root">

 <div class="container flex movie">
  

    <div class="movie_card flex column" v-for="(album, index) in albumsList" :key="index">

        <img :src="album.poster" style="width:200px" alt="">
        <h3>{{album.title}}</h3>
        <h4>{{album.author}}</h4>
        <h5>{{album.year}}</h5>

    </div>



 </div>
</main>