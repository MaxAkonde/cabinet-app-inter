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
                                <h2 style="text-align: left;">Indemnités Légales<br></h2>
                                <p><strong>Dans le cas de licenciement pour un motif autre qu’une faute grave, le
                                        salarié a droit selon l'article L 1234-1 du Code du travail à :</strong></p>
                                <ol>
                                    <li>« S'il justifie chez le même employeur d'une ancienneté de services continus
                                        inférieure à six mois, à un préavis dont la durée est déterminée par la loi, la
                                        convention ou l'accord collectif de travail ou, à défaut, par les usages
                                        pratiqués dans la localité et la profession ;</li>
                                    <li>S'il justifie chez le même employeur d'une ancienneté de services continus
                                        comprise entre six mois et moins de deux ans, à un préavis d'un mois ;</li>
                                    <li>S'il justifie chez le même employeur d'une ancienneté de services continus d'au
                                        moins deux ans, à un préavis de deux mois.</li>
                                </ol>
                                <p>Toutefois, les dispositions des 2° et 3° ne sont applicables que si la loi, la
                                    convention ou l'accord collectif de travail, le contrat de travail ou les usages ne
                                    prévoient pas un préavis ou une condition d'ancienneté de services plus favorable
                                    pour le salarié. »<br>&nbsp;<br>L’inobservation du préavis ouvre droit, sauf faute
                                    grave du salarié, à une indemnité compensatrice ne se confondant ni avec l’indemnité
                                    de licenciement de L 1234-9 du Code du travail, ni avec la réparation prévue aux
                                    articles L 1235-2 et suivants du Code du travail.<br>L’inobservation du préavis n’a
                                    pas, dans ce cas, pour conséquence d’avancer la date à laquelle le contrat prend
                                    fin. En conséquence, la dispense par l’employeur de l’exécution du travail pendant
                                    le préavis ne doit entraîner, jusqu’à l’expiration de ce délai, aucune diminution
                                    des salaires et avantages y compris l’indemnité de congés payés que le salarié
                                    aurait reçus s’il avait accompli son travail. En cas d’inexécution totale ou
                                    partielle du préavis résultant, soit de la fermeture temporaire ou définitive de
                                    l’établissement, soit de la réduction de l’horaire de travail habituellement
                                    pratiqué dans l’établissement en deçà de la durée légale de travail, le salaire à
                                    prendre en considération est celui qu’aurait perçu l’intéressé s’il avait accompli
                                    son travail jusqu’à l’expiration du préavis sur la base de la durée légale ou
                                    conventionnelle de travail applicable à l’entreprise, dans le cas où il travaillait
                                    à temps plein, ou de la durée du travail fixée dans son contrat de travail lorsqu’il
                                    travaillait à temps partiel. (Articles L 1234-4 à L 1234-6 du Code du
                                    travail).<br><br></p>
                                <p><strong>Certains éléments objectifs sont de nature à justifier des différences de
                                        salaire ou de rang hiérarchique, tels que:</strong></p>
                                <ul>
                                    <li>l’ancienneté (Cass. soc., 20 juin 2001, no 99-43.905) ;</li>
                                    <li>l’expérience professionnelle (Cass. Soc., 15 novembre 2006, n°04-47.156 ; Cass.
                                        Soc., 30 juin 2010, n°09-40.811) ;</li>
                                    <li>la détention ou non d’un diplôme (cass. Soc., 17 mars 2010, n°08-43.088) ;</li>
                                    <li>des fonctions différentes (Cass. soc., 18 déc. 2002, no 00-45.475) ou un niveau
                                        de responsabilité différent (Cass. soc., 6 avr. 2004, no 01-46.371) ;</li>
                                    <li>l’existence d’un travail spécifique ou d’une contrainte supplémentaire (Cass.
                                        soc., 12 juin 2001, no 99-41.936).</li>
                                </ul>
                                <p>&nbsp;<br>A défaut, la différence de rémunération ou d’avancement est illicite (Cass.
                                    soc, 26 avr. 2000, no 98-42.643).<br>&nbsp;<br>Selon la jurisprudence, le droit des
                                    salariés à une même rémunération ne vaut que pour autant qu’ils se trouvent dans une
                                    situation identique.<br>&nbsp;<br>L'employeur ne peut opposer son pouvoir
                                    discrétionnaire pour se soustraire à son obligation de justifier, de façon objective
                                    et pertinente, une différence de traitement entre des salariés effectuant un même
                                    travail ou un travail de valeur égale (Cass. Soc., 23 novembre 2011,
                                    n°10-23178).<br>&nbsp;<br>La seule appartenance à une même catégorie professionnelle
                                    n’implique pas une identité de situation (Cass. Soc., 4 juin 2014, n°12-23.759 ;
                                    Cass. Soc., 26 novembre 2014, n°13-20.058).<br>&nbsp;<br><strong>Selon l’article L
                                        1234-9 du Code du travail :</strong><br>« Le salarié titulaire d'un contrat de
                                    travail à durée indéterminée, licencié alors qu'il compte une année d'ancienneté
                                    ininterrompue au service du même employeur, a droit, sauf en cas de faute grave, à
                                    une indemnité de licenciement.<br>Les modalités de calcul de cette indemnité sont
                                    fonction de la rémunération brute dont le salarié bénéficiait antérieurement à la
                                    rupture du contrat de travail. Ce taux et ces modalités sont déterminés par voie
                                    réglementaire. »<br>&nbsp;<br>Si le licenciement d’un salarié survient sans
                                    observation de la procédure requise, mais pour une cause réelle et sérieuse, le juge
                                    saisi doit imposer à l’employeur d’accomplir la procédure prévue et accorder au
                                    salarié, à la charge de l’employeur, une indemnité qui ne peut être supérieure à un
                                    mois de salaire (Article L 1235-2 du Code du travail).<br>Si ce licenciement
                                    survient pour une cause qui n’est pas réelle et sérieuse, le juge peut proposer la
                                    réintégration du salarié dans l’entreprise, avec maintien de ses avantages acquis ;
                                    en cas de refus par l’une ou l’autre des parties, le juge octroie au salarié une
                                    indemnité. Cette indemnité, qui ne peut être inférieure aux salaires des six
                                    derniers mois, est due sans préjudice, le cas échéant, de l’indemnité prévue à
                                    l’article L 1234-9 du Code du travail (Article L 1235-3 du Code du
                                    travail).<br>&nbsp;<br><strong>L’article L 1235-3-1 du Code du travail précise que
                                        :</strong><br>« Lorsque le juge constate que le licenciement est intervenu en
                                    méconnaissance des articles L. 1132-1, L. 1153-2, L. 1225-4 et L. 1225-5 et que le
                                    salarié ne demande pas la poursuite de son contrat de travail ou que sa
                                    réintégration est impossible, le juge octroie au salarié une indemnité, à la charge
                                    de l'employeur, qui ne peut être inférieure aux salaires des six derniers mois. Elle
                                    est due sans préjudice du paiement du salaire, lorsqu'il est dû, qui aurait été
                                    perçu pendant la période couverte par la nullité et, le cas échéant, de l'indemnité
                                    de licenciement prévue à l'article L. 1234-9. »<br>&nbsp;<br>Le tribunal ordonne
                                    également le remboursement par l’employeur fautif aux organismes concernés de tout
                                    ou partie des indemnités de chômage payées au salarié licencié du jour de son
                                    licenciement au jour du jugement prononcé par le tribunal, dans la limite de six
                                    mois d’indemnités de chômage par salarié concerné. Ce remboursement est ordonné
                                    d’office par le tribunal dans le cas où les organismes concernés ne sont pas
                                    intervenus à l’instance ou n’ont pas fait connaître le montant des indemnités
                                    versées (Article L 1235-4 du Code du travail).<br>Lorsque le salarié est inclus dans
                                    un licenciement collectif pour motif économique et que la procédure requise à
                                    l’article L 1233-8 du Code du travail n’a pas été respectée par l’employeur, le
                                    tribunal doit accorder au salarié une indemnité calculée en fonction du préjudice
                                    subi. En cas de non-respect de la priorité de réembauchage prévue à l’article L
                                    1233-45 du Code du travail, le juge octroie au salarié une indemnité qui ne peut
                                    être inférieure à deux mois de salaire. (Article L 1235-13 du Code du
                                    travail)<br>&nbsp;<br><strong>Selon l’article L 1235-14 du Code du travail
                                        :</strong><br>« Ne sont pas applicables au licenciement d'un salarié de moins de
                                    deux ans d'ancienneté dans l'entreprise et au licenciement opéré par un employeur
                                    employant habituellement moins de onze salariés, les dispositions relatives à la
                                    sanction :</p>
                                <ol>
                                    <li>De la nullité du licenciement, prévues à l'article L. 1235-11 ;</li>
                                    <li>Du non-respect de la procédure de consultation des représentants du personnel et
                                        d'information de l'autorité administrative, prévues à l'article L. 1235-12 ;
                                    </li>
                                    <li>Du non-respect de la priorité de réembauche, prévues à l'article L. 1235-13.
                                    </li>
                                </ol>
                                <p>Le salarié peut prétendre, en cas de licenciement abusif, à une indemnité
                                    correspondant au préjudice subi. »<br>&nbsp;<br><strong>L’article L 1235-5 du Code
                                        du travail prévoit que :</strong><br>« Ne sont pas applicables au licenciement
                                    d'un salarié de moins de deux ans d'ancienneté dans l'entreprise et au licenciement
                                    opéré dans une entreprise employant habituellement moins de onze salariés, les
                                    dispositions relatives :</p>
                                <ol>
                                    <li>Aux irrégularités de procédure, prévues à l'article L. 1235-2 ;</li>
                                    <li>A l'absence de cause réelle et sérieuse, prévues à l'article L. 1235-3 ;</li>
                                    <li>Au remboursement des indemnités de chômage, prévues à l'article L. 1235-4.</li>
                                </ol>
                                <p>Le salarié peut prétendre, en cas de licenciement abusif, à une indemnité
                                    correspondant au préjudice subi.<br>Toutefois, en cas de méconnaissance des
                                    dispositions des articles L. 1232-4 et L. 1233-13, relatives à l'assistance du
                                    salarié par un conseiller, les dispositions relatives aux irrégularités de procédure
                                    prévues à l'article L. 1235-2 s'appliquent même au licenciement d'un salarié ayant
                                    moins de deux ans d'ancienneté et au licenciement opéré dans une entreprise
                                    employant habituellement moins de onze salariés. »</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
