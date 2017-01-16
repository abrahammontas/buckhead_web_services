var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

        .styles([

            <!-- Compiled in vendors.js -->
            // <link href="assets/css/bootstrap.min.css" rel="stylesheet">
            // <link href="assets/css/bootstrap-switch.min.css" rel="stylesheet">
            // <link href="assets/css/font-awesome.min.css" rel="stylesheet">
            // <link href="assets/css/animate.min.css" rel="stylesheet">
            // <link href="assets/css/slidebars.min.css" rel="stylesheet">
            // <link href="assets/css/lightbox.css" rel="stylesheet">
            // <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
            // <link href="assets/css/buttons.css" rel="stylesheet">

            'vendors.css'

        ], 'public/assets/css/vendors.css')

        .scripts([

            <!-- Compiled in vendors.js -->
            // <script src="assets/js/jquery.min.js"></script>
            // <script src="assets/js/jquery.cookie.js"></script>
            // <script src="assets/js/imagesloaded.pkgd.min.js"></script>
            // <script src="assets/js/bootstrap.min.js"></script>
            // <script src="assets/js/bootstrap-switch.min.js"></script>
            // <script src="assets/js/wow.min.js"></script>
            // <script src="assets/js/slidebars.min.js"></script>
            // <script src="assets/js/jquery.bxslider.min.js"></script>
            // <script src="assets/js/holder.js"></script>
            // <script src="assets/js/buttons.js"></script>
            // <script src="assets/js/jquery.mixitup.min.js"></script>
            // <script src="assets/js/circles.min.js"></script>
            // <script src="assets/js/masonry.pkgd.min.js"></script>
            // <script src="assets/js/jquery.matchHeight-min.js"></script>

            'vendors.js'

        ], 'public/assets/js/vendors.js')

});

