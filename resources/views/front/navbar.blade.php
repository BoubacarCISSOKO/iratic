  <style>
    @media only screen and (max-width: 1000px) {
        .gbc{
            margin-top:0px !important;
        }

        .sim-slider{
            margin-top:25px !important;
            margin-bottom: 20px !important;
        }

        .img-fluid{
        width: 100%;
        height: 230px !important;
        }

    };
    .navbar-nav{
        text-align: left !important;
    }

    .gradient-text {
        background-color: blue;

        background-image: linear-gradient(45deg, #FFF, red);
        background-size: 100%;
        background-repeat: repeat;
        /* Utilise le texte comme masque pour l'arrière-plan. */
        /* Cela affichera le dégradé sous forme de couleur de texte plutôt que d'élément bg. */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; 
        -moz-background-clip: text;
        -moz-text-fill-color: transparent;
}
    .test:hover {
        color: #2d266c !important;
    }
    .tests:hover{
        background-color: #0358c0 !important;
    }

    .testlog:hover {
        color: #2d266c !important;
        background-color: #0358c0 !important;
    }

  </style>
  <!-- Start Top Nav -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block fixed-top" id="templatemo_nav_top"
        style="background:#039fe0!important">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="mailto:iratic@iratic.org" style="font-size: 20px; color: #FFF;">iratic@iratic.org</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:77 455 34 82" style="font-size: 20px; color: #FFF;"> +221 77 455 34 82 / +221 78 187 49 11</a>
                </div>

                <!-- <div>
                    <a class="navbar-sm-brand text-light text-decoration-none gradient-text" href="#">
                    Vous êtes acheteur ? Découvrez notre choix en maisons, appartements et terrains sur notre site.
                    </a>

                </div> -->

              
                <div class="col-auto text-right">
                    <ul class="list-inline footer-icons">
                        <li class="list-inline-item text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-fw" style="font-size:12px !important"></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg" style="font-size:12px !important"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg" style="font-size:12px !important"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg" style="font-size:12px !important"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn text-white btn-sm testlog" style="background:#0358c0" href="{{ route('login') }}">Se connecter</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn text-white btn-sm testlog" style="background:#0358c0" href="{{ route('register') }}">S'inscrire</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top mb-15 gbc" style="margin-top: 35px;color: #0358c0;">
        <div class=" container">
            <a aria-current="page" href="{{route('home')}}"
                style="color: #0358c0">
                <img src="{{url('images/logo iratic.png')}}" width="40px" height="45px" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="background-color:#0358c0;border: 1px solid #0358c0;"><span class="navbar-toggler-icon" ></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active test" aria-current="page" href="{{route('home')}}"
                            style="color: #0358c0">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link test" href="#!" style="color: #0358c0">MIP</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0358c0;">
                            APLI
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item test" href="#about-us" style="color: #0358c0;">Apercu</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Projets</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Pays/Inst hotes </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Partenaires</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle test" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0358c0;">
                            PAP
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Apercu</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Offre</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Uni/Inst/Entr</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Partenaires</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle test" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0358c0;">
                            LCH
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Apercu</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Projets</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Vil/Coll hotes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #0358c0;">Partenaires</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link test" href="#!" style="color: #0358c0">Ressources</a></li>
                    <li class="nav-item"><a class="nav-link test" href="{{route('contact')}}" style="color: #0358c0">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>