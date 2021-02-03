import Vue from 'vue';

let app = new Vue({

el: '#root',
data:{

initValue: 'All',
albumsList: '',
authorList: ['All'],
},
methods: {
    
},

mounted() {
    const axios = require('axios');
    axios.get(
        './partials_php/db.php'
    ).then(response => {
    
        this.albumsList = response.data.response;

        console.log(this.albumsList);

        this.albumsList.forEach(element => {
            this.authorList.push(element.author);
        });

    }).catch((err) => {
        console.log(err);
    });

    
},

})