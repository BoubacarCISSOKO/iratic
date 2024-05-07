@extends('base')

@section('content')
@include('front.utils')
@include('front.slider')

    <div class="px-4 px-lg-5" style="margin-top: 5px;">
       
        <div class="card my-3 py-2 text-center border1 reveal fade-right">
            <div class="card-body">
                <div class="row">
                <div class="col-md-6 col-lg-9 pb-2">
                        <div class="h-100">
                            <h3 style="text-align: left !important;">Recherche</h3>
                            <div class="card">
                                <div class="row card-body">
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Rechercher un article</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>

                                    

                                    <div class="col">
                                        <div class="d-grid gap-2">
                                            <button class="btn text-white btn-sm services-icon-wap shadow" type="button" style="background:#1d242d">RECHERCHER</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 pb-2">
                        <h3 class="font-weight-light">Besoin d’assistance? </h3>
                        <p style="text-align: justify;color:#000; font-size: 12px !important;">Vous êtes acheteur ? Découvrez notre choix en maisons, appartements et terrains sur notre site.
                        Vous souhaitez bénéficier de nos prestations de location ou gérance ?
                        </p>
                    <div><a class="btn text-white btn-sm services-icon-wap shadow" style="background:#1d242d" href="{{route('contact')}}">Contactez-nous!</a>
                    </div>
                    </div>

                   
                </div>
            </div>
        </div>

      
        <div class="card my-3 py-2 text-center border1 reveal fade-top">
            <h2 class="font-weight-light">Nos articles </h2>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="w-100 my-1 border-top border-white"></div>
                    </div>
                   
                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 1</h2>
                           
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="{{route('detail.article')}}">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 2</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 3</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 4</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 5</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 6</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 1</h2>
                           
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 2</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 3</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 4</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 5</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 pb-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <h2 class="h5 mt-4 text-center">Article 6</h2>
                            <a class="btn text-white btn-sm" style="background:#1d242d" href="#!">En savoir +</a>
                        </div>
                    </div>

                   
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Précédent</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div id="#about-us" class="card mb-2 col-md-12 col-lg-12 border1 reveal fade-left">
            <div class="h-100 p-5 shadow">
                <h2 class="font-weight-light">A propos</h2>
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <img class="gbc-image" src="{{url('_assets/ds12.PNG')}}" style=" border-radius: 10px !important;" alt="Image">
                    </div>
                    <div class="col-lg-5">
                        <p style="text-align: justify;">
                            A propos de Dembancane Solidarite Développement
                            <a class="btn test" href="{{route('a-propos')}}" style="background: #1d242d;color:#FFF">Lire plus ...</a>
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="card col-md-12 col-lg-12 border1 reveal fade-top">
            <div class="h-100 p-5 shadow">
                <h2 class="font-weight-light">Nos Projets Réalisés</h2>       
                <div class="card text-center">
                    
                        <div class="col-lg-12 m-auto tempaltemo-carousel pt-2">
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
                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds11.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds12.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds13.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds14.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds15.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds16.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <!--End First slide-->

                                            <!--Second slide-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds11.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds12.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds13.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds14.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds15.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-2 pb-2">
                                                            <div class="card services-icon-wap shadow" style=" border-radius: 10px !important;">
                                                            <a class="text-decoration-none" href="#"><img class="gbc-image2" style=" border-radius: 10px !important;" src="{{url('_assets/ds16.PNG')}}"  alt="Image"></a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <!--End Second slide-->

                                        

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
            </div>
        </div>
     
    </div>

@endsection