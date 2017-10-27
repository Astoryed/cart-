<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Project</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/cart.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" >

    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.1.1.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>


</head>

<body>

<!--/* HEADER */-->
<section>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <!--Hidden Button for media classes-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            <a id="logo" class="navbar-brand" href="#"><img height="50" src="img/motorola-logo.png"></a>

            <div id="myNavbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="{{route('start')}}">HOME</a></li>
                    <li><a href="{{route('about')}}">ABOUT</a></li>
                    <li><a href="{{route('products')}}">PRODUCTS</a></li>
                    <li><a href="#">NEW ARRIVALS</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                </ul><!--end navbar-right-->
            </div><!--end myNavbar-->
        </div><!--end container-->
    </nav><!--end complete navbar-->
</section>

@yield('content')

<!-- Footer -->
<footer>
    <div id="sec">
        <h2><b>Products</b></h2>
        <a>Moto Mods</a><br>
        <a>Moto Z Family</a><br>
        <a>Moto G Family</a><br>
        <a>Moto E Family</a><br>
        <a>All Moto phones</a><br>
        <a>Cases & shells</a><br>
        <a>Chargers</a><br>
    </div>

    <div id="sec">
        <h2><b>Motorola Home</b></h2>
        <a>Baby monitors</a><br>
        <a>Bluetooth headsets</a><br>
        <a>Car speakerphones</a><br>
        <a>Home monitors</a><br>
        <a>Home & office phones</a><br>
        <a>Modems & gateways</a><br>
        <a>Pet monitors & training</a><br>
        <a>Power & charging</a><br>
        <a>Wireless headphones</a><br>
        <a>All Motorola Home products</a><br>
    </div>

    <div id="sec">
        <h2><b>Support</b></h2>
        <a>Product support</a><br>
        <a>Forums</a><br>
        <a>Contact us</a><br>
        <a>Developer resources</a><br>
        <a>Affiliate program</a><br>
        <a>Financing</a><br>
    </div>
    <div id="sec">
        <h2><b>About</b></h2>
        <a>Motorola</a><br>
        <a>Lenovo</a><br>
        <a>Responsibility</a><br>
        <a>Environment</a><br>
        <a>Recycling</a><br>
        <a>News</a><br>
        <a>Careers</a><br>
        <a>Privacy & Legal</a><br>
        <a>Executive team</a><br>
        <a>Foundation</a><br>
        <a>Get updates</a><br>
    </div><br><br><br><br>

    <div id="terms">
        <div id="terms-1" class="col-lg-6">

            <img height="30" src="img/flag.png"> <span style="color: white"> USA  |  Change Location</span><br><br><br>

            <img height="50" src="img/footer-logo.png"><br><br>
            <p>© 2017 Motorola Mobility LLC. All Rights Reserved</p>

            <p>MOTOROLA and the Stylized M Logo are registered trademarks of Motorola Trademark Holdings, LLC</p>

            <p>All mobile phones are designed and manufactured by Motorola Mobility LLC, a wholly owned subsidiary of Lenovo.</p>

            <p>Android, Google, Google Play, Nexus and other marks are trademarks of Google Inc.
                The Android robot is reproduced or modified from work created and shared by Google
                and used according to terms described in the Creative Commons 3.0 Attribution License.</p>

        </div>
        <div id="terms-2"  class="col-lg-6"><br><br><br>
            <p>* All battery life claims are approximate and based on a standard mixed use profile.
                The mixed use profile is based on Motorola devices on major 4G LTE networks with excellent coverage
                and includes both usage and standby time. Out-of-box settings are applied to the mixed use profile
                to project battery performance. Actual battery performance will vary and depends on many factors
                including signal strength, network configuration, age of battery, operating temperature,
                features selected, device settings, and voice, data, and other application usage patterns.</p>

            <p>† Buy a new Moto Z2 Force Edition from authorized resellers between July 25, 2017 - September 9, 2017
                and receive a free Moto Insta-Share Projector Moto Mod™ by mail. Limit one Moto Mod™ per Moto Z2
                Force edition purchased. Redemption is available online only.
                May not be combined with any other Motorola promotional offers. Offer subject to additional
                Terms and Conditions, click here for details.</p>

            <p>‡ To redeem, add a Moto Z² Play unlocked ($499.99) and a JBL SoundBoost | Speaker Moto Mod
                (a $79.99 value) or a JBL SoundBoost 2 Moto Mod (a $79.99 value) to your cart between July 25, 2017
                and Aug. 19, 2017, and the Moto Mod will be free at checkout.
                Not valid on Moto Z² Play Verizon exclusive ($408.00). May not be combined with other Motorola.com
                promotional offers. Subject to product availability. Subject to additional terms and conditions.</p>

            <p>** Advanced nanocoating technology creates a water-repellent barrier to help protect against
                moderate exposure to water such as accidental spills, splashes, or light rain. Not designed
                to be submersed in water, or exposed to pressurized water, or other liquids. Not waterproof.</p>

            <p>All sales and promotions subject to product availability.</p>

            <p>All specials and services, including Moto Care, may not be available for all products.</p>

        </div>

    </div>

</footer>

<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items:1,
            loop:true,
            navigation : false,
            margin:20,
            autoplay:true,
            autoplayTimeout:2000
        });
    });

    $( "#hide1" ).click(function() {
        $('.image1').css('display','none');
        $( ".overlay1" ).slideToggle();
    });

    $(".overlay1" ).click(function() {
        $('.image1').slideToggle();
    });

    $( "#hide2" ).click(function() {
        $('.image2').css('display','none');
        $( ".overlay2" ).slideToggle();
    });

    $( ".overlay2" ).click(function() {
        $('.image2').slideToggle();
    });

    $( "#hide3" ).click(function() {
        $('.image3').css('display','none');
        $( ".overlay3" ).slideToggle();
    });

    $( ".overlay3" ).click(function() {
        $('.image3').slideToggle();
    });


    function doBounce(element, times, distance, speed) {
        for(i = 0; i < times; i++) {
            element.animate({marginTop: '-='+distance},speed)
                    .animate({marginTop: '+='+distance},speed);
        }
    }
</script>


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>


</body>

</html>