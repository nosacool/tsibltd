<!DOCTYPE html>
<html lang="zxx">
    <head>
        @include('partials.head')

    </head>

    <body class="hide-rtl">
        <div id="wrapper">
            @include('partials.topbar')

            <!-- header begin -->
            @include('partials.header')
            <!-- header close -->
            <!-- content begin -->
            @yield('content')
            <!-- content close -->

            <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
           @include('partials.footer')
            <!-- footer close -->


        </div>



        <!-- Javascript Files
    ================================================== -->
        @include('partials.javascript')
    <script>
    jQuery(document).ready(function() {
        // revolution slider
        jQuery("#slider-revolution").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true
                },
                bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "hermes",
                    hide_onleave: true,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 20,
                    v_offset: 30,
                    space: 5,
                },

            },
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            },
            responsiveLevels: [1920, 1380, 1240],
            gridwidth: [1200, 1200, 940],
            spinner: "off",
            gridheight: 700,
            disableProgressBar: "on"
        });
    });
    </script>

    </body>
</html>
