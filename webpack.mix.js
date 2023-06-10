const mix = require("laravel-mix");

mix.setPublicPath("../../public");

mix.js("Resources/assets/js/app.js", "js/admin.min.js")
    .sass("Resources/assets/sass/app.scss", "css/admin.min.css")
    .version();

mix.copyDirectory("Resources/images", "../../public/images");
