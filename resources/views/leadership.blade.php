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
                        <img class="img-fluid" src="{{url('_assets/leadership.png')}}" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <h2 class="h5 mt-2 text-center">Leaderships</h2>
                        <hr>
                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-left">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                    <p class="h5 m-2" style="text-align: justify;">
                                    <img class="imgdg" src="{{url('_assets/dg 3.png')}}" style=" width: 195px;height: 195px;"  alt="Image"><br>
                                    <span style="font-weight: bold; margin-top:2px"> IRATIC, un Fondateur engagé et dévoué :</span>  <br>
                                    <hr>
                                       <p style="text-align: justify !important;"> M. Seth SALLL fondateur d’IRATIC est un Ingénieur informaticien de formation spécialisé en 
                                        innovation de politiques et services publics (Public policy hacker, public services designer)
                                        Plus de 25 ans d’expériences dans le public et le privé avec à la clé plusieurs postes stratégiques</p>
                                    <ul style="text-align: justify;">
                                    <li>Ancien Conseiller Technique chargé des questions pédagogiques et des TICE;</li>
                                    <li>Ancien Conseiller Technique en TIC;</li>
                                    <li>Ancien Directeur de l’Economie numérique et des Partenariats;</li>
                                    <li>Ancien Conseiller Technique en innovation et relation avec les Ecosystèmes;</li>
                                    <li>Formateur associé dans plusieurs universités et instituts de formation;</li>
                                    <li>Consultant en open innovation et technologies émergentes;</li>
                                    </ul> 
                                    </p>
                                    
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-right">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                <p style="text-align: justify;font-weight: bold !important;">Des experts associés rompus à la tâche :</p>
                                    <p class="h5 m-2" style="text-align: justify;">
                                    <ul style="text-align: justify;">
                                    <li>Des spécialistes en ingénierie informatique et technologies digitales;</li>
                                        <li>Des statisticiens économistes et spécialistes en sciences de données;</li>
                                        <li>Un spécialiste en élaboration et management de politiques publiques ;</li>
                                        <li>Des designers en services publics;</li>
                                        <li>Des experts un politique et transformation digitale;</li>
                                        <li>Des écoles de politique et des sessions de formation et de renforcement des capacités;</li>
                                        <li>Des conférences, d'ateliers et des masterclass en ligne;</li>
                                    
                                    </ul>
                                    <p style="text-align: justify;font-weight: bold !important;">De potentiels partenaires</p>
                                    <p style="text-align: justify;">Africa Policy Lab adopte une démarche ouverte et partenariale associant divers partenaires parmi lesquels :</p>
                                    <ul style="text-align: justify;">
                                        <li>Les pouvoirs publics africains;</li>
                                        <li>Le secteur privé et la société civile africains;</li>
                                        <li>Les communautés et acteurs locaux : les associations et ONG;</li>
                                        <li>Les organisations régionales et sous régionales;</li>
                                        <li>Les organisations internationales </li>
                                        <li>Les partenaires techniques et financiers</li>
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

