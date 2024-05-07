<style>
    @media only screen and (max-width: 1000px) {
        .gbc{
            margin-top:40px !important;
        }

        .sim-slider{
            margin-top:25px !important;
            margin-bottom: 20px !important;
        }

        .img-fluid{
        width: 100%;
        height: 230px !important;
        }

        .onglet{
                margin-top:105px !important;
            }
            .imgdg{
             width: 150px !important;
            height: 150px !important;
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
        color: #1d242d !important;
    }
    .tests:hover{
        background-color: #1d242d !important;
    }

    .testlog:hover {
        color: #1d242d !important;
        background-color: #1d242d !important;
    }

</style>

    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top mb-15 gbc" style="margin-top: 35px;color: #1d242d;">
        <div class=" container">
            <a aria-current="page" href="{{route('home')}}"
                style="color: #1d242d">
                <img src="{{url('_assets/1.png')}}" width="40px" height="35px" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="background-color:#1d242d;border: 1px solid #1d242d;"><span class="navbar-toggler-icon" ></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item link-1"><a class="nav-link link-1" href="{{route('home')}}" style="color: #1d242d">Accueil</a></li> 
                    <li class="nav-item link-1 dropdown">
                        <a class="nav-link active dropdown-toggle link-1" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #1d242d;">
                            Actualités
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Actualités 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Actualités 2</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Actualités 3 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1 dropdown">
                        <a class="nav-link dropdown-toggle link-1" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #1d242d;">
                            Diaspora
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Diaspora 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Diaspora 2</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Diaspora 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1 dropdown">
                        <a class="nav-link dropdown-toggle link-1" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #1d242d;">
                            Etudiants
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Etudiants 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Etudiants 2</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Etudiants 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1 dropdown link-1">
                        <a class="nav-link dropdown-toggle link-1" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #1d242d;">
                            Projets
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Projets 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Projets 2</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#" style="color: #1d242d;">Projets 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1"><a class="nav-link link-1" href="#!" style="color: #1d242d">Qui sommes-nous</a></li>
                    <li class="nav-item link-1"><a class="nav-link link-1" href="{{route('contact')}}" style="color: #1d242d">Contact</a></li>
                    <li class="nav-item link-1"><a class="nav-link link-1" href="{{route('cotisation.index')}}" style="color: #1d242d">Ma Cotisation</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>