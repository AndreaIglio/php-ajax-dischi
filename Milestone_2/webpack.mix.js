const mix = require("laravel-mix");

mix
.js("./assets/script.js", "js").vue({ version: 2 })
.sass("./assets/style.scss", "css")
.setPublicPath("dist");
