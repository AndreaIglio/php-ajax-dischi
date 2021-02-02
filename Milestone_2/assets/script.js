import Vue from 'vue';

let app = new Vue({

el: '#root',
data:{

},
methods: {
    
},

mounted() {
    const axios = require('axios');
    axios.get(
        'partials_php/db.php'
    ).then((result) => {
     console.log(result.data.response);   
    }).catch((err) => {
        console.log(err);
    });
},

})