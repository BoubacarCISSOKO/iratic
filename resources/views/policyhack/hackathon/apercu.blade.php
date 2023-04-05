@extends('base')

@section('content')
@include('front.utils')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #0358c0 !important;
}
</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal fade-top">
            <div class="card-body">
                   
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img class="img-fluid" src="{{url('_assets/dispositif.png')}}" alt="Image">
                        </div> 
                    </div>
                </div>
            </div>
        </section>


        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal fade-right">
            <div class="card-body">
                <div class="row">
                        <h2 class="h5 mt-2 text-center">Policy Hack / Aperçu</h2>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 pb-2">
                                    <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                        <p class="h5 m-2" style="text-align: justify;">
                                        <span style="font-weight: bold; margin-top:2px"> HACKATHON DE POLITIQUE:</span> <br>
                                        
                                        <ul style="text-align: justify;">
                                            <li><span style="font-weight: bold;">Amener l’innovation au cœur de la sphère publique</span> </li>
                                        </ul> 
                                        <span>
                                        Un hackathon de politique est un événement qui rassemble des personnes d'horizons divers, y compris des experts en politique, des technologues, des 
                                        concepteurs et des entrepreneurs, pour aborder et résoudre de manière collaborative les défis de 
                                        politiques. Au cours d'un hackathon de politique, les participants travaillent en équipe pour développer 
                                        des solutions de politiques innovantes en utilisant la technologie, la pensée conceptuelle et d'autres 
                                        techniques créatives de résolution de problèmes.
                                        </span>
                                        
                                        <ul style="text-align: justify;">
                                            <li><span style="font-weight: bold;">Résoudre des problématiques et défis de politiques</span> </li>
                                        </ul>
                                        <span>
                                        L'objectif d'un hackathon de politique est de créer des propositions de politiques réalisables qui 
                                        peuvent être mises en œuvre pour résoudre les problèmes du monde réel. Les hackathons de politiques 
                                        impliquent généralement une combinaison de sessions de brainstorming, de sprints de conception et de 
                                        prototypage rapide pour créer des solutions de politiques innovantes qui peuvent être présentées à un
                                        panel de juges ou de parties prenantes.
                                        </span>
                                        <ul style="text-align: justify;">
                                            <li><span style="font-weight: bold;">Construire ensemble les politiques de demain</span> </li>
                                        </ul>
                                        <span>
                                        Les hackathons de politiques peuvent couvrir un large éventail de questions de politiques, telles que 
                                        le changement climatique, la santé, l'éducation, les transports, etc. En réunissant divers groupes 
                                        de personnes ayant des perspectives et des expertises différentes, les hackathons de politiques 
                                        peuvent aider à générer de nouvelles idées, favoriser la collaboration et créer une dynamique de 
                                        changement de politique.
                                        </span>

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
