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
                                <div style="text-align:left">
                                    <div>
                                        <div>
                                            <div>
                                                <div>
                                                    <h2>Motif Personnel<br></h2>
                                                    <p>Le licenciement pour motif personnel est celui qui est prononcé
                                                        pour un motif « inhérent à la personne du salarié ».<br>La Cour
                                                        de cassation a considéré que le licenciement pour une cause
                                                        inhérente à la personne du salarié doit être fondé sur des
                                                        éléments objectifs imputables à ce salarié (Cass. Soc., 21
                                                        septembre 2006, n°05-41.155).<br>&nbsp;<br><strong>L’article L
                                                            1232-1 du Code du travail prévoit que</strong><br>« tout
                                                        licenciement pour motif personnel [...] est justifié par une
                                                        cause réelle et sérieuse ».<br>&nbsp;<br><strong>L’article L
                                                            1235-1 du Code du travail ajoute que :</strong><br>« En cas
                                                        de litige, le juge, à qui il appartient d’apprécier la
                                                        régularité de la procédure suivie et le caractère réel et
                                                        sérieux des motifs invoqués par l’employeur, forme sa conviction
                                                        au vu des éléments fournis par les parties après avoir ordonné,
                                                        au besoin, toutes les mesures d’instruction qu’il estime
                                                        utiles.<br>Si un doute subsiste, il profite au salarié.
                                                        »<br>&nbsp;<br><strong>La cause du licenciement doit:</strong>
                                                    </p>
                                                    <ul>
                                                        <li>Être objective: « Seuls ces éléments objectifs peuvent
                                                            constituer une cause de licenciement, mais non la perte de
                                                            confiance qui a pu en résulter pour l’employeur (Cass. soc.,
                                                            29 mai 2001, no 98-46.341, Bull civ. V, no 183, p. 144) »;
                                                        </li>
                                                        <li>Exister: « le motif invoqué doivent être établis (Cass.
                                                            soc., 9 avr. 1987, no 84-43.357) »;</li>
                                                        <li>Être exacte le motif allégué par l’employeur ne doit pas
                                                            servir à dissimuler la véritable cause du licenciement
                                                            (Cass. Soc., 23 octobre 1991, n°88-44.099 ; Cass. Soc., 9
                                                            juin 1998, n°96-40.390);</li>
                                                        <li>Être sérieuse: « ne satisfait pas à cette exigence la lettre
                                                            de licenciement qui indique au salarié qu’il est licencié
                                                            pour insuffisance professionnelle mais que cette mesure sera
                                                            réformée si l’intéressé redresse la situation d’ici la fin
                                                            du préavis (Cass. soc., 23 mai 2000, no 98-40.634, Bull.
                                                            civ. V, no 195) ».</li>
                                                    </ul>
                                                    <p>Le tribunal peut aussi ordonner l’affichage et la publication du
                                                        jugement.<br>&nbsp;<br><strong>L’entretien
                                                            préalable</strong><br>L’entretien préalable doit en principe
                                                        avoir lieu pendant les heures de travail sauf contraintes
                                                        inhérentes à des conditions particulières de
                                                        travail.<br>&nbsp;<br><strong>L’article L 1232-2 du Code du
                                                            travail prévoit que</strong><br>« L’employeur qui envisage
                                                        de licencier un salarié le convoque, avant toute décision, à un
                                                        entretien préalable.<br>La convocation est effectuée par lettre
                                                        recommandée ou par lettre remise en main propre contre décharge.
                                                        Cette lettre indique l’objet de la convocation.<br>L’entretien
                                                        préalable ne peut avoir lieu moins de cinq jours ouvrables après
                                                        la présentation de la lettre recommandée ou la remise en main
                                                        propre de la lettre de convocation. »<br>&nbsp;<br><strong>De
                                                            même, les articles L 1232-3 et L 1232-4 du Code du travail
                                                            disposent que</strong><br>« Au cours de l’entretien
                                                        préalable, l’employeur indique les motifs de la décision
                                                        envisagée et recueille les explications du salarié.»<br>« Lors
                                                        de son audition, le salarié peut se faire assister par une
                                                        personne de son choix appartenant au personnel de
                                                        l’entreprise.<br>Lorsqu’il n’y a pas d’institutions
                                                        représentatives du personnel dans l’entreprise, le salarié peut
                                                        se faire assister soit par une personne de son choix appartenant
                                                        au personnel de l’entreprise, soit par un conseiller du salarié
                                                        choisi sur une liste dressée par l’autorité
                                                        administrative.<br>La lettre de convocation à l’entretien
                                                        préalable adressée au salarié mentionne la possibilité de
                                                        recourir à un conseiller du salarié et précise l’adresse des
                                                        services dans lesquels la liste de ces conseillers est tenue à
                                                        sa disposition. »<br>&nbsp;<br><strong>La lettre de
                                                            licenciement</strong><br>Le licenciement doit être notifiée
                                                        au salarié par lettre motivée. Cette lettre ne peut être
                                                        expédiée moins de deux jours ouvrables après la date pour
                                                        laquelle le salarié a été convoqué à l’entretien préalable en
                                                        application des dispositions de l’article L 1232-6 du Code du
                                                        travail.<br>&nbsp;<br>L'absence de motif de licenciement dans la
                                                        lettre de licenciement rend le licenciement sans cause réelle et
                                                        sérieuse (Cass. Soc., 12 janvier 1994, n°92-43.521 ; Cass. Soc.,
                                                        12 novembre 2002, n°00-45.676).<br>L'imprécision des motifs de
                                                        licenciement dans la lettre de licenciement est quant à elle
                                                        considérée comme une absence de motif, et rend donc le
                                                        licenciement sans cause réelle et sérieuse (Cass. Soc., 29
                                                        novembre 1990, n°88-44.308 ; Cass. Soc., 25 juin 1997,
                                                        n°95-42.451 ; Cass. Soc., 3 décembre 2003,
                                                        n°01-45.620).<br>&nbsp;<br><strong>Sanctions de l’inobservation
                                                            de la procédure :</strong><br>L’article L 1235-5 du Code du
                                                        travail prévoit que<br>« Ne sont pas applicables au licenciement
                                                        d'un salarié de moins de deux ans d'ancienneté dans l'entreprise
                                                        et au licenciement opéré dans une entreprise employant
                                                        habituellement moins de onze salariés, les dispositions
                                                        relatives :</p>
                                                    <ol>
                                                        <li>Aux irrégularités de procédure, prévues à l'article L.
                                                            1235-2 ;</li>
                                                        <li>A l'absence de cause réelle et sérieuse, prévues à l'article
                                                            L. 1235-3 ;</li>
                                                        <li>Au remboursement des indemnités de chômage, prévues à
                                                            l'article L. 1235-4.</li>
                                                    </ol>
                                                    <p>Le salarié peut prétendre, en cas de licenciement abusif, à une
                                                        indemnité correspondant au préjudice subi.<br>Toutefois, en cas
                                                        de méconnaissance des dispositions des articles L. 1232-4 et L.
                                                        1233-13, relatives à l'assistance du salarié par un conseiller,
                                                        les dispositions relatives aux irrégularités de procédure
                                                        prévues à l'article L. 1235-2 s'appliquent même au licenciement
                                                        d'un salarié ayant moins de deux ans d'ancienneté et au
                                                        licenciement opéré dans une entreprise employant habituellement
                                                        moins de onze salariés. »<br>&nbsp;<br><strong>Concernant les
                                                            sanctions civiles</strong><br>L’entreprise utilisatrice qui
                                                        fait appel au travail temporaire en ne respectant pas les
                                                        dispositions relatives au terme et au renouvellement du contrat,
                                                        peut donc se voir opposer par le salarié les droits attachés à
                                                        un contrat à durée indéterminée prenant effet au premier jour de
                                                        sa mission.<br>Conséquences d’une requalification<br>Tout
                                                        d’abord, l’intéressé bénéficie d’une indemnité de
                                                        requalification d’un montant au moins égal à un mois de salaire
                                                        (article L. 1251-41 du Code du Travail).<br>Surtout, il peut
                                                        faire valoir les droits attachés à un CDI.<br>La fin de la
                                                        mission s’analysera donc en un licenciement sans cause réelle et
                                                        sérieuse (faute de lettre motivée), le salarié aura donc droit
                                                        à:</p>
                                                    <ul>
                                                        <li>une indemnité de licenciement (article L. 1234-9 du Code du
                                                            Travail),</li>
                                                        <li>une indemnité pour licenciement sans cause réelle et
                                                            sérieuse (article L. 1235-2 du Code du Travail),</li>
                                                        <li>et une indemnité compensatrice de préavis (art. L. 1234-5 du
                                                            Code du Travail),</li>
                                                        <li>Auxquelles peuvent s’ajouter d’autres avantages (primes
                                                            notamment) au titre de son CDI.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
