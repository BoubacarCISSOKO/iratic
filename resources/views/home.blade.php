@extends('base')

@section('content')
@include('front.utils')
@include('front.slider')

    <div class="px-4 px-lg-5" style="margin-top: 5px;">
       

        <div class="card my-3 py-2 text-center border1 reveal fade-right">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 col-lg-4 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <h3 class="h5 mt-2 text-center">Policy Hack </h3>
                            <p>Amener l’innovation au cœur des sphères publiques en Afrique</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('policyhack.acceuil')}}">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <h3 class="h5 mt-2 text-center">Policy Academy</h3>
                            <p>Fournir l’expertise multidisciplinaire permettant de comprendre le présent, d’imaginer l'avenir et d’obtenir l'impact politique souhaité en Afrique.</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('policyaccademy.acceuil')}}">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <h3 class="h5 mt-2 text-center">Local Hack</h3>
                            <p>Faire de chaque territoire un véritable un hub d’innovation </p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>

        <div id="#about-us" class="card col-md-12 col-lg-12 border1 reveal fade-left">
            <div class="h-100 p-5 shadow">
                <h2 class="font-weight-light">A propos</h2>
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <img class="gbc-image" src="{{url('_assets/layer_00055.png')}}" style=" border-radius: 10px !important;" alt="Image">
                    </div>
                    <div class="col-lg-5">
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

                            <a class="btn test" href="{{route('a-propos')}}" style="background: #0358c0;color:#FFF">Lire plus ...</a>
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>
      
        <div class="card my-3 py-2 text-center border1 reveal fade-right">
            <h2 class="font-weight-light">IRATIC ACTIVITES </h2>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="w-100 my-1 border-top border-white"></div>
                    </div>
                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Orientations</h2>
                            <p class="m-2">IRATIC, c’est cinq (05) axes majeurs pour une approche agile, flexible et itérative : <br>
                                Le diagnostic de politiques pour identifier et définir les problèmes et défis de politique,
                            </p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('oriantations')}}">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Dispositifs</h2>
                            <p class="m-2">Un dispositif d’expertise, de compétences et ressources entièrement dédié : <br>
                                Un espace neutre dédié ouvert aux décideurs politiques pour  collaborer et dialoguer avec le public et des experts externes ;
                            </p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('dispositif')}}">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Leaderships</h2>
                            <p class="m-2">IRATIC, un Fondateur engagé et dévoué : <br>
                            M. Seth SALLL fondateur d’Africa Policy Lab est un Ingénieur informaticien de formation Spécialiste en 
                            </p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('leadership')}}">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Programmes</h2>
                            <p class="m-2">A venir</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>
      
       
        <div class="card col-md-12 col-lg-12 border1 reveal fade-top">
            <div class="h-100 p-5 shadow">
                <h2 class="font-weight-light">Nos Offres</h2>
                    <div class="sim-slider" data-width="2550" data-height="600" data-animation="350" data-current="false"data-progress="false">   
                        
                        <div class="sim-slider-slide">
                            <div class="sim-slider-layer" data-effect="rollIn" data-width="690" data-height="500" data-left="2" data-top="75"><img class="imgslider"src="_assets/1.png" /></div> 
                            <div class="sim-slider-layer" data-effect="rollIn" data-width="690" data-height="500" data-left="850" data-top="75"><img class="imgslider" src="_assets/2.png" /></div> 
                            <div class="sim-slider-layer" data-effect="rollIn" data-width="690" data-height="500" data-left="1695" data-top="75"><img class="imgslider"src="_assets/3.png" /></div> 
                        </div>
                            
                        <div class="sim-slider-slide">
                            <div class="sim-slider-layer" data-effect="rollIn" data-width="690" data-height="500" data-left="2" data-top="75"><img class="imgslider" src="_assets/4.png" /></div> 
                            <div class="sim-slider-layer" data-effect="rollIn" data-width="690" data-height="500" data-left="850" data-top="75"><img class="imgslider"src="_assets/5.png" /></div> 
                            <div class="sim-slider-layer" data-effect="rollIn" data-width="690" data-height="500" data-left="1695" data-top="75"><img class="imgslider" src="_assets/6.png" /></div> 
                        </div>      
                                
                    </div>
                    <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('offre')}}">En savoir +</a>
            </div>
        </div>
     
    </div>

@endsection