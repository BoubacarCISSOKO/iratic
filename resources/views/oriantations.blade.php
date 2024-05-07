@extends('base')

@section('content')
@include('front.utils')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #1d242d !important;
}
</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
       <div class="card my-3 py-2 text-center border2">
           <div class="card-body">
                
               <div class="row">

                    <div class="col-12 mb-3 reveal fade-left">
                        <img class="img-fluid" src="{{url('_assets/orientations.png')}}" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h2 class="h5 mt-2 text-center">Orientations</h2>
                            <hr>
                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-left">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                    <p class="h5 m-2" style="text-align: justify;">
                                    <span style="font-weight: bold; margin-top:2px"> IRATIC, c’est cinq (05) axes majeurs pour une approche agile, flexible et itérative :</span> 
                                    <ul style="text-align: justify;">
                                        <li>Le diagnostic de politiques pour identifier et définir les problèmes et défis de politique;</li>
                                        <li>La découverte pour analyser et comprendre le paysage et l’environnement de politiques, diagnostiquer et comprendre les utilisateurs et leurs besoins;</li>
                                        <li>Le développement agile pour générer et hiérarchiser des idées et traduire les besoins des utilisateurs en politiques et services;</li>
                                        <li>Le prototypage et amélioration pour passer d'idées peu fidèles à des politiques et des services pouvant être fournis aux utilisateurs;</li>
                                        <li>Le déploiement de politiques ;</li>
                                    </ul> 
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-right">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                    <p class="h5 m-2" style="text-align: justify;">
                                    <span style="font-weight: bold; margin-top:2px">IRATCI, c’est une série d’activités innovantes et collaboratives: </span><br>
                                    <ul style="text-align: justify;">
                                        <li>Des appels à défis pour identifier des porteurs d’idées de politiques</li>
                                        <li>Des ateliers d’immersion et des visites d’empathie pour inspirer de nouvelles réflexions;</li>
                                        <li>Des séances d'essai/d’idéation en laboratoire politiques pour générer des idées de politique qui peuvent stimuler l'innovation et le changement transformationnel;</li>
                                        <li>Des sessions de design et de co création pour affiner et rendre des idées de politiques plus livrables grâce aux tests et au prototypage;</li>
                                        <li>Des ateliers collaboratifs plus intensifs sur 1 à 3 jours pour aider les équipes à accélérer et fournir de nouvelles propositions de politiques répondant à des problématiques pratiques inspirantes;</li>
                                        <li>Des écoles de politique et des sessions de formation et de renforcement des capacités;</li>
                                        <li>Des conférences, d'ateliers et des masterclass en ligne;</li>
                                        <li>Des études et publications ciblées;</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                        
                </div>

            </div>
        </div>

    </div>

@endsection

