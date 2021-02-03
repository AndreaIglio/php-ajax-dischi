import Vue from 'vue';

let app = new Vue({

el: '#root',
data:{

albumsList: '',
},
methods: {
    
},

mounted() {
    const axios = require('axios');
    axios.get(
        './partials_php/db.php'
    ).then(response => {
    
        // console.log(response);
        this.albumsList = response.data.response;
        console.log(this.albumsList);
    }).catch((err) => {
        console.log(err);
    });
},

})