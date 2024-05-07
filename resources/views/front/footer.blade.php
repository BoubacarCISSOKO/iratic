 <!-- Start Footer -->
 <style>
    .border-wdernier{
        border-radius: 1px !important;
        /* border-top: 1px solid #FFF !important; */
    }
 </style>
<footer class="bg-dark mt-2" id="tempaltemo_footer" style="background: #3d4045!important">
        <div class="container">
            <div class="row">
 
            <div class="col-md-4 pt-3">
                    <h2 class="h2 text-light border-bottom pb-3 border-white">A PROPOS</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <a class="text-decoration-none" href="#">DSD</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="#">Nos Services</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-3">
                    <h2 class="h2 text-light border-bottom pb-3 border-white">NOUS CONTACTER</h2>
                    <ul class="list-unstyled text-light footer-link-list">

                        <i class="fas fa-map-marker-alt fa-fw"></i>
                            <a class="text-decoration-none" href="#">Paris, France</a>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="#">+221 77 040 49 87
                        / +33 6 03 33 06 64 </a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="#">dsd2024@gmail.com</a>
                        </li>
                        <li>
                       
                    </ul>
                </div>


                <div class="col-md-4 pt-3">
                    <h2 class="h2 text-light border-bottom pb-3 border-white">Suivez-nous!</h2>
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/IraticOfficiel"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/setsall"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/in/cabinet-iratic-a428b51aa/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4" style="text-align: center;">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-white"></div>
                </div>
                <div class="col-md-12 col-lg-12">
                        <ul id="breadcrumb">
                           
                            <li>
                            @guest
                                    <li class="nav-item dropdown">
                                        <a id="" style="color:white; text-decoration:none; font-weight: bold;"  href="{{ route('login') }}">
                                            <i class="fa fa-user"  style="font-size: 10px; color: #000;margin-right: 15px; !important"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" style="text-decoration:none; font-weight: bold;margin-right: 25px; !important" class="navbarDarkDropdownMenuLink dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
            
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink" style="background-color:#1d242d"  >
                                            <a class="dropdown-item link-1"style="background:white !important; color:#000 !important;"  href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </li>
                           
                            <li><a href="{{route('cotisation.index')}}"><i class="fa fa-info-circle"></i> Ma Cotisation</a></li>
                        </ul>
                </div>
            </div>
        </div>

        <div class="w-100 border-wdernier" style="background: #1d242d!important;">
            <div class="container">
                <div class="row pt-1">
                    <div class="col-12 text-center">
                        <marquee behavior="" direction="top" style="font-size: 20px; color: #FFF">
                           Dembancane Solidarite Development © 2023, réalisé avec <i class="fa fa-heart mx-2" style="color:red;"></i> par l'Eiquipe Tech - Tous droits réservés. 
                        </marquee>
                    </div>
                </div>
            </div>
        </div>

</footer>
<!-- End Footer -->

