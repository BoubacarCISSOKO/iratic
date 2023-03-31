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
       <div class="card my-3 py-2 text-center border2">
           <div class="card-body">
               
               <div class="row">
                    <div class="col-12 mb-3 reveal fade-top">
                        <img class="img-fluid" src="{{url('_assets/apropos.png')}}" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h2 class="h5 mt-2 text-center">A propos</h2>
                            <hr>
                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-left">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                    <p class="h5 m-2" style="text-align: justify;">
                                        <span style="font-weight: bold; margin-buttom:2px"> L’Institut de Recherches Appliquées en Technologies, Innovation et Compétitivité est un laboratoire d’innovation de politiques, un mutant du développement qui a pour missions de :</span> 
                                        <ul style="text-align: justify;">
                                            <li>Rapprocher l'innovation du cœur des organisations comme principale clé de succès intégrée dans les principaux processus d’élaboration des politiques;</li>
                                            <li>Favoriser le changement de culture et de paradigme via une boîte à outils et un cadre de collaboration et d’interactions entre le niveau stratégique, le niveau opérationnel, les partenaires et citoyens;</li>
                                            <li>Instaurer une démarche de rupture pour mieux gérer la demande des utilisateurs, cerner les besoins des citoyens et proposer de nouvelles solutions aux principales priorités et défis politiques</li>
                                        </ul>
                                        <span style="font-weight: bold; margin-top:5px">Son ambition est d’impulser une dynamique de changement et d’innovation dans la culture d'élaboration des politiques par :</span>
                                        <ul style="text-align: justify;">
                                            <li>La mobilisation de l'engagement et de la volonté  des pouvoirs publics;</li>
                                            <li>La coopération directe avec les communautés et des experts de divers horizons;</li>
                                        </ul>
                                        <span style="font-weight: bold; margin-top:2px">Sa finalité est de produire :</span> <br>

                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-right">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                    <p class="h5 m-2" style="text-align: justify;">
                                        <ul style="text-align: justify;">
                                            <li>Des politiques minimales viables (MVP) plus résilientes, plus durables, plus agiles, plus créatives, donc mieux adaptées aux besoins des citoyens et aux mutations socio-économiques en cours</li>
                                            <li>Des services publics innovants adaptés et orientés utilisateurs;</li>
                                        </ul>
                                        <span style="font-weight: bold; margin-top:2px"> Cinq principes fondateurs à la base :</span> <br>
                                        <ul style="text-align: justify;">
                                            <li>Des obstacles de politiques réels : élaborer des politiques visant à résoudre des défis de société importants, des problèmes de politique systémiques, insolubles et complexes ; </li>
                                            <li>Un une priorité sur l’humain : proposer des politiques centrées sur l'humain loin des stratégies de politiques conventionnelles qui ne voient que des faits et des chiffres ;</li>
                                            <li>Une approche novatrice basée sur le digital, la science des données et la conception centrée sur l'utilisateur ;</li>
                                            <li>Une collaboration multipartite:   offrant un cadre multi-acteurs, mettant en œuvre des processus d’élaboration participatifs rigoureux et collaboratifs ;</li>
                                            <li>Une valeur ajoutée/un impact réel  avec politiques rendant les interactions avec les citoyens meilleures, plus faciles, moins couteuses, plus rapides, plus justes, plus claires, plus simples, plus disponibles, plus utiles et plus joyeuses;</li>
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

