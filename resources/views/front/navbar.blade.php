  <style>
    @media only screen and (max-width: 1000px) {
        .gbc{
            margin-top:0px !important;
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

  </style>
  <!-- Start Top Nav -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block fixed-top" id="templatemo_nav_top"
        style="background:#041135 !important">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="mailto:info@company.com">iratic@iratic.org</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340"> +221 77 455 34 82 / +221 78 187 49 11</a>
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
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top mb-15 gbc" style="margin-top: 35px;color: #041135;">
        <div class=" container">
            <a aria-current="page" href="{{route('home')}}"
                style="color: #041135">
                <img src="{{url('images/log bleu.png')}}" width="50px" height="30px" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="background-color:#041135;border: 1px solid #041135;"><span class="navbar-toggler-icon" ></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}"
                            style="color: #041135">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" style="color: #041135">MIP</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #18959f;">
                            APLI
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #18959f;">Contexte</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #18959f;">Presentation</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#about-us" style="color: #18959f;">Orientations</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#!" style="color: #041135">PAP</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" style="color: #041135">LCH</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" style="color: #041135">Ressources</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}" style="color: #041135">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>