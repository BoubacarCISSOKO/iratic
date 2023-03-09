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
<!--
    

-->
</head>

<style>
    .btn:hover {
      color: #212934;
      background: #212934 !important;
      border-color: #212934;
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
    color: #bac9e7;
    display: block;
    background: #212934;
    text-decoration: none;
    position: relative;
    height: 40px;
    line-height: 40px;
    padding: 0 10px 0 5px;
    text-align: center;
    margin-right: 23px;
    margin-top: 10px
}

#breadcrumb li:nth-child(even) a {
    background-color: #212934;
}

#breadcrumb li:nth-child(even) a:before {
    border-color: #212934;
    border-left-color: transparent;

}

#breadcrumb li:nth-child(even) a:after {
    border-left-color: #212934;
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
    border: 0 solid #212934;
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
    border-left-color: #212934;
}

#breadcrumb li a:hover {
    background-color: #404040;
}

#breadcrumb li a:hover:before {
    border-color: #212934;
    border-left-color:#212934;
}

#breadcrumb li a:hover:after {
    border-left-color:#212934;
}

#breadcrumb li a:active {
    background-color: #404040;
}

#breadcrumb li a:active:before {
    border-color: #212934;
    border-left-color:#212934;
}

#breadcrumb li a:active:after {
    border-left-color:#212934;
}



/* GALERIE */



p.desc {
    z-index: 999;
    position: absolute;
    top: 10px;
    padding: 10px;
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

