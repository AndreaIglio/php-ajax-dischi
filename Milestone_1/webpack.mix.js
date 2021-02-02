const mix = require("laravel-mix");

mix
.js("./assets/script.js", "js")
.sass("./assets/style.scss", "css")
.setPublicPath("dist");
