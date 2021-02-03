<main id="root">

<div class="artist_select container flex">
    <label for="">Choose an artist :</label>
    <select name="authors" id="authors" @change="change()" v-model='initValue'>
        
    <option v-for="(author, index) in authorList" :key="index">{{author}}</option>
        
    </select>
</div>


 <div class="container flex movie">
    
    <div class="movie_card flex column" v-for="(album, index) in albumsList" :key="index" v-if="album.author == initValue || initValue == 'All'">
        <img :src="album.poster" style="width:200px" alt="">
        <h3>{{album.title}}</h3>
        <h4>{{album.author}}</h4>
        <h5>{{album.year}}</h5>

    </div>



 </div>
</main>