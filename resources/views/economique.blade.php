@extends('layouts.app')

@section('content')
    <div class="banner-interne" style="background-image: url({{ asset('skins/default/images/img/bg-licenciement.jpg') }});">
        <div class="container">
            <div class="caption-banner">
                <h1>Licenciement</h1>
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
                                <h2 style="text-align: left;">Motif Économique<br></h2>
                                <p><strong>Un licenciement pour motif économique est un licenciement prononcé pour un
                                        motif non inhérent à la personne du salarié, pour une raison d’ordre économique
                                        en conformité avec les articles L 1233-3 et L1233-4 du Code du
                                        travail:</strong><br>« Constitue un licenciement pour motif économique le
                                    licenciement effectué par un employeur pour un ou plusieurs motifs non inhérents à
                                    la personne du salarié résultant d'une suppression ou transformation d'emploi ou
                                    d'une modification, refusée par le salarié, d'un élément essentiel du contrat de
                                    travail, consécutives notamment à des difficultés économiques ou à des mutations
                                    technologiques.<br>« Le licenciement pour motif économique d'un salarié ne peut
                                    intervenir que lorsque tous les efforts de formation et d'adaptation ont été
                                    réalisés et que le reclassement de l'intéressé ne peut être opéré dans l'entreprise
                                    ou dans les entreprises du groupe auquel l'entreprise appartient.<br>Le reclassement
                                    du salarié s'effectue sur un emploi relevant de la même catégorie que celui qu'il
                                    occupe ou sur un emploi équivalent. A défaut, et sous réserve de l'accord exprès du
                                    salarié, le reclassement s'effectue sur un emploi d'une catégorie inférieure.<br>Les
                                    offres de reclassement proposées au salarié sont écrites et précises.
                                    »<br><strong>Le licenciement individuel pour motif économique se caractérise
                                        par:</strong></p>
                                <ul>
                                    <li>l’instauration de délais de notification du licenciement différents selon que le
                                        salarié concerné appartient ou non au personnel d’encadrement;</li>
                                    <li>l’obligation de reclassement du salarié sur un emploi équivalent, ou, sous
                                        réserve de son accord, sur un emploi d’une catégorie inférieure;</li>
                                    <li>l’obligation de procéder à l’adaptation ou à la formation du salarié au poste;
                                    </li>
                                    <li>une information de la direction départementale du travail et de l’emploi.</li>
                                </ul>
                                <p><strong>D’après les articles L 1233-3 et L1233-4 du Code du travail</strong><br>«
                                    Constitue un licenciement pour motif économique le licenciement effectué par un
                                    employeur pour un ou plusieurs motifs non inhérents à la personne du salarié
                                    résultant d'une suppression ou transformation d'emploi ou d'une modification,
                                    refusée par le salarié, d'un élément essentiel du contrat de travail, consécutives
                                    notamment à des difficultés économiques ou à des mutations technologiques.<br>« Le
                                    licenciement pour motif économique d'un salarié ne peut intervenir que lorsque tous
                                    les efforts de formation et d'adaptation ont été réalisés et que le reclassement de
                                    l'intéressé ne peut être opéré dans l'entreprise ou dans les entreprises du groupe
                                    auquel l'entreprise appartient.<br>Le reclassement du salarié s'effectue sur un
                                    emploi relevant de la même catégorie que celui qu'il occupe ou sur un emploi
                                    équivalent. A défaut, et sous réserve de l'accord exprès du salarié, le reclassement
                                    s'effectue sur un emploi d'une catégorie inférieure.<br>Les offres de reclassement
                                    proposées au salarié sont écrites et précises. »<br>&nbsp;<br><strong>Pour qu’un
                                        licenciement économique soit valable:</strong></p>
                                <ul>
                                    <li>il doit avoir une cause qui est étrangère à la personne du salarié;</li>
                                    <li>l’employeur doit démontrer que le licenciement est justifié par des raisons
                                        d’ordre économique. La Cour de cassation a précisé que les difficultés
                                        économiques invoquées doivent être réelles (Cass. soc., 12 nov. 1997, no
                                        95-42.148) et constituer la raison véritable du licenciement (Cass. soc., 7
                                        janv. 1998, no 95-43.134).</li>
                                </ul>
                                <p><strong>Exemples de difficultés économiques:</strong></p>
                                <ul>
                                    <li>la mise en redressement judiciaire (Cass. soc., 25 avr. 1990, no 87-43.314,
                                        Bull. civ. V, no 191) ;</li>
                                    <li>l‘état virtuel de cessation de paiement (Cass. soc., 20 nov. 1991, no 89-45.576,
                                        Bull. civ. V, no 511) ;</li>
                                    <li>les pertes financières (Cass. soc., 12 déc. 1991, no 90-45.847, Bull. civ. V, no
                                        581; Cass. soc., 12 janv. 1994, no 92-41.687; Cass. soc., 6 juill. 1994, no
                                        93-40.497) ;</li>
                                    <li>les graves difficultés de trésorerie (Cass. soc., 10 juill. 1991, no 89-44.792;
                                        Cass. soc., 26 janv. 1994, no 92-40.252) ;</li>
                                    <li>la baisse d’activité de l’entreprise (Cass. soc., 7 nov. 1990, no 89-45.671;
                                        Cass. soc., 29 mai 1991, no 88-41.911 ; Cass. soc., 2 juill. 1992, no 91-40.294
                                        ; Cass. soc., 3 mai 1994, no 92-44.421; Cass. soc., 11 juill. 1994, no
                                        93-40.506) ;</li>
                                    <li>la baisse de rentabilité de l’entreprise malgré les mesures prises dans le cadre
                                        d’une restructuration (Cass. soc., 3 mai 2001, no 99-41.558) ;</li>
                                    <li>la baisse du chiffre d’affaires d’un cabinet d’avocats entraînant une
                                        détérioration des résultats (Cass. soc., 6 avr. 2004, no 01-46.898 D).</li>
                                    <li>L'importance et la persistance de la chute du chiffre d'affaires et du résultat
                                        net sur plusieurs exercices comptables, la réduction drastique des concours
                                        bancaires voire le refus d'une banque, la prise de mesures draconiennes pour
                                        réduire les charges d'exploitation et assurer la pérennité de l'entreprise
                                        rendant nécessaire la suppression d'emplois (Cass. Soc., 23 octobre 2014,
                                        n°13-22.008).</li>
                                </ul>
                                <h2>Procédure</h2>
                                <ol>
                                    <li><strong>Licenciement individuel</strong>
                                        <ul>
                                            <li>Le licenciement doit être précédé de la convocation à un entretien
                                                préalable dans les formes de l’article L 1232-2 du Code du travail.</li>
                                            <li>La convocation à l’entretien préalable droit être faite soit par lettre
                                                recommandée avec accusé de réception, soit par lettre remise en main
                                                propre contre décharge.</li>
                                            <li>La lettre de licenciement ne peut être expédiée moins de 7 jours
                                                ouvrables après la date pour laquelle le salarié a été convoqué ou 15
                                                jours ouvrables pour les cadres en application des dispositions de
                                                l’article L 1233-15 du Code du travail.</li>
                                            <li>La lettre de licenciement doit être précisément motivée, sinon la
                                                responsabilité de l’employeur peut être engagée.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Licenciement collectif de moins de 10 salariés</strong><br>Selon les
                                        termes de l’article L 1233-8 du Code du travail :<ul>
                                            <li>« L'employeur qui envisage de procéder à un licenciement collectif pour
                                                motif économique de moins de dix salariés dans une même période de
                                                trente jours réunit et consulte le comité d'entreprise dans les
                                                entreprises de cinquante salariés et plus, les délégués du personnel
                                                dans les entreprises de moins de cinquante salariés, dans les conditions
                                                prévues par la présente sous-section. »</li>
                                            <li>Entretien préalable et notification du licenciement et information de
                                                l’administration du travail.</li>
                                            <li>Les règles applicables à l’entretien préalable et à la notification du
                                                licenciement sont identiques à celles applicables au licenciement
                                                économique individuel.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Licenciement de plus de 10 salariés</strong><br>La procédure et les
                                        obligations qui en découlent diffèrent selon :<ul>
                                            <li>la taille de l’entreprise (moins ou plus de 50 salariés) ;</li>
                                            <li>la structure de l’entreprise ;</li>
                                            <li>le volume du licenciement ;</li>
                                            <li>la présence ou l’absence d’institutions représentatives du personnel ;
                                            </li>
                                            <li>que le comité d’entreprise fait ou non appel à un expert-comptable ;
                                            </li>
                                            <li>qu’un ou plusieurs salariés protégés sont compris dans le projet de
                                                licenciement.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <p><strong>Sanctions</strong><br>Si les motifs économiques d’un licenciement ne sont pas
                                    prouvés, le licenciement sera considéré comme dépourvu de cause réelle et sérieuse.
                                    Le salarié peut demander le paiement d’une indemnité pour licenciement sans cause
                                    réelle et sérieuse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
