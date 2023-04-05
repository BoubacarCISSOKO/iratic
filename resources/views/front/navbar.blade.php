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
                    
                    <li class="nav-item link-1 dropdown">
                        <a class="nav-link active dropdown-toggle link-1" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0358c0;">
                            Iratic
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="{{route('a-propos')}}" style="color: #0358c0;">À propos</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="{{route('oriantations')}}" style="color: #0358c0;">Orientations</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="{{route('dispositif')}}" style="color: #0358c0;">Dispositifs </a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="{{route('offre')}}" style="color: #0358c0;">Offres</a>
                            </li>
                              <li>
                                <a class="dropdown-item link-1" href="{{route('leadership')}}" style="color: #0358c0;">Leaderships </a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#about-us" style="color: #0358c0;">Programmes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1 dropdown">
                        <a class="nav-link dropdown-toggle link-1" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0358c0;">
                            Policy Hack 
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="{{route('policyhack.apercu')}}" style="color: #0358c0;">Aperçu</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="{{route('policyhack.acteur')}}" style="color: #0358c0;">Acteurs</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="{{route('policyhack.partenaire')}}" style="color: #0358c0;">Partenaires</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1 dropdown">
                        <a class="nav-link dropdown-toggle link-1" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0358c0;">
                            Policy Academy
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="{{route('policyaccademy.policyHackathon')}}" style="color: #0358c0;">Policy Hackathon</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="{{route('policyaccademy.designthinking')}}" style="color: #0358c0;">Design Thinking</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="{{route('policyaccademy.management')}}" style="color: #0358c0;">Management Agile</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#about-us" style="color: #0358c0;">Policy Design</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1 dropdown link-1">
                        <a class="nav-link dropdown-toggle link-1" href="#about-us" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0358c0;">
                            Local Hack
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item link-1" href="#about-us" style="color: #0358c0;">Aperçu</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#about-us" style="color: #0358c0;">Projets</a>
                            </li>
                            <li>
                                <a class="dropdown-item link-1" href="#about-us" style="color: #0358c0;">Partenaires</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item link-1"><a class="nav-link link-1" href="#!" style="color: #0358c0">Ressources</a></li>
                    <li class="nav-item link-1"><a class="nav-link link-1" href="{{route('contact')}}" style="color: #0358c0">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>