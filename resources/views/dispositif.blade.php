@extends('base')

@section('content')

<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #0358c0 !important;
}
</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
       <div class="card my-3 py-2 text-center border2">
           <div class="card-body">
            <h2 class="h5 mt-2 text-center">Dispositifs</h2>
               <div class="row">
                    <div class="col-12 mb-3">
                    <img class="img-fluid" src="{{url('_assets/dispositif.png')}}" alt="Image">
                                    </div>
                    <div class="card-body">
                <div class="row">

                    <div class="col-md-12 col-lg-12 pb-2">
                        <div class="h-100 p-5 services-icon-wap shadow">
                            <p class="h5 m-2" style="text-align: justify;">
                                <span style="font-weight: bold; margin-buttom:2px">Un dispositif d’expertise, de compétences et ressources entièrement dédié:</span> 
                                <ul style="text-align: justify;">
                                    <li>Un espace neutre dédié ouvert aux décideurs politiques pour  collaborer et dialoguer avec le public et des experts externes ;</li>
                                    <li>Des chefs d'équipe sélectionnés sur la base de leur idée de politique et leur engagement à les mettre en œuvre ;</li>
                                    <li>Des équipes pluridisciplinaires et autonomes: recrutés en fonction de leur expérience dans le traitement de questions de politiques ;</li>
                                    <li>Un réseau de mentors dotés de l'expérience dans la conception et la mise en œuvre de politiques et idéalement dans différents formats de dialogue ;</li>
                                    <li>Un pool d’animateurs ayant une claire compréhension des règles et processus de déroulement des différentes activités ;</li>
                                    <li>Une équipe d’organisateurs pour gérer le processus avant, pendant et après  les différents événements et activités ;</li>
                                    <li>Un jury d’experts pour piloter tous les processus de d’identification, d’audition, de validation et de sélection ;</li>
                                    <li>Des cellules universitaires pour permettre aux étudiants de pratiquer et imprégner l'innovation dans leurs études universitaires ;</li>
                                    <li>Une plateforme de formation et de renforcement des capacités pour former une nouvelle génération de professionnels dotés d'une capacité accrue à relever les défis politiques actuels et futurs;</li>
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

