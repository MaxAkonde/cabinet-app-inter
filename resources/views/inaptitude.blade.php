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
                                <h2 style="text-align: left;">Inaptitude du salarié<br></h2>
                                <p>Seul le médecin du travail peut constater l’inaptitude du salarié à reprendre
                                    l’emploi qu’il occupe conformément aux articles L. 1226-2 et L .1226-10 du Code du
                                    travail.<br>&nbsp;<br><strong>Ainsi, le médecin du travail ne peut déclarer le
                                        salarié inapte :</strong></p>
                                <ul>
                                    <li>Qu’après avoir réalisé au moins un examen médical du salarié, après avoir
                                        procédé ou fait procéder à une étude de poste, après avoir réalisé ou fait
                                        réaliser une étude des conditions de travail dans l’établissement et après avoir
                                        échangé avec l’employeur. Il déclare le salarié inapte à son poste de travail ;
                                    </li>
                                    <li>Que s’il constate qu’aucune mesure d’aménagement, d’adaptation ou de
                                        transformation du poste de travail occupé n’est possible et que l’état de santé
                                        du salarié justifie un changement de poste, conformément aux articles L. 4624-4
                                        et R.4624-42 du Code du travail.</li>
                                </ul>
                                <p>L’inaptitude peut être constatée à l’issue d’une seule visite médicale, n’importe
                                    laquelle, sauf si le médecin du travail estime nécessaire une seconde visite qui
                                    dans ce cas doit avoir lieu dans un délai de quinze jours conformément à l’article
                                    R. 4624-42 du Code du travail.<br><br>L'obligation de reclassement de
                                    l'employeur<br>&nbsp;<br><strong>Selon l’article L. 1226-2 du Code du travail
                                        :</strong><br>« Lorsque le salarié victime d’une maladie ou d’un accident non
                                    professionnel est déclaré inapte par le médecin du travail, en application de
                                    l’article L. 4624-4, à reprendre l’emploi qu’il occupait précédemment, l’employeur
                                    lui propose un autre emploi à ses capacités.<br>&nbsp;<br>Cette proposition prend en
                                    compte, après avis des délégués du personnel lorsqu’ils existent, les conclusions
                                    écrites du médecin du travail et les indications qu’il formule sur les capacités du
                                    salarié à exercer l’une des taches existantes dans l’entreprise. Le médecin du
                                    travail formule également des indications sur la capacité du salarié à bénéficier
                                    d’une formation le préparant à occuper un poste adapté.<br>&nbsp;<br>L’emploie
                                    proposé est aussi comparable que possible à l’emploi précédemment occupé, au besoin
                                    par la mise en œuvre de mesures telles que mutations, aménagements, adaptations ou
                                    transformations de postes existants ou aménagement du temps du travail.
                                    »<br>&nbsp;<br>Cependant, lorsque le salarié est déclaré inapte, les conséquences
                                    pour l’employeur sont différentes selon le contenu de l’avis
                                    d’inaptitude.<br>&nbsp;<br>En effet, si l’avis d’inaptitude porte l’une des deux
                                    mentions « Tout maintien du salarié dans un emploi serait gravement préjudiciable
                                    son état de santé » ou « L’état de santé du salarié fait obstacle à tout
                                    reclassement dans un emploi », l’employeur peut procéder au licenciement du salarié
                                    pour inaptitude, il est exonéré, de l’obligation de rechercher un reclassement et
                                    donc de justifier l’impossibilité de reclassement.<br>&nbsp;<br>En revanche, en
                                    l’absence de ces mention, l’employeur est soumis à l’obligation de reclasser le
                                    salarié déclaré inapte.</p>
                                <p>Si l’employeur manque à son obligation de reclassement, le licenciement est dépourvu
                                    de cause réelle et sérieuse.<br>Tel est le cas lorsque l’employeur prononce le
                                    licenciement sans même avoir au préalable rechercher des postes de reclassement ou
                                    sans avoir effectué des recherches sérieuses, ou encore s’il initie la procédure de
                                    licenciement avant la constatation de l’inaptitude.<br>&nbsp;<br>Le licenciement est
                                    également dépourvu de toute cause réelle et sérieuse en l’absence de consultation
                                    des délégués du personnel ou en cas de consultation irrégulière (Cass. Soc., 8 avril
                                    2009, n°07-43.219).<br>&nbsp;<br>L’indemnisation diffère selon que l’inaptitude a,
                                    ou non, une origine professionnelle.<br>Ainsi, concernant l’inaptitude non
                                    professionnelle, le salarié pourra réclamer une indemnité pour licenciement sans
                                    cause réelle et sérieuse au moins égale à six mois de salaire, conformément à
                                    l’article L. 1235-3 du Code du travail.<br>&nbsp;<br>Concernant, l’inaptitude
                                    d’origine professionnelle, le juge peut proposer la réintégration du salarié dans
                                    l’entreprise, mais il ne s’agit pas d’une obligation, et, le salarié comme
                                    l’employeur peut la refuser conformément à l’article L. 1226-15 du Code du travail.
                                    Si le salarié n’est pas réintégré, le juge octroie au salarié une indemnité qui ne
                                    peut être inférieure à 12 mois de salaire, quand bien même le préjudice réellement
                                    subi serait inférieur (Cass. Soc., 15 mars 2006,
                                    n°05-41.828).<br>&nbsp;<br><strong>Dans quel cadre le licenciement du salarié
                                        peut-il intervenir ?</strong><br>En l’absence de possibilité de reclassement du
                                    salarié déclaré inapte ou en cas de dispense de recherche de reclassement,
                                    l’employeur qui envisage de rompre le contrat de travail doit se placer sur le
                                    terrain du licenciement. Autrement dit, il doit mettre en œuvre la procédure légale
                                    de licenciement et procéder au versement des indemnités
                                    correspondantes.<br>&nbsp;<br><strong>Le licenciement pour inaptitude est valable
                                        lorsque :</strong></p>
                                <ul>
                                    <li>L’inaptitude du salarié est constatée conformément aux dispositions légales ;
                                    </li>
                                    <li>L’employeur a recherché toutes les possibilités de reclassement ou lorsque le
                                        salarié a refusé le ou les reclassements proposés ;</li>
                                    <li>L’employeur démontre l’impossibilité de reclasser.</li>
                                </ul>
                                <p>Aussi, le licenciement d’un salarié déclaré inapte par le médecin du travail et qui
                                    n’a pas pu être reclassé est un licenciement pour motif personnel. L’employeur doit
                                    respecter la procédure de droit commun conformément aux articles L. 1232-1 et
                                    suivants du Code du travail, à savoir l’envoie d’une convocation à l’entretien
                                    préalable, un entretien préalable, puis la notification du
                                    licenciement.<br>&nbsp;<br>A préciser, préalablement à la convocation à l’entretien
                                    préalable, l’employeur doit notifier au salarié les motifs s’opposant à son
                                    reclassement conformément à l’article L. 1226-2 -1 du Code du
                                    travail.<br>&nbsp;<br>La lettre de licenciement doit énoncer précisément le motif de
                                    la rupture. Elle doit donc faire mention de l’inaptitude physique du salarié et de
                                    l’impossibilité pour l’entreprise de le reclasser. S’il n’est pas fait référence à
                                    l’impossibilité de reclassement, le licenciement est sans cause réelle et sérieuse
                                    (Cass. Soc., 9 avril 2008, n°07-40.356).<br>&nbsp;<br>Si le salarié inapte est un
                                    salarié protégé, l’employeur doit solliciter l’autorisation de l’inspecteur du
                                    travail avant de prononcer le licenciement. En cas de demande de désignation d’un
                                    médecin-expert devant le Conseil de prud’hommes, l’inspecteur du travail saisi d’une
                                    demande d’autorisation de licenciement doit logiquement attendre l’avis du
                                    médecin-expert avant de se prononcer sur l’autorisation.<br>&nbsp;<br><strong>Les
                                        indemnités dues au salarié licencié</strong><br>Le montant des indemnités de
                                    ruptures versées au salarié licencié pour inaptitude dépend du caractère
                                    professionnel ou non de l’inaptitude, de même, les sanctions indemnitaires en cas de
                                    non-respect des dispositions relatives au reclassement du salarié
                                    inapte.<br>&nbsp;<br>Pour ce qui est de l’inaptitude non professionnelle, le salarié
                                    doit percevoir l’indemnité légale de licenciement ou l’indemnité conventionnelle si
                                    elle est plus favorable, ainsi que l’indemnité compensatrice de congés
                                    payés.<br>L’indemnité conventionnelle de licenciement doit bénéficier au salarié
                                    inapte même si la convention collective l’exclut expressément, une telle clause
                                    instituant une discrimination fondée sur l’état de santé (Cass. Soc., 8 octobre
                                    2014, n°13-1.789).<br>&nbsp;<br>Le salarié qui n’effectue pas son préavis ne perçoit
                                    pas d’indemnité compensatrice puisque, par définition, il ne peut occuper aucun
                                    emploi dans l’entreprise ou a refusé d’occuper le ou les emplois proposés (Cass.
                                    Soc., 20 novembre 2001, n°99-44.301). Le préavis est néanmoins pris en compte dans
                                    le calcul de l’indemnité de licenciement conformément à l’article L. 1226-14 du Code
                                    du travail.<br>&nbsp;<br>Mais le salarié recouvre le droit à une indemnité
                                    compensatrice de préavis si le licenciement s’avère sans cause réelle et sérieuse en
                                    raison de l’inertie de l’employeur en matière de reclassement (Cass. Soc., 6 mai
                                    2015, n°13-17.229).<br>&nbsp;<br><strong>Pour ce qui est de l’inaptitude d’origine
                                        professionnelle, le salarié déclaré inapte suite à un accident du travail ou à
                                        une maladie professionnelle bénéficie d’un régime spécifique et à droit aux
                                        indemnités décrites ci-dessous conformément à l’article L. 1226-14 du Code du
                                        travail :</strong></p>
                                <ul>
                                    <li>Une indemnité équivalente à l’indemnité compensatrice de préavis. Cette
                                        indemnité doit être calculée sur la base du préavis légal et non d’une durée de
                                        préavis plus longue fixée par la convention collective (Cass. Soc., 26 janvier
                                        2011, n°09-68.544), et sur la base du salaire moyen qui aurait été perçu par
                                        l’intéressé au cours des trois derniers mois, s’il avait continué à travailler
                                        au poste qu’il occupait avant la suspension de son contrat de travail
                                        conformément à l’article L. 1226-16 du Code du travail.</li>
                                    <li>Une indemnité spéciale de licenciement égale au double de l’indemnité légale
                                        conformément à l’article R. 1234-2 du Code du travail. Cette règle du double de
                                        l’indemnité de licenciement ne concerne que l’indemnité légale de licenciement
                                        sauf si la convention collective en dispose autrement. Cependant, si le double
                                        de l’indemnité légale est inférieur à l’indemnité conventionnelle, c’est alors
                                        cette dernière qui doit être versée (Cass. Soc., 10 mai 2005, n°03-44.313).
                                        Enfin, l’indemnité est calculée sur la base du salaire moyen qui aurait été
                                        perçu par le salarié au cours des trois derniers mois, s’il avait continué à
                                        travailler au poste qu’il occupait avant la suspension du contrat de travail
                                        conformément à l’article L. 1226-16 du Code du travail précité.&nbsp;</li>
                                </ul>
                                <p><strong>Jurisprudences récentes :</strong><br>Cass. Soc., 11 janvier 2017,
                                    n°15-19.959 : En cas d’inaptitude constatée à l’issue de deux examens de reprise,
                                    l’employeur est tenu de faire connaitre au salarié par écrit non seulement
                                    l’impossibilité de reclassement mais également les motifs qui s’opposent à ce
                                    reclassement, avant que ne soit engagée la procédure de licenciement. A défaut, le
                                    salarié qui en est informé postérieurement à la convocation à entretien préalable
                                    est en droit de réclamer des dommages-intérêts en fonction du préjudice subi. Dès
                                    lors, est en droit de prétendre à l’octroi de dommages-intérêts, la salariée qui
                                    avait été convoquée, par une lettre notifiée le 29 mai 2006, à un entretien
                                    préalable à licenciement pour inaptitude professionnelle, alors qu’elle n’avait été
                                    informée des motifs s’opposant à son reclassement, que par écrit notifié le 17 juin
                                    suivant, soit entre la date de l’entretien préalable et l’envoi de la lettre de
                                    licenciement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
