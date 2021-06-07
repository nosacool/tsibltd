<!DOCTYPE html>
<html lang="zxx">
    <head>
        @include('partials.head')

    </head>

    <body class="hide-rtl">
        <div id="wrapper">
            @include('partials.topbar')
            @include('partials.flash_message')
            <!-- header begin -->
       <x-navigation></x-navigation>
            <!-- header close -->
            <!-- content begin -->
        <x-quote-modal></x-quote-modal>
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
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/602ab1c0918aa261273f1a6a/1eujccn1e';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
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
