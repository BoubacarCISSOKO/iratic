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
                   
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img class="img-fluid" src="{{url('_assets/dispositif.png')}}" alt="Image">
                        </div> 
                    </div>
                </div>
            </div>
        </section>


        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal">
            <div class="card-body">
                <div class="row">
                        <h2 class="h5 mt-2 text-center">Policy Hack / Acteurs</h2>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 pb-2">
                                    <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                        <p class="h5 m-2" style="text-align: justify;">
                                        <ul style="text-align: justify;">
                                            <li><span style="font-weight: bold;">Appel à défis</span> </li>
                                        </ul> 
                                       <span>
                                       -	Avez-vous une idée de politique novatrice qui pourrait faire une différence dans votre communauté ou au-delà ? <br>
                                        -	Vous souhaitez collaborer avec des personnes partageant les mêmes idées et transformer votre idée en action ? <br>
                                        Si tel est le cas, rejoignez-nous pour le Policy Hackathon ! <br>
                                        Notre hackathon de politique est une occasion unique pour des personnes d'horizons divers de se réunir 
                                        et de travailler à la création de solutions à des problèmes politiques urgents. Nous invitons toute 
                                        personne intéressée par les défis de politiques et l'innovation à participer à cet événement passionnant. <br>

                                        Nous recherchons actuellement des propositions de défis d'individus, d'organisations et d'agences 
                                        gouvernementales. Les défis doivent se concentrer sur une question de politique spécifique et être 
                                        conçus pour inspirer des solutions créatives et réalisables. <br>
                                        Les défis de politique proposés doivent tenir compte des besoins et des préoccupations 
                                        spécifiques des communautés aux politiques de :
                                       </span>
                                        <ul style="text-align: justify;">
                                            <li>Politiques d’accès des citoyens aux services publics et aux services sociaux de base; </li>
                                            <li>Politiques d’amélioration du bien – être et des conditions de vie des populations  ;</li>
                                            <li>Politiques de développement et de transformation des secteurs et filières économiques  ;</li>
                                            <li>Politiques de valorisation de promotion des potentialités culturelles et territoriales  ;</li>
                                            <li>Préservation et sauvegarde de l’environnement ainsi que de résilience face aux changements climatiques;</li>
                                        </ul>

                                       <span>
                                       Si vous avez un défi politique à l'esprit que vous aimeriez proposer, veuillez soumettre une brève proposition 
                                        (pas plus de 500 mots) décrivant le problème et le défi proposé. <br>
                                        Les propositions de défi sélectionnées seront présentées au [Nom de l'événement] Policy Hackathon, où les participants 
                                        travailleront en équipe pour développer et présenter des solutions innovantes. L'équipe gagnante aura l'opportunité de 
                                        présenter sa solution aux décideurs politiques et aux bailleurs de fonds potentiels. <br>
                                        Ne manquez pas cette chance de faire partie d'un événement passionnant et collaboratif qui pourrait aider à 
                                        façonner l'avenir des politiques dans votre communauté et au-delà. <br>
                                        Soumettez votre proposition en cliquant sur le bouton ci- après
                                       </span>
                                        </p>
                                        <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('policyhack.defi')}}">Soumettre un défi</a>
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
