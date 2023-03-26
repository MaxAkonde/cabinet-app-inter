@extends('layouts.app')

@section('content')
<div class="banner-interne" style="background-image: url({{ asset('skins/default/images/img/bg-expatriation.jpg') }});">
    <div class="container">
        <div class="caption-banner">
            <h1>Expatriation</h1>
        </div>
    </div>
</div>
<div class="wrap">
    <div id="PageArt" class="section-int">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-sect-int">
                        <div>
                            <h2 style="text-align: left;">La protection sociale du détaché<br></h2>
                            <p><strong>Principe :</strong> les lois de sécurité sociale sont d’application
                                territoriale : les prestations ne peuvent en principe être versées que sur le
                                territoire de l’Etat dans lequel elles ont été acquises.<br>&nbsp;<br>Tout travail
                                exécuté en France implique l’assujettissement du travailleur au régime général
                                français quelle que soit la nationalité et le lieu de résidence tant du salarié
                                concerné que de son employeur. Inversement, tout salarié français envoyé à
                                l’étranger, quelle que soit la durée de son séjour, cesse de relever du régime
                                général français de sécurité sociale.<br>&nbsp;<br>Le travailleur migrant risque
                                alors d’être pénalisé.<br>&nbsp;<br>D’une part, en ce qui concerne l’ouverture des
                                droits, les prestations de sécurité sociale ne s’obtiennent généralement qu’après
                                une certaine durée de cotisation ou de résidence sur le territoire d’un Etat : c’est
                                le « délai de carence ».<br>D’autre part, en ce qui concerne le calcul des
                                prestations, le montant des pensions d’invalidité ou de retraite, des allocations de
                                chômage et des rentes accidents du travail est également fonction de la durée
                                d’affiliation.<br>&nbsp;<br>C’est dire que les droits du travailleur détaché
                                risquent d’être inférieurs à ceux d’un travailleur sédentaire.<br>&nbsp;<br>Aussi,
                                la France a-t-elle conclu des conventions avec certains pays, et il existe des
                                textes communautaires qui organisent une certaine coordination des régimes de
                                sécurité sociale.<br>&nbsp;<br><strong>A partir de là, 3 hypothèses peuvent se
                                    présenter :</strong><br>Soit le salarié est détaché dans un pays non-membre de
                                l’UE ou de l’EEE (Espace économique européen : Islande, Suisse, Norvège,
                                Liechtenstein), et non lié à la France par une convention bilatérale de sécurité
                                sociale. C’est un détachement légal. Dans ce cas, il doit être assujetti au régime
                                local de sécurité sociale. Il peut cependant être également maintenu au régime
                                français par deux alternatives :</p>
                            <ul>
                                <li>Maintien légal en vertu du Code de sécurité sociale : régime du détachement
                                    légal : art. L. 761-2 C. SS : ce régime est soumis à une limite de trois ans,
                                    renouvelable une fois, soit six ans au total. Pour en bénéficier, encore faut-il
                                    que l’employeur, domicilié en France, s’engage à continuer à rémunérer le
                                    salarié et à s’acquitter des cotisations sociales au régime français. Il doit
                                    également faire une demande de détachement légal auprès de la CPAM et obtenir un
                                    avis favorable de celle-ci.</li>
                                <li>Maintien volontaire par le biais d’une affiliation à des caisses spécifiques de
                                    sécurité sociale, en principe réservées aux expatriés (Caisse des français à
                                    l’étranger et Caisse de retraite des expatriés) : cette affiliation volontaire
                                    est soumise à une durée minimale de six mois.</li>
                            </ul>
                            <p>Soit le salarié est envoyé dans un pays non-membre de l’UE ou de l’EEE mais ayant
                                conclu une convention bilatérale de sécurité sociale avec la France. C’est le
                                détachement conventionnel. Là encore, pour bénéficier du détachement conventionnel,
                                encore faut-il que l’employeur ait obtenu l’avis favorable de la CPAM, ainsi qu’un
                                formulaire conventionnel, appelé « certificat de détachement », dont un exemplaire
                                devra être remis au salarié.Dans ce cas, l’assujettissement au régime local n’est
                                pas obligatoire. Généralement, la convention prévoit une période de maintien
                                possible au régime français. Par exemple, cette période initiale de maintien est de
                                six mois pour le Cameroun, de trois ans pour le Canada, et de cinq ans pour un
                                détachement aux Etats-Unis. Et, à l’expiration de cette période de « détachement
                                conventionnel », le salarié pourra bénéficier du détachement légal (ci-dessus) si et
                                seulement si la durée maximale de six ans n’est pas écoulée, pour la durée restant à
                                courir.<br>&nbsp;<br>Soit le salarié est envoyé dans un pays de l’UE ou de l’EEE.
                                C’est le détachement communautaire.<br>Dans ce cas, l’assujettissement au régime
                                local n’est pas obligatoire. Ce sont des Règlements CE qui s’appliquent. A
                                l’origine, un Règlement 1408/71 du 14 juin 1971 applicable aux travailleurs salariés
                                et non-salariés, ressortissants d’un Etat membre, a prévu le « détachement
                                communautaire ». Ce règlement a été abrogé pour être remplacé par un Règlement CE
                                883/2004 du 29 avril 2004 destiné à simplifier les règles existantes et à faciliter
                                la migration des travailleurs dans l’espace communautaire.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection