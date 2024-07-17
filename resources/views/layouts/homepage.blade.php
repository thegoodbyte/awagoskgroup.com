@include('partials.head')

<body>
<!--PRELOADER-->
<div class="prague-loader">
    <div class="prague-loader-wrapper">
        <div class="prague-loader-bar">
            AWA Gosk Group
        </div>
    </div>
</div>
<!--/PRELOADER-->
@include('partials.header')

<!--MAIN BODY-->





@yield('content')




<!--/MAIN BODY-->
@include('partials.footer')

<script src="js/jquery.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/hammer.min.js"></script>
<script src="js/foxlazy.min.js"></script>
<script src="js/all.js"></script>

</body>

</html>
