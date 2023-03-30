@extends('base')

@section('content')
@include('front.utils2')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #0358c0 !important;
}
</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal">
            <div class="card-body">
                    <h2 class="h5 mt-2 text-center">Orientations</h2>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img class="img-fluid" src="{{url('_assets/offre.png')}}" alt="Image">
                        </div> 
                    </div>
                </div>
            </div>
        </section>


        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal">
            <div class="card-body">
                <div class="row">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 pb-2">
                                    <div class="h-100 p-5 services-icon-wap shadow">
                                        <p class="h5 m-2" style="text-align: justify;">
                                        <span style="font-weight: bold; margin-top:2px"> IRATCI développe une offre d’accompagnement idéale pour des politiques performantes:</span> 
                                        <ul style="text-align: justify;">
                                            <li>La conduite de marathon créatif pour réimaginer des politiques de rupture dans un domaine d’activité donné (policy hackathon) ;</li>
                                            <li>L’animation d’ateliers immersifs et créatifs proposant de nouvelles approches d'innovation des politiques basées sur le digital, la science des données et la conception centrée sur l'utilisateur (policy sprint);</li>
                                            <li>Offre de conseils et de soutien pratique pour établir des dispositifs d’innovation de politiques efficaces entièrement centrées sur l’humain (Policy team);</li>
                                            <li>Le déploiement d’un cadre offrant un terrain de conception et d'expérimentation, un espace ouvert pour réfléchir, questionner et faire preuve de créativité et d’innovation (Policy Lab);</li>
                                            <li>L’animation d’une série de masterclass proposant des sessions de formation et de renforcement de capacités sur la méthodologie, les techniques et outils d’innovation de politiques (Policy Academy);</li>
                                        </ul> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>

                </div>
            </div>
        </section>
    
    </div>

@endsection
