@extends('base')

@section('content')
@include('front.utils')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #1d242d !important;
}
@layer setupPage, step2styles;

summary {
  position: relative;
}
summary::marker {
  content: none;
}
summary::before,
summary::after {
  content: '';
}
summary::before,
summary::after {
    width: .75em;
    height: 0;
    border-bottom: 2px solid;
    position: absolute;
    top: calc(50% - 1px);
    right: 0;
    transform: translateY(-50%);
  }
summary::after {
  transform: rotate(90deg);
  transform-origin: 50% 50%;
}
[open] summary::after {
  transform: rotate(0deg);
}


/* styles ported over from the second example */
@layer step2styles {
  details {
    border-radius: 8px;
        border: 1px solid #1d242d;;
    padding: 0 1rem;
    background: white;
  }
  details + details {
    border-top: none;
  }
  details[open] {
      padding-bottom: 1em;
  }  
  summary {
    padding: 1rem 2em 1rem 0;
    font-size: 1.25rem;
    font-weight: bold;
    cursor: pointer;
  }
}



</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal fade-left">
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
            <div class="card my-3 py-2 border2 reveal fade-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 pb-2">
                            <div class="h-100 p-5">
                            <aside>
                                <h2>Policy Hackathon </h2>
                                <details>
                                    <summary>Policy Hackathon</summary>
                                    <section id="about">
                                        <div class="card my-3 py-2 text-center border2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <h2 class="h5 mt-2 text-center">MODULE DE FORMATION SUR LE HACKATHON DE POLITIQUES</h2>
                                                    <hr>
                                                    <div class="card-body reveal fade-left">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Accueil et présentation</span> </li>
                                                                    </ul> 
                                                                <span>
                                                                Bienvenue dans le module de formation consacré aux hackathon de politiques. Les hackathons de politiques 
                                                                    sont des événements qui rassemblent des personnes d'horizons divers pour collaborer et créer des 
                                                                    solutions innovantes à des défis de politiques complexes. Les hackathons de politiques fournissent 
                                                                    une plate-forme pour la collaboration et la co-création intersectorielles, tirant parti de la 
                                                                    technologie, du design thining et des méthodologies agiles pour résoudre les problèmes de politique. <br>
                                                                    
                                                                    Les objectifs de ce module de formation sont de fournir un aperçu des hackathons de politiques, 
                                                                    d'expliquer leur pertinence et de doter les participants des compétences et des connaissances 
                                                                    nécessaires pour organiser et participer à des hackathons de politiques réussis. Tout au long du 
                                                                    module, nous couvrirons les différentes étapes de la planification et de la préparation, de 
                                                                    l'idéation et de la résolution de problèmes, de la collaboration et du travail d'équipe, du 
                                                                    pitch et de la présentation, de la mise en œuvre et de l'impact. <br>
                                                                    À la fin de cette formation, les participants auront acquis les compétences et la confiance 
                                                                    nécessaires pour organiser et participer à des hackathons de politiques et contribuer à un 
                                                                    changement de politique positif.
                                                                </span>

                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    


                                                    <div class="card-body reveal fade-right">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Objectifs du module de formation</span> </li>
                                                                    </ul> 
                                                                <span>
                                                                Les objectifs de ce module de formation sont de : <br>
                                                                    •	Fournir un aperçu des hackathons de politique, leur définition et leur pertinence dans l'élaboration 
                                                                    des politiques. <br>
                                                                    •	Expliquez les différentes étapes de l'organisation et de la participation à un hackathon de politique, 
                                                                    y compris la planification et la préparation, l'idéation et la résolution de problèmes, la collaboration 
                                                                    et le travail d'équipe, le pitch et la présentation, ainsi que la mise en œuvre et l'impact. <br>
                                                                    •	Dotez les participants des compétences et des connaissances nécessaires pour organiser et participer 
                                                                    à des hackathons de politiques réussis, y compris une communication efficace, la constitution d'équipes, 
                                                                    la résolution de problèmes et la présentation. <br>
                                                                    •	Fournir des exemples de hackathons de politiques réussis et des études de cas qui démontrent l'impact 
                                                                    et les avantages des hackathons de politiques. <br>
                                                                    •	Favoriser une culture de collaboration intersectorielle, d'innovation et de transparence dans 
                                                                    l'élaboration des politiques. <br>
                                                                    •	Encouragez les participants à appliquer leurs compétences et leurs connaissances aux défis de 
                                                                    politiques du monde réel et à avoir un impact positif sur la société. <br>
                                                                    Dans l'ensemble, l'objectif de ce module de formation est de fournir aux participants les outils, 
                                                                    les connaissances et la confiance nécessaires pour organiser et participer à des hackathons de 
                                                                    politiques réussis qui peuvent générer un impact positif sur la société et promouvoir l'innovation et 
                                                                    la collaboration dans l'élaboration des politiques.

                                                                </span>

                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    


                                                    <div class="card-body reveal fade-left">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Public cible du module de formation</span> </li>
                                                                    </ul> 
                                                                <span>
                                                                    
                                                                Le public cible de ce module de formation sur les hackathons politiques peut inclure : <br>
                                                                    1.	Décideurs et responsables gouvernementaux responsables de la conception et de la mise en 
                                                                    œuvre des politiques. <br>
                                                                    2.	Innovateurs sociaux, militants et entrepreneurs intéressés par le développement de solutions 
                                                                    politiques innovantes. <br>
                                                                    3.	Organisations à but non lucratif, groupes de réflexion et groupes de défense travaillant sur 
                                                                    des questions liées aux politiques. <br>
                                                                    4.	Universitaires, chercheurs et universitaires intéressés à explorer de nouvelles approches en 
                                                                    matière d'élaboration de politiques. <br>
                                                                    5.	Étudiants et jeunes professionnels cherchant à développer leurs compétences et leurs 
                                                                    connaissances en matière d'innovation et de conception de politiques.


                                                                </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    


                                                    <div class="card-body reveal fade-right">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Modalités de de mise en œuvre du module de formation</span> </li>
                                                                    </ul> 
                                                                <span>
                                                                    
                                                                Les différentes modalités de mise en œuvre de ce module de formation sont : <br>
                                                                    1.	Plateformes d'apprentissage en ligne : le module de formation est dispensé via des 
                                                                    plateformes d'apprentissage en ligne, permettant aux apprenants d'accéder au contenu à 
                                                                    leur rythme et à leur convenance. <br>
                                                                    2.	Ateliers en présentiel : le module de formation est dispensé dans le cadre d'ateliers 
                                                                    en présentiel, où les apprenants peuvent interagir avec le formateur et les autres 
                                                                    participants, participer à des activités pratiques et recevoir des commentaires et un 
                                                                    encadrement personnalisé. <br>
                                                                    3.	Programmes de formation en entreprise : Le module de formation est personnalisé et 
                                                                    dispensé comme un programme de formation en entreprise pour les organisations qui souhaitent 
                                                                    favoriser une culture d'innovation et de collaboration chez leurs employés. <br>
                                                                    4.	Cours académiques : Le module de formation est intégré à des cours académiques dans 
                                                                    diverses disciplines, telles que le design, l'ingénierie, le commerce et les sciences 
                                                                    sociales. <br>
                                                                    5.	Apprentissage à son rythme : le module de formation est mis à disposition sous forme 
                                                                    de ressources d'apprentissage à son rythme, telles que des didacticiels vidéo, des podcasts 
                                                                    ou des livres électroniques, pour les apprenants qui préfèrent apprendre de manière autonome.

                                                                </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  


                                                    <div class="card-body reveal fade-left">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Contenu du module de formation</span> </li>
                                                                    </ul> 
                                                                <span>
                                                                    
                                                                I.	Introduction <br>
                                                                    •	Définition de hackathon de politiques <br>
                                                                    •	Importance des hackathons de politiques <br>
                                                                    •	Objectifs du module de formation <br>
                                                                    II.	Planification et préparation <br>
                                                                    •	Fixer les objectifs <br>
                                                                    •	Définir l'étendue du problème <br>
                                                                    •	Identifier les participants et les parties prenantes <br>
                                                                    •	Bâtir une équipe diversifiée et inclusive <br>
                                                                    •	Choisir le lieu et la logistique <br>
                                                                    •	Préparer le budget <br>
                                                                    III.	Idéation et résolution de problèmes <br>
                                                                    •	Animer des séances de brainstorming <br>
                                                                    •	Encourager la créativité et l'innovation <br>
                                                                    •	Évaluer et sélectionner des idées <br>
                                                                    •	Développer des prototypes et des solutions minimales viables <br>
                                                                    •	Tester et affiner les solutions <br>
                                                                
                                                                </span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 col-lg-6 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                <span>
                                                                IV.	Collaboration et travail d'équipe <br>
                                                                    •	Promouvoir une communication efficace <br>
                                                                    •	Favoriser le travail d'équipe et la collaboration <br>
                                                                    •	Résoudre les conflits et les désaccords <br>
                                                                    •	Encourager les commentaires constructifs <br>
                                                                    •	Bâtir la confiance et le respect entre les membres de l'équipe <br>
                                                                    V.	Lancement et présentation <br>
                                                                    •	Développer un argumentaire convaincant <br>
                                                                    •	Créer des présentations efficaces <br>
                                                                    •	S'engager avec le public <br>
                                                                    •	Répondre aux questions et commentaires <br>
                                                                    •	Affiner et améliorer le pitch <br>
                                                                    VI.	Mise en œuvre et impact <br>
                                                                    •	Élaborer un plan de mise en œuvre <br>
                                                                    •	Définir les indicateurs de réussite et les jalons <br>
                                                                    •	Mesurer et évaluer l'impact <br>
                                                                    •	Communiquer les résultats et les réalisations <br>
                                                                    •	Mettre à l'échelle et reproduire les solutions réussies <br>
                                                                    VII.	Conclusion <br>
                                                                    •	Récapitulatif des principaux plats à emporter <br>
                                                                    •	Plan d'action pour l'organisation d'un hackathon de politique <br>
                                                                    •	Ressources pour un apprentissage et un développement ultérieurs


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
                                </details>
                                <details>
                                    <summary>Design Thinking</summary>
                                    <section id="about">
                                        <div class="card my-3 py-2 text-center border2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <h2 class="h5 mt-2 text-center">MODULE DE FORMATION SUR LE DESIGN THINKING</h2>
                                                    <hr>
                                                    <div class="card-body reveal fade-left">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Accueil et Introduction :</span> </li>
                                                                    </ul> 
                                                                    <span>
                                                                    Bienvenue dans ce module de formation sur le design thinking. Dans le monde d'aujourd'hui, 
                                                                    en évolution rapide et hautement concurrentiel, les entreprises, les organisations et les 
                                                                    particuliers doivent continuellement innover et proposer de nouvelles solutions pour répondre 
                                                                    aux besoins de leurs clients ou utilisateurs. Le design thinking est une approche puissante qui 
                                                                    aide les individus et les équipes à développer des solutions créatives et efficaces à des 
                                                                    problèmes complexes. <br>
                                                                    Dans cette formation, nous explorerons les principes fondamentaux du design thinking et comment 
                                                                    l'appliquer dans la pratique. Nous couvrirons les cinq étapes du design thinking, qui sont 
                                                                    l'empathie, la définition, l'idée, le prototype et le test, ainsi que l'état d'esprit et les 
                                                                    principes du design thinking. À la fin de cette formation, vous comprendrez mieux ce qu'est le 
                                                                    design thinking et comment l'appliquer à votre travail, vos projets et votre vie.


                                                                    </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   

                                                    <div class="card-body reveal fade-left">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Objectifs du module de formation</span> </li>
                                                                    </ul> 
                                                                    <span>
                                                                    Les objectifs de ce module de formation sur le design thinking sont : <br>
                                                                    1.	Introduire les principes et les pratiques du design thinking. <br>
                                                                    2.	Fournir une compréhension des cinq étapes du processus de réflexion 
                                                                    sur le design : empathie, définition, idée, prototype et test. <br>
                                                                    3.	Doter les apprenants d'outils et de techniques pour appliquer le 
                                                                    design thinking dans leur travail ou leurs projets personnels. <br>
                                                                    4.	Développer les compétences des apprenants en résolution de problèmes, 
                                                                    créativité et collaboration. <br>
                                                                    5.	Encourager les apprenants à adopter une approche centrée sur l'utilisateur pour 
                                                                    la résolution de problèmes. <br>
                                                                    6.	Démontrer l'importance de l'empathie et de la recherche utilisateur dans le 
                                                                    processus de design thinking. <br>
                                                                    7.	Mettre l'accent sur la valeur de l'itération et de l'expérimentation dans le 
                                                                    développement de solutions innovantes. <br>
                                                                    8.	Fournir des études de cas et des exemples de design thinking en action dans 
                                                                    diverses industries et disciplines. <br>
                                                                    9.	Favoriser une culture d'innovation et d'amélioration continue au sein des organisations. <br>
                                                                    10.	Encourager les apprenants à appliquer le design thinking aux défis et opportunités du monde réel.
                                                                    
                                                                    </span>                                    
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 col-lg-6 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Cible du module de formation</span> </li>
                                                                    </ul>
                                                                    <span>
                                                                    Les cibles de ce module de formation sur le design thinking sont des individus ou des équipes qui 
                                                                    souhaitent développer leurs compétences en résolution de problèmes et adopter une approche 
                                                                    de l'innovation centrée sur l'utilisateur. Ce module de formation est adapté pour : <br>
                                                                    1.	Professionnels et cadres impliqués dans la conception de produits, la conception de services, 
                                                                    le marketing et l'innovation. <br>
                                                                    2.	Entrepreneurs et fondateurs de startups qui souhaitent développer des solutions innovantes 
                                                                    répondant aux besoins de leurs clients. <br>
                                                                    3.	Les éducateurs et les formateurs qui souhaitent intégrer les principes du Design Thinking 
                                                                    dans leurs pratiques d'enseignement et d'apprentissage. <br>
                                                                    4.	Étudiants et diplômés qui souhaitent en savoir plus sur le design thinking et comment 
                                                                    l'appliquer dans leur future carrière. <br>
                                                                    5.	Les organisations à but non lucratif et les entreprises sociales qui recherchent des solutions 
                                                                    innovantes aux défis sociaux et environnementaux. <br>
                                                                    6.	Toute personne souhaitant développer ses compétences en résolution de problèmes, sa 
                                                                    créativité et ses capacités de collaboration. <br>
                                                                    Ce module de formation convient aux débutants qui ont peu ou pas de connaissances préalables en matière de design thinking, ainsi qu'aux apprenants intermédiaires qui souhaitent approfondir leur compréhension et leurs compétences dans l'application du design thinking aux défis du monde réel.

                                                                    </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 


                                                    <div class="card-body reveal fade-left">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-6 pb-2">
                                                            <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                <p class="h5 m-2" style="text-align: justify;">
                                                                <ul style="text-align: justify;">
                                                                    <li><span style="font-weight: bold;">Modalités de formation</span> </li>
                                                                </ul> 
                                                                <span>
                                                                Les différentes modalités de ce module de formation sur le design thinking sont : <br>
                                                                1.	Plateformes d'apprentissage en ligne : le module de formation est dispensé via des 
                                                                plateformes d'apprentissage en ligne, permettant aux apprenants d'accéder au contenu à 
                                                                leur rythme et à leur convenance. <br>
                                                                2.	Ateliers en présentiel : le module de formation est dispensé dans le cadre d'ateliers 
                                                                en présentiel, où les apprenants peuvent interagir avec le formateur et les autres 
                                                                participants, participer à des activités pratiques et recevoir des commentaires et 
                                                                un encadrement personnalisé. <br>
                                                                3.	Programmes de formation en entreprise : Le module de formation est personnalisé et 
                                                                dispensé comme un programme de formation en entreprise pour les organisations qui 
                                                                souhaitent favoriser une culture d'innovation et de résolution de problèmes chez 
                                                                leurs employés. <br>
                                                                4.	Cours académiques : Le module de formation est intégré à des cours académiques 
                                                                dans diverses disciplines, telles que le design, l'ingénierie, le commerce et les 
                                                                sciences sociales. <br>
                                                                5.	Apprentissage à son rythme : le module de formation est mis à disposition sous 
                                                                forme de ressources d'apprentissage à son rythme, telles que des didacticiels vidéo, 
                                                                des podcasts ou des livres électroniques, pour les apprenants qui préfèrent apprendre 
                                                                de manière autonome. <br>
                                                                Quel que soit le débouché, le module de formation doit fournir aux apprenants des 
                                                                opportunités de pratiquer et d'appliquer les principes et les pratiques du design 
                                                                thinking à des défis du monde réel, par le biais d’études de cas, de projets de 
                                                                groupe et de mécanismes de rétroaction.
                                                                    
                                                                </span>                     
                                                                </p>
                                                                <ul style="text-align: justify;">
                                                                    <li><span style="font-weight: bold;">Contenu du module</span> </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li><span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">Introduction</span> 
                                                                        <ul>
                                                                            <li>
                                                                                Brève explication de ce qu'est le design thinking et pourquoi c'est important
                                                                            </li>
                                                                            <li>
                                                                                Objectifs du module de formation
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Section 1 : Comprendre le Design Thinking
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Définition et historiques du design thinking
                                                                            </li>
                                                                            <li>
                                                                                Les cinq étapes du design thinking (empathie, définition, idée, prototype, test)
                                                                            </li>
                                                                            <li>
                                                                            L'état d'esprit et les principes du design thinking
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 col-lg-6 pb-2">
                                                            <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                <p class="h5 m-2" style="text-align: justify;">
                                                            
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                        Section 2 : Empathie
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Qu'est-ce que l'empathie et pourquoi c'est important
                                                                            </li>
                                                                            <li>
                                                                                Techniques d'empathie (entretiens, observations, sondages, etc.)
                                                                            </li>
                                                                            <li>
                                                                                Création de personas et de parcours utilisateurs
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Section 3 : Définir le problème
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Définition de l'énoncé du problème
                                                                            </li>
                                                                            <li>
                                                                                Création d'une déclaration de point de vue (POV)
                                                                            </li>
                                                                            <li>
                                                                            Identifier et prioriser les besoins de l'utilisateur
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Section 4 : Idéation/Générer des idées de solutions
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Techniques de génération d'idées (brainstorming, mind mapping, SCAMPER, etc.)
                                                                            </li>
                                                                            <li>
                                                                                Prioriser et sélectionner les idées
                                                                            </li>
                                                                            <li>
                                                                                Création d'un énoncé de concept
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Section 5 : Prototypage
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Types de prototypes (basse-fidélité, haute-fidélité, numérique, physique, etc.)
                                                                            </li>
                                                                            <li>
                                                                                Outils de prototypage (papier, carton, impression 3D, logiciel, etc.)
                                                                            </li>
                                                                            <li>
                                                                                Tester le prototype et recueillir les commentaires
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Section 6 : Tests
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Importance des tests et des itérations                                                
                                                                            </li>
                                                                            <li>
                                                                                Méthodes de test (tests utilisateurs, tests A/B, sondages, etc.)
                                                                            </li>
                                                                            <li>
                                                                                Analyser et synthétiser les retours
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Section 7 : Appliquer le Design Thinking
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Études de cas et exemples concrets de design thinking en action
                                                                            </li>
                                                                            <li>
                                                                                Comment le design thinking peut être appliqué dans diverses industries et disciplines
                                                                            </li>
                                                                            <li>
                                                                                Bonnes pratiques pour mettre en œuvre le design thinking dans une organisation
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>


                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Conclusion :
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Résumé des points clés
                                                                            </li>
                                                                            <li>
                                                                                Importance de la pratique continue et de l'application du design thinking
                                                                            </li>
                                                                            <li>
                                                                                Ressources supplémentaires et lectures recommandées.
                                                                            </li>
                                                                        </ul>
                                                                    </li>
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
                                </details>
                                <details>
                                    <summary>Management Agile</summary>
                                    <section id="about">
                                        <div class="card my-3 py-2 text-center border2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <h2 class="h5 mt-2 text-center">MODULE DE FORMATION SUR LE MANAGEMENT AGILE</h2>
                                                    <hr>
                                                    <div class="card-body reveal fade-left">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Accueil et Introduction :</span> </li>
                                                                    </ul> 
                                                                    <span>
                                                                    Bienvenue dans le module de formation consacré au management agile ! Dans cette 
                                                                        formation, nous explorerons les principes et pratiques clés du management agile, 
                                                                        qui est une approche moderne de la gestion de projets et d'équipes de manière 
                                                                        flexible et adaptable. <br>
                                                                        Le management agile est devenu de plus en plus populaire ces dernières années, car 
                                                                        les organisations ont reconnu la nécessité d'être plus réactives au changement et de 
                                                                        fournir plus rapidement de la valeur aux clients. En adoptant les principes et les 
                                                                        pratiques de gestion agile, les équipes peuvent travailler de manière plus collaborative, 
                                                                        communiquer plus efficacement et être plus réactives aux exigences changeantes. <br>
                                                                        Tout au long de cette formation, nous aborderons une gamme de sujets liés au management 
                                                                        agile, notamment Scrum, Kanban, Lean Startup et Agile Leadership. Nous explorerons également 
                                                                        certains des défis courants liés à l'adoption de pratiques Agiles et fournirons des stratégies 
                                                                        pour une adoption réussie. <br>
                                                                        À la fin de cette formation, vous devriez avoir une bonne compréhension des concepts et 
                                                                        pratiques clés du management agile et être en mesure de les appliquer dans votre propre lieu 
                                                                        de travail pour améliorer la collaboration, la communication et la productivité de l'équipe. 

                                                                    </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   

                                                    <div class="card-body reveal fade-left">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Objectifs du module de formation</span> </li>
                                                                    </ul> 
                                                                        <span>
                                                                        L'objectif de ce module de formation en Management Agile est de fournir aux participants 
                                                                        une compréhension des principes et des pratiques du Management Agile, ainsi que de la 
                                                                        manière dont ils peuvent être appliqués au travail pour améliorer les performances de 
                                                                        l'équipe, la satisfaction des clients et les résultats du projet. <br>
                                                                        À la fin de ce module de formation, les participants devraient être capables de : <br>
                                                                        1.	Définir les principes Agile et expliquer leur valeur dans la gestion de projet ; <br>
                                                                        2.	Comprendre et appliquer les pratiques Agile, y compris Scrum, Kanban et Lean Startup ; <br>
                                                                        3.	Mettre en œuvre des méthodologies Agiles pour une livraison plus rapide de la valeur aux 
                                                                        clients ; <br>
                                                                        4.	Pratiquer des techniques efficaces de leadership et de coaching Agile ; <br>
                                                                        5.	Relever les défis de l'adoption Agile et favoriser une culture d'amélioration continue.
                                                                        </span>
                                                                        <ul style="text-align: justify;">
                                                                        <li><span style="font-weight: bold;">Cible du module de formation</span> </li>
                                                                    </ul>                          
                                                                    </p>
                                                                    
                                                                
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 col-lg-6 pb-2">
                                                                <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                    <p class="h5 m-2" style="text-align: justify;">
                                                                    </p>
                                                                    <p style="text-align: justify;">
                                                                <span>
                                                                Les cibles de ce module de formation sur le design thinking sont des individus ou 
                                                                    des équipes qui souhaitent développer leurs compétences pour améliorer la collaboration 
                                                                    et la communication en équipe et fournir plus efficacement des produits ou services de haute 
                                                                    qualité aux clients et usagers. Ce module de formation est adapté pour : <br>
                                                                    1.	Les cadres et managers qui sont chargés de la définition et de la supervision des buts et 
                                                                    objectifs stratégiques de l'organisation ; <br>
                                                                    2.	Les chefs de projet et chefs d'équipe qui souhaitent améliorer leurs compétences en gestion de 
                                                                    projet et adopter des méthodologies agiles <br>
                                                                    3.	Les membres de l'équipe de développement qui souhaitent apprendre à travailler de manière 
                                                                    collaborative et efficace dans un environnement agile <br>
                                                                    4.	Les dirigeants et les parties prenantes qui souhaitent comprendre les avantages de la gestion 
                                                                    agile et comment soutenir les équipes agiles <br>
                                                                    5.	Les entrepreneurs et fondateurs de startups qui souhaitent développer des solutions innovantes 
                                                                    répondant aux besoins de leurs clients. <br>
                                                                    6.	Toute personne intéressée à en savoir plus sur la gestion agile et comment elle peut être 
                                                                    appliquée dans son environnement de travail.  <br>
                                                                    Ce module de formation convient aux débutants qui ont peu ou pas de connaissances préalables en matière de management agile, ainsi qu'aux apprenants intermédiaires qui souhaitent approfondir leur compréhension et leurs compétences dans l'application du management agile.

                                                                </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 


                                                    <div class="card-body reveal fade-left">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-6 pb-2">
                                                            <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                <p class="h5 m-2" style="text-align: justify;">
                                                                <ul style="text-align: justify;">
                                                                    <li><span style="font-weight: bold;">Modalités de formation</span> </li>
                                                                </ul> 
                                                                <span>
                                                                Les différentes modalités de mise en œuvre de ce module de formation sont : <br>
                                                                1.	Plateformes d'apprentissage en ligne : le module de formation est dispensé via des 
                                                                plateformes d'apprentissage en ligne, permettant aux apprenants d'accéder au contenu à 
                                                                leur rythme et à leur convenance. <br>
                                                                2.	Ateliers en présentiel : le module de formation est dispensé dans le cadre d'ateliers 
                                                                en présentiel, où les apprenants peuvent interagir avec le formateur et les autres 
                                                                participants, participer à des activités pratiques et recevoir des commentaires et un 
                                                                encadrement personnalisé. <br>
                                                                3.	Programmes de formation en entreprise : Le module de formation est personnalisé et 
                                                                dispensé comme un programme de formation en entreprise pour les organisations qui 
                                                                souhaitent favoriser une culture d'innovation et de collaboration chez leurs employés. <br>
                                                                4.	Cours académiques : Le module de formation est intégré à des cours académiques dans 
                                                                diverses disciplines, telles que le design, l'ingénierie, le commerce et les sciences 
                                                                sociales. <br>
                                                                5.	Apprentissage à son rythme : le module de formation est mis à disposition sous 
                                                                forme de ressources d'apprentissage à son rythme, telles que des didacticiels vidéo, 
                                                                des podcasts ou des livres électroniques, pour les apprenants qui préfèrent apprendre 
                                                                de manière autonome.

                                                                </span>                      
                                                                </p>
                                                                <ul style="text-align: justify;">
                                                                    <li><span style="font-weight: bold;">Contenu du module</span> </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li><span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">Introduction</span> 
                                                                        <ul>
                                                                            <li>Bienvenue et introduction au cours 
                                                                            </li>
                                                                            <li>
                                                                                Présentation du Management agile
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Section 1 : Qu'est-ce que le Management agile ? 
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Définition et historique du Management Agile
                                                                            </li>
                                                                            <li>
                                                                                Principes et valeurs clés du Management Agile 
                                                                            </li>
                                                                            <li>
                                                                                Comparaison avec les approches traditionnelles de gestion de projet
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                        Section 2 : Méthodologies agiles
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Scrum 
                                                                                <ul>
                                                                                    <li>Rôles Scrum (Product Owner, Scrum Master, Development Team) </li>
                                                                                    <li>Événements Scrum (Sprint, Sprint Planning, Daily Scrum, Sprint Review, Sprint Retrospective) </li>
                                                                                    <li>
                                                                                    Artefacts Scrum (Product Backlog, Sprint Backlog, Increment ) 
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                Kanban
                                                                                <ul>
                                                                                    <li>Définition et principes du Kanban </li>
                                                                                    <li>Visualiser le travail avec un tableau Kanban </li>
                                                                                    <li>Gérer les flux avec des limites WIP </li>
                                                                                </ul> 
                                                                            </li>
                                                                            <li>
                                                                                Lean Startup 
                                                                                <ul>
                                                                                    <li>Définition et principes du Lean Startup </li>
                                                                                    <li>Valider les hypothèses par des expérimentations </li>
                                                                                    <li>Pivoter ou persévérer dans les décisions</li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 col-lg-6 pb-2">
                                                            <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                                                <p class="h5 m-2" style="text-align: justify;">
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                        Section 3 : Avantages du Management agile 
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Livraison plus rapide de la valeur aux clients
                                                                            </li>
                                                                            <li>
                                                                                Amélioration de la collaboration et de la communication 
                                                                            </li>
                                                                            <li>
                                                                                Meilleure adaptabilité au changement 
                                                                            </li>
                                                                            <li>Augmentation de la satisfaction et de la motivation de l'équip</li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                        Section 4 : Pratiques agiles 
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                User Stories 
                                                                                <ul>
                                                                                    <li>Définition et caractéristiques des User Stories</li>
                                                                                    <li>Rédaction des User Stories en utilisant les critères INVEST </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                Intégration et livraison continues 
                                                                                <ul>
                                                                                    <li>Définition et avantages de l'intégration et de la livraison continues </li>
                                                                                    <li>Implémentation de l'intégration et de la livraison continues avec des outils tels que Jenkins et GitLab</li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                Développement piloté par les tests 
                                                                                <ul>
                                                                                    <li>Définition et avantages du développement piloté par les tests </li>
                                                                                    <li>Rédaction de tests avant le code </li>
                                                                                    <li>Refactorisation du code pour améliorer la conception</li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                        Section 5 : Leadership Agile 
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Servant Leadership
                                                                                <ul>
                                                                                    <li>Définition et principes du Servant Leadership </li>
                                                                                    <li>Diriger avec empathie et humilité </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                Facilitation
                                                                                <ul>
                                                                                    <li>Définition et principes de la Facilitation</li>
                                                                                    <li>Techniques d'animation de réunions et d'ateliers</li>
                                                                                </ul> 
                                                                            </li>
                                                                            <li>
                                                                                Coaching 
                                                                                <ul>
                                                                                    <li>Définition et principes du Coaching</li> 
                                                                                    <li>Coaching pour le développement individuel et d'équipe</li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                        Section 6 : Adoption agile 
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Défis de l'adoption agile 
                                                                                <ul>
                                                                                    <li>Résistance au changement </li>
                                                                                    <li>Manque de confiance et de transparence</li>
                                                                                    <li>Formation et coaching inadéquats    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                Stratégies pour une adoption agile réussie 
                                                                                <ul>
                                                                                    <li>Commencer petit et itérer </li>
                                                                                    <li>Construire une culture de confiance et de transparence </li>
                                                                                    <li>Investir dans la formation et le coaching</li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                                <ul style="text-align: justify;">
                                                                    <li>
                                                                        <span style="font-weight: bold;text-decoration:none!important;background: #9e9ba1 !important; ">
                                                                            Conclusion :
                                                                        </span> 
                                                                        <ul>
                                                                            <li>
                                                                                Résumé des concepts et pratiques clés 
                                                                            </li>
                                                                            <li>
                                                                                Prochaines étapes pour appliquer le Management agile sur le lieu de travail
                                                                            </li>
                                                                        </ul>
                                                                    </li>
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
                                </details>
                                <details>
                                    <summary>Policy Design</summary>
                                    <p>Learning with Hal and Eve exceeded all of my wildest fantasies. All they did was stick a USB in. They promised that it was a brand new USB, so we know there were no viruses on it. The Russians had nothing to do with it. This has
                                </details>
                            </aside>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    
    </div>

@endsection
