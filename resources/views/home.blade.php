@extends('base')

@section('content')
@include('front.slider')

    <div class="px-4 px-lg-5" style="margin-top: 5px;">
       

        <div class="card my-3 py-2 text-center border1">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 col-lg-3 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">MIP</h2>
                            <p>Découvrez nos offres mises en vente et à louer</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">APLI</h2>
                            <p>Acheter ou vendre une voiture d'occasion au Sénégal sur notre site</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">PAP</h2>
                            <p>Acheter ou vendre une voiture d'occasion au Sénégal sur notre site</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">LCH</h2>
                            <p>Acheter ou vendre une voiture d'occasion au Sénégal sur notre site</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>

        <div class="card col-md-12 col-lg-12 border1">
            <div class="h-100 p-5 shadow">
                <h2 class="font-weight-light">A propos</h2>
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <img class="gbc-image" src="{{url('images/3.png')}}" style=" border-radius: 10px !important;" alt="Image">
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

                            <a class="btn test" href="#" style="background: #0358c0;color:#FFF">Lire plus ...</a>
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>
      
        <div class="card my-3 py-2 text-center border1">
            <h2 class="font-weight-light">IRATIC ACTIVITES </h2>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="w-100 my-1 border-top border-white"></div>
                    </div>
                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Orientations</h2>
                            <p class="m-2">Notre agence fait également tout ce qui est démarches administrative à savoir</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Dispositifs</h2>
                            <p class="m-2">Découvrez nos offres mises en vente et à louer</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Leaderships</h2>
                            <p class="m-2">Acheter ou vendre une voiture d'occasion au Sénégal sur notre site</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-2 text-center">Programmes</h2>
                            <p class="m-2">Acheter ou vendre une voiture d'occasion au Sénégal sur notre site</p>
                            <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>
      
       
        <div class="card col-md-12 col-lg-12 border1">
            <div class="h-100 p-5 shadow">
                <h2 class="font-weight-light">Nos Offres</h2>
                <p>Notre agence fait également tout ce qui est démarches administrative à savoir</p>
                <a class="btn text-white btn-sm test" style="background:#0358c0" href="#!">En savoir +</a>
            </div>
        </div>
     
    <!--End Brands-->



    </div>


@endsection