<!doctype html>
<html lang="en">
<head>
<title>IRATIC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css')}}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{url('assets/css/fontawesome.min.css')}}">

      <!-- <font-family></font-family> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


    <!-- responsive slider animation -->
    <link rel="stylesheet" href="{{ url('_css/responsive-layered-slider.css') }}">

    <script src="{{url('_scripts/jquery-2.0.2.min.js')}}"></script>
    <script src="{{url('_scripts/jquery-ui-1.10.4.min.js')}}"></script>
    <script src="{{url('_scripts/responsive-layered-slider.js')}}"></script>

    <!-- animation -->
    <link rel="stylesheet" href="{{ url('animation/_css/animations.css') }}">
    <link rel="stylesheet" href="{{ url('animation/_css/main.css') }}">

</head>

<style>
    .position-relative{
        
        border-bottom-right-radius: 15px;
        background-color: #92959a;
    }
    .gbc-image{
        width: 100%;
        height: 250px;
    }
    .gbc-image2{
        width: 100%;
        height: 90px;
    }
    .services-icon-wap shadow{
        background-color: #FFF !important;
    }
    
    .card1{
        
        border-top-color: 15px #0358c0 !important ;
        border-radius: 15px !important;
    }


    /* ============ only desktop view ============ */
		@media all and (min-width: 992px) {
			.navbar .nav-item .dropdown-menu {
				display: block;
				opacity: 0;
				visibility: hidden;
				transition: .3s;
				margin-top: 0;
			}

			.navbar .nav-item:hover .nav-link {
				color: #fff;
			}

			.navbar .dropdown-menu.fade-down {
				top: 80%;
				transform: rotateX(-75deg);
				transform-origin: 0% 0%;
			}

			.navbar .dropdown-menu.fade-up {
				top: 180%;
			}

			.navbar .nav-item:hover .dropdown-menu {
				transition: .3s;
				opacity: 1;
				visibility: visible;
				top: 100%;
				transform: rotateX(0deg);
			}
		}

		/* ============ desktop view .end// ============ */



.link-1 {
  transition: 0.4s;
  text-decoration: none;
  margin: 3px;
}
.link-1:hover {
    background-color: #039fe0;
    color: #FFF !important;
    margin: 3px;
}

.border1{
    border-radius: 8px;
  border-bottom: 10px solid #0358c0;
}
   
</style>
<style>
    .btn:hover {
      color: #FFF;
      background: #FFF !important;
      border-color: #FFF;
    }

    /* voir plus */
#hashLink {
    display: none;
}

#hashLink:target {
    display: block;
}

#hashLink1 {
    display: none;
}

#hashLink1:target {
    display: block;
}

#hashLink2 {
    display: none;
}

#hashLink2:target {
    display: block;
}



#breadcrumb {
    list-style: none;
    display: inline-block;
}

#breadcrumb .fa {
    font-size: 14px;
}

#breadcrumb li {
    float: left;
}

#breadcrumb li a {
    color: #0358c0 ;
    display: block;
    background: #FFF;
    text-decoration: none;
    position: relative;
    height: 40px;
    line-height: 40px;
    padding: 0 10px 0 5px;
    text-align: center;
    margin-right: 23px;
    margin-top: 10px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
}

#breadcrumb li:nth-child(even) a {
    background-color: #FFF;
}

#breadcrumb li:nth-child(even) a:before {
    border-color: #FFF;
    border-left-color: transparent;

}

#breadcrumb li:nth-child(even) a:after {
    border-left-color: #FFF;
}

#breadcrumb li:first-child a {
    padding-left: 15px;
    -moz-border-radius: 4px 0 0 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px 0 0 4px;
}

#breadcrumb li:first-child a:before {
    border: none;
}

#breadcrumb li:last-child a {
    padding-right: 15px;
    -moz-border-radius: 0 4px 4px 0;
    -webkit-border-radius: 0;
    border-radius: 0 4px 4px 0;
}

#breadcrumb li:last-child a:after {
    border: none;
}

#breadcrumb li a:before,
#breadcrumb li a:after {
    content: "";
    position: absolute;
    top: 0;
    border: 0 solid #FFF;
    border-width: 20px 10px;
    width: 0;
    height: 0;
}

#breadcrumb li a:before {
    left: -20px;
    border-left-color: transparent;
}

#breadcrumb li a:after {
    left: 100%;
    border-color: transparent;
    border-left-color: #FFF;
}

#breadcrumb li a:hover {
    background-color: #0358c0;
}

#breadcrumb li a:hover:before {
    border-color: #FFF;
    border-left-color:#FFF;
}

#breadcrumb li a:hover:after {
    border-left-color:#FFF;
}

#breadcrumb li a:active {
    background-color: #0358c0;
}

#breadcrumb li a:active:before {
    border-color: #FFF;
    border-left-color:#FFF;
}

#breadcrumb li a:active:after {
    border-left-color:#FFF;
}

    a{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
    }
    p{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
    }
    h1,h2,h3{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
        font-weight: bold !important;
        text-transform: uppercase;
    }

</style>
  <body style="background-color:#f3f3f3">
    @include('front.navbar')

    
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    @include('front.footer')

    <!-- Option 1: Bootstrap Bundle with Popper -->
     <!-- Start Script -->
    <script src="{{url('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{url('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/templatemo.js')}}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <!-- End Script -->
  </body>
</html>

