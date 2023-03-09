@extends('base')

@section('content')
@include('front.slider')
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
    

   
</style>

    <div class="px-4 px-lg-5" style="margin-top: 5px;">
       

      <!-- Call to Action-->
      <div class="card my-3 py-3 text-center">
            <h2 class="font-weight-light">IRATIC </h2>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <img class="gbc-image" src="{{url('images/3.png')}}" style=" border-radius: 10px !important;" alt="Image">
                    </div>
                    <div class="col-lg-5">
                        
                        <h2>A propos</h2>
                        <p style="text-align: justify;">
                        L’Institut de Recherches Appliquées en Technologies, Innovation 
                        et Compétitivité est un laboratoire d’innovation de politiques, 
                        un mutant du développement qui a pour missions de : <br>
                        o	Rapprocher l'innovation du cœur des organisations comme 
                            principale clé de succès intégrée dans les principaux 
                            processus d’élaboration des politiques <br>
                        o	Favoriser le changement de culture et de paradigme via une 
                            boîte à outils et un cadre de collaboration et d’interactions 
                            entre le niveau stratégique, le niveau opérationnel, les partenaires et citoyens. 

                            <a class="btn" href="#" style="background: #041135;color:#FFF">Lire plus ...</a>
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>

        
        <div class="card my-3 py-2 text-center">
            <h2 class="font-weight-light">Orientations</h2>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 col-lg-6 pb-2">
                    <h2 class="h5 mt-4 text-center">IRATIC, c’est cinq (05) axes majeurs pour une approche agile, flexible et itérative:</h2>
                    <p style="text-align: justify;">
                            
                            o	Le diagnostic de politiques pour identifier et définir les problèmes et défis de politique; <br>
                            o	La découverte pour analyser et comprendre le paysage et l’environnement de politiques, diagnostiquer et comprendre les utilisateurs et leurs besoins; <br>
                            o	Le développement agile pour générer et hiérarchiser des idées et traduire les besoins des utilisateurs en politiques et services; <br>
                            o	Le prototypage et amélioration pour passer d'idées peu fidèles à des politiques et des services pouvant être fournis aux utilisateurs;<br>
                            o	Le déploiement de politiques
                            </p>
                            <h2 class="h5 mt-4 text-center"> IRATCI, c’est une série d’activités innovantes et collaboratives:</h2>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                    <p style="text-align: justify;">
                            o	Des appels à défis pour identifier des porteurs d’idées de politiques; <br>
                            o	Des ateliers d’immersion et des visites d’empathie pour inspirer de nouvelles réflexions; <br>
                            o	Des séances d'essai/d’idéation en laboratoire politiques pour générer des idées de politique qui peuvent stimuler l'innovation et le changement transformationnel; <br>
                            o	Des sessions de design et de co création pour affiner et rendre des idées de politiques plus livrables grâce aux tests et au prototypage;<br>
                            o	Des ateliers collaboratifs plus intensifs sur 1 à 3 jours pour aider les équipes à accélérer et fournir de nouvelles propositions de politiques répondant à des problématiques pratiques inspirantes; <br>
                            o	Des écoles de politique et des sessions de formation et de renforcement des capacités; <br>
                            o	Des conférences, d'ateliers et des masterclass en ligne; <br>
                            o	Des études et publications ciblées;
                            </p>
                    </div>
                   
                </div>

            </div>
        </div>

        <div class="card my-3 py-2 text-center">
            <h2 class="font-weight-light">Dispositifs</h2>
            <div class="card-body">
                <div class="row">
                <div class="col-md-6 col-lg-12 pb-2">
                    <p style="text-align: justify;">
                    Un dispositif d’expertise, de compétences et ressources entièrement dédié: <br>
                    o	Un espace neutre dédié ouvert aux décideurs politiques pour  collaborer et dialoguer avec le public et des experts externes; <br>
                    o	Des chefs d'équipe sélectionnés sur la base de leur idée de politique et leur engagement à les mettre en œuvre; <br>
                    o	Des équipes pluridisciplinaires et autonomes: recrutés en fonction de leur expérience dans le traitement de questions de politiques; <br> 
                    o	Un réseau de mentors dotés de l'expérience dans la conception et la mise en œuvre de politiques et idéalement dans différents formats de dialogue; <br>
                    o	Un pool d’animateurs ayant une claire compréhension des règles et processus de déroulement des différentes activités; <br>
                    o	Une équipe d’organisateurs pour gérer le processus avant, pendant et après  les différents événements et activités; <br>
                    o	Un jury d’experts pour piloter tous les processus de d’identification, d’audition, de validation et de sélection; <br>
                    o	Des cellules universitaires pour permettre aux étudiants de pratiquer et imprégner l'innovation dans leurs études universitaires; <br>
                    o	Une plateforme de formation et de renforcement des capacités pour former une nouvelle génération de professionnels dotés d'une capacité accrue à relever les défis politiques actuels et futurs

                    </div>

                   
                </div>

            </div>
        </div>


        <div class="card my-3 py-2 text-center">
            <h2 class="font-weight-light">Leaderships</h2>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 p-3 py-5 services-icon-wap shadow">
                            <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                            <h2 class="h5 mt-4 text-center">IRATIC, un Fondateur engagé et dévoué:</h2>
                            <p style="text-align: justify;">
                                M. Seth SALLL fondateur d’Africa Policy Lab est un Ingénieur informaticien de formation Spécialiste en innovation de politiques et services publics (Public policy hacker, public services designer) <br>
                                Plus de 25 ans d’expériences dans le public et le privé avec à la clé plusieurs postes stratégiques <br>
                                -	Ancien Conseiller Technique chargé des questions pédagogiques et des TICE; <br>
                                -	Ancien Conseiller Technique en TIC; <br>
                                -	Ancien Directeur de l’Economie numérique et des Partenariats; <br>
                                -	Ancien Conseiller Technique en innovation et relation avec les Ecosystèmes; <br>
                                -	Formateur associé dans plusieurs universités et instituts de formation; <br>
                                -	Consultant en open innovation et technologies émergentes;
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 p-3 py-5 services-icon-wap shadow">
                            <div class="h1 text-success text-center"><i class="fas fa-home fa-lg"></i></div>
                            <h2 class="h5 mt-4 text-center">Des experts associés rompus à la tâche:</h2>
                            <p style="text-align: justify;">
                            
                            o	Des spécialistes en ingénierie informatique et technologies digitales; <br>
                            o	Des statisticiens économistes et spécialistes en sciences de données; <br> 
                            o	Un spécialiste en élaboration et management de politiques publiques; <br> 
                            o	Des designers en services publics; <br>
                            o	Des experts un politique et transformation digitale

                            </p>

                            <h2 class="h5 mt-4 text-center"> De potentiels partenaires</h2>
                            <p style="text-align: justify;">
                                Africa Policy Lab adopte une démarche ouverte et partenariale associant divers partenaires parmi lesquels: <br>
                                o	Les pouvoirs publics africains; <br>
                                o	Le secteur privé et la société civile africains; <br> 
                                o	Les communautés et acteurs locaux : les associations et ONG; <br>
                                o	Les organisations régionales et sous régionales; <br>
                                o	Les organisations internationales; <br> 
                                o	les partenaires techniques et financiers 

                            </p>

                        </div>
                    </div>

                   
                </div>

            </div>
        </div>

        <div class="card my-3 py-2 text-center">
            <h2 class="font-weight-light">Programmes </h2>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 col-lg-4 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                            <h2 class="h5 mt-4 text-center">DEMARCHE ADMINISTRATIVE</h2>
                            <p>Notre agence fait également tout ce qui est démarches administrative à savoir</p>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <div class="h1 text-success text-center"><i class="fas fa-home fa-lg"></i></div>
                            <h2 class="h5 mt-4 text-center">TOUTE TRANSACTION IMMOBILIÈRE</h2>
                            <p>Découvrez nos offres mises en vente et à louer</p>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <div class="h1 text-success text-center"><i class="fa fa fa-truck fa-lg"></i></div>
                            <h2 class="h5 mt-4 text-center">VENTE & LOCATION VOITURE</h2>
                            <p>Acheter ou vendre une voiture d'occasion au Sénégal sur notre site</p>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>

     
      
        <div class="card text-center">
            <h2 class="font-weight-light">Nos offres récentes</h2>

                <div class="col-lg-12 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (1).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (2).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (3).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (4).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                               
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                        <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (1).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (2).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (3).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (4).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                            
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                        <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (1).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (2).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (3).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-3 pb-2">
                                                    <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                    <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('images/1 (4).png')}}"  alt="Image"></a>
                                                    </div>
                                                </div>

                                               
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    <!--End Brands-->



    </div>


@endsection