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
                                <h2 style="text-align: left;">Le régime fiscal applicable<br></h2>
                                <p>Il est évident que la décision de partir travailler à l’étranger ne peut être
                                    détachée de toute considération fiscale. Le salarié doit s’interroger sur les
                                    incidences fiscales de son départ, en termes d’impôt sur le revenu.<br>La situation
                                    fiscale du salarié est totalement indépendante de sa situation juridique ou sociale.
                                    Les concepts de détachement et d’expatriation ne sont d’aucune utilité.<br>C’est la
                                    notion de domicile fiscal qui est prépondérante en la matière.<br>En l’absence de
                                    convention fiscale, c’est en application des règles françaises que le domicile
                                    fiscal sera déterminé, ce qui risque d’être lourd, voire même d’entraîner une double
                                    imposition. Les parties peuvent décider de répartir contractuellement la charge de
                                    l’impôt.<br>S’il existe une convention, afin d’atténuer le coût de l’imposition (en
                                    général, le lieu d’imposition est le lieu d’exercice du travail, sauf mission de
                                    courte durée), il est recommandé de la mentionner dans le contrat.<br>&nbsp;<br>En
                                    droit français, le Code général des impôts énonce « les personnes qui ont en France
                                    leur domicile fiscal sont passibles de l’impôt sur le revenu en raison de l’ensemble
                                    de leurs revenus ; celles dont le domicile fiscal est situé hors de France sont
                                    passibles de cet impôt en raison de leurs seuls revenus de source française ». Donc
                                    :<br>Soit le domicile fiscal se trouve en France, dans ce cas, le Code pose un
                                    principe dit « d’obligation fiscale illimitée », c’est-à-dire que le contribuable
                                    doit déclarer en France l’ensemble de ses revenus mondiaux, peu important la nature
                                    du revenu, la source du revenu ou le lieu de paiement, et peu importe également s'il
                                    a déjà été soumis à l’impôt sur le revenu dans un autre pays<br>Soit le domicile
                                    fiscal est situé hors de France, dans ce cas, seuls les revenus de source française
                                    sont imposables en France : « obligation fiscale restreinte ».<br>&nbsp;<br>Il faut
                                    donc déterminer le domicile fiscal d’une personne. En droit français, une personne
                                    est considérée comme ayant son domicile fiscal en France si l’une des quatre
                                    conditions suivantes est remplie (alternativement) :<br>Soit la personne a son foyer
                                    en France : le foyer est le lieu de résidence habituelle de la personne et/ou de sa
                                    famille : il peut être localisé en France même si la personne est amenée, en raison
                                    des nécessités de sa profession, à séjourner en dehors de la France pour une durée
                                    plus ou moins longue, dès lors que la famille reste en France (ce qui concerne
                                    notamment les travailleurs frontaliers, c’est-à-dire ceux qui exercent leur activité
                                    sur le territoire d’un Etat, mais résident sur le territoire d’un autre Etat, où ils
                                    retournent au moins une fois par semaine, peu important que les 2 Etats soient
                                    éloignés géographiquement. Ex : Madrid-Londres ).<br>Soit la personne a son lieu de
                                    séjour principal en France : le lieu de séjour principal en France signifie que la
                                    personne y passe plus de six mois par an.<br>Soit la personne exerce une activité
                                    professionnelle en France : l’activité doit être exercée à titre principal en
                                    France, c’est-à-dire que la personne doit lui consacrer la plus grande partie de son
                                    temps de travail (ce qui concerne notamment le travailleur détaché pour une période
                                    limitée).<br>Soit la personne possède le centre de ses activités économiques en
                                    France : si la personne détient des investissements importants en France, elle peut
                                    y être imposée, même si elle exerce son activité professionnelle à l’étranger où
                                    elle vit avec toute sa famille.<br>&nbsp;<br><strong>Ces règles de rattachement sont
                                        dangereuses pour deux raisons :</strong><br>d’une part, le droit fiscal français
                                    est, quasi-tentaculaire, par le biais de cette notion très large de domicile fiscal
                                    ;<br>d’autre part, dans la mesure où il n’existe pas à ce jour d’harmonisation des
                                    différentes législations en matière fiscale, chaque pays définissant ses propres
                                    critères en matière de domicile fiscal, le salarié peut se retrouver exposé à un
                                    risque de double imposition.<br>&nbsp;<br><strong>C’est la raison pour laquelle il
                                        existe des mécanismes afin de pallier les risques de double imposition
                                        :</strong><br>Des conventions fiscales internationales (dites conventions OCDE)
                                    peuvent éviter la double imposition à condition que certaines conditions soient
                                    remplies (notamment la durée du séjour à l’étranger)<br>Le Code général des impôts
                                    contient des dispositions particulières applicables aux salariés envoyés à
                                    l’étranger par un employeur français (art. 81-A CGI):<br>&nbsp;<br><strong>Les
                                        salariés de nationalité française, envoyés en mission à l'étranger mais qui
                                        restent domiciliés en France, bénéficient d'une exonération fiscale totale ou
                                        partielle dont le régime a été récemment aménagé par la loi de finances
                                        rectificative pour 2005 :</strong><br>Exonération totale à raison de
                                    l’assujettissement à un impôt étranger : lorsque la rémunération a été imposée à
                                    l'étranger à hauteur d'au moins les 2/3 de l'impôt qui aurait été supporté en France
                                    ;<br>Exonération totale pour certaines activités (construction, exploitation
                                    d’ensembles industriels, prospection, ingénierie), si l’activité en question est
                                    exercée à l’étranger plus de 183 jours au cours d’une période de 12 mois
                                    consécutifs.<br>Attention, il faut respecter certaines règles en termes de nombres
                                    de jours travaillés à l’étranger. Il faut un minimum de 183 jours de travail à
                                    l’étranger sur une période de 12 mois consécutifs</p>
                                <ul>
                                    <li>exonération partielle : si les deux cas d’exonération totale ne peuvent pas
                                        jouer, le salarié n'est soumis à l’impôt français qu’à concurrence du montant du
                                        salaire qu’il aurait perçu si son activité avait été exercée en France (on ne
                                        tient pas compte du supplément de salaire lié au déplacement à l’étranger).</li>
                                </ul>
                                <p>Depuis le 1er janvier 2006, les rémunérations ouvrant droit à exonération sont
                                    uniquement celles versées à un salarié (les mandataires sociaux n'y ont donc droit
                                    que s'ils exercent, à l'étranger, une fonction technique pour laquelle ils sont
                                    titulaires d'un contrat de travail), par un employeur établi en France, dans un
                                    autre Etat membre de la CE, en Islande ou en Norvège (en revanche, peu importe que
                                    ce soit lui ou une de ses filiales qui supporte la rémunération), au titre d'une
                                    activité exercée dans un autre Etat ou territoire que la
                                    France.<br>&nbsp;<br><strong>Plus précisément :</strong><br>L'article 81 A du CGI,
                                    issu de l'article 9 de la loi n° 76-1234 du 29 décembre 1976 (L. n° 76-1234, 29 déc.
                                    1976, art. 9 : Dr. fisc. 1977, n° 3, comm. 44) qui a réformé la territorialité de
                                    l'impôt sur le revenu, exonère d'impôt sur le revenu, soit totalement, soit
                                    partiellement, les traitements et salaires perçus par les contribuables fiscalement
                                    domiciliés en France lorsqu'ils sont envoyés à l'étranger par un employeur établi en
                                    France pour y exercer leurs fonctions.</p>
                                <p><br><strong>L'article 51 de la loi de finances rectificative pour 2005 (L. fin. rect.
                                        2005, n° 2005-1720, 30 déc. 2005, art. 51 : Dr. fisc. 2006, n° 6, comm. 133)
                                        modifie ce dispositif sur différents points :</strong><br>Son champ
                                    d'application est redéfini ;<br>Le bénéfice de l'exonération d'impôt accordée au
                                    titre de l'exercice de certaines activités est étendu aux salariés qui exercent une
                                    activité de prospection commerciale hors de France pendant une durée supérieure à
                                    cent vingt jours au cours d'une période de 12 mois consécutifs ;<br>Enfin, les
                                    conditions d'application de l'exonération d'impôt sur le revenu des suppléments de
                                    rémunération liés aux séjours effectués hors de France sont précisées.<br>Cette
                                    instruction commente les dispositions mentionnées supra, qui s'appliquent à compter
                                    de l'imposition des revenus de 2006.<br>Elle précise également différents points qui
                                    ont fait l'objet d'interprétations jurisprudentielles ainsi que les conditions
                                    d'application de l'article 7 de la loi n° 2005-412 du 3 mai 2005 portant création du
                                    registre international français (RIF). Aux termes de cet article, les marins
                                    embarqués sur des navires immatriculés à ce registre sont en effet éligibles, sous
                                    certaines conditions, au bénéfice de l'exonération d'impôt sur le revenu prévue à
                                    l'article 81 A du CGI.<br>Le I de l'article 81 A, dans sa rédaction antérieure à
                                    l'adoption de l'article 51 de la loi de finances rectificative pour 2005, subordonne
                                    le bénéfice des exonérations d'impôt sur le revenu à cinq conditions, communes à
                                    l'ensemble des exonérations :<br>&nbsp;<br>1 – <strong>Les rémunérations doivent
                                        être imposées dans la catégorie des traitements et salaires :</strong><br>Cette
                                    condition exclut du champ d'application de la mesure toutes les activités
                                    professionnelles indépendantes à caractère agricole, commercial, artisanal ou
                                    libéral imposées à l'impôt sur le revenu dans la catégorie des bénéfices agricoles,
                                    des bénéfices industriels ou commerciaux ou des bénéfices non commerciaux.<br>Le
                                    dispositif a en effet été conçu afin d'inciter les salariés à s'expatrier.
                                    Toutefois, la jurisprudence a considéré que les mandataires sociaux figuraient au
                                    nombre des personnes pouvant prétendre au bénéfice des exonérations, dès lors que
                                    leurs rémunérations sont imposées dans la catégorie des traitements et salaires (CE,
                                    14 juin 1989, n° 59428, de Pol : Dr. fisc. 1989, n° 43, comm. 1948, concl. M.
                                    Liébert-Champagne). Il en est ainsi, par exemple, des présidents-directeurs
                                    généraux, des présidents du directoire ou encore, des gérants minoritaires de
                                    SARL.<br>&nbsp;<br>2 –<strong> L'activité doit être exercée à l'étranger
                                        :</strong><br>La notion d'« étranger » n'est pas définie par la loi. Pour sa
                                    part, la doctrine administrative assimile à l'étranger, tout lieu relevant de la
                                    souveraineté fiscale d'un État ou territoire (les collectivités d'outre-mer
                                    (Mayotte, Saint-Pierre-et-Miquelon, Wallis-et-Futuna et la Polynésie française),
                                    ainsi que la Nouvelle-Calédonie et les Terres australes et antarctiques françaises
                                    (TAAF), sont considérées comme des États étrangers pour l'application de l'article
                                    81 A) autre que la France (cf. DB 5 B-1122, § 20).<br>La France s'entend des
                                    départements métropolitains et d'outre-mer de la République française, y compris la
                                    mer territoriale qui leur est adjacente et au-delà de celle-ci, les zones sur
                                    lesquelles, en conformité avec le droit international, elle dispose de droits
                                    souverains pour l'exploitation et l'exploration des ressources naturelles des fonds
                                    marins, de leur sous-sol et des eaux adjacentes.<br>Il existe un cas particulier
                                    pour les salariés frontaliers ou les marins pêcheurs.<br>Les travailleurs
                                    frontaliers exerçant leur activité à l'étranger durant la journée et rentrant
                                    quotidiennement à leur domicile en France ne bénéficient pas des exonérations totale
                                    ou partielle prévues à l'article 81 A. En effet, la partie de la journée de travail
                                    des personnes concernées qui se déroule dans l'État du lieu d'exercice des fonctions
                                    ne peut être assimilée à un « séjour » au sens de la jurisprudence (CE, 10 janv.
                                    1992, 109895, Koch : Dr. fisc. 1993, n° 15, comm. 805. – Instr. 23 mai 1991 : BOI 5
                                    B-11-91 ; Dr. fisc. 1991, n° 27, instr. 10354). Par suite, les travailleurs
                                    frontaliers placés dans cette situation ne sont pas réputés
                                    expatriés.<br>Marins-pêcheurs et salariés embarqués sur un navire immatriculé au
                                    registre international français (RIF). Compte tenu du caractère spécifique de
                                    l'activité de pêche, il a été admis que les marins-pêcheurs dont les rémunérations
                                    sont imposées dans la catégorie des salaires et qui sont embarqués sur des navires
                                    qui appartiennent à l'une des trois premières catégories de navigation relatives à
                                    la réglementation sur la sauvegarde de la vie humaine en mer et la prévention de la
                                    pollution, c'est-à-dire des bateaux autorisés à pratiquer la pêche en dehors des
                                    eaux territoriales françaises (au-delà des douze milles), puissent bénéficier de
                                    l'exonération partielle d'impôt sur le revenu, dans les conditions définies par
                                    l'instruction du 4 mars 2005 (Instr. 4 mars 2005 : BOI 5 B-13-05 ; Dr. fisc. 2005,
                                    n° 11, instr. 13312).<br>En outre, en vertu des dispositions de la loi portant
                                    création du registre international français (L. n° 2005-412, 3 mai 2005), les marins
                                    embarqués sur des navires immatriculés à ce registre sont également éligibles aux
                                    dispositions de l'article 81 A (cf. infra n° 26 à 33).<br>&nbsp;<br>3 – <strong>Le
                                        bénéficiaire de la rémunération doit être de nationalité française et
                                        fiscalement domicilié en France :</strong><br>La condition tenant à la
                                    nationalité du contribuable est appréciée avec largeur de vue. Il est en effet admis
                                    que les personnes de nationalité étrangère fiscalement domiciliées en France,
                                    bénéficient des dispositions de l'article 81 A lorsqu'elles sont ressortissantes
                                    d'un pays ayant conclu avec la France un traité de réciprocité (Rép. min. à M. Cardo
                                    : JOAN Q, 31 déc. 2001, p. 7537 et DB 5 F-1312, § 3).<br>La condition relative à la
                                    domiciliation en France est en revanche d'application stricte et s'apprécie par
                                    référence aux dispositions de l'article 4 B. Pour l'appréciation des critères à
                                    retenir et leurs modalités d'application, il y a lieu de se reporter aux
                                    commentaires figurant dans la documentation administrative sous la référence 5
                                    B-1121.<br>&nbsp;<br>4 –<strong> L'exercice de l'activité hors de France doit
                                        procéder d'une demande de l'employeur</strong><br>Nonobstant le cas particulier
                                    des mandataires sociaux (cf. supra n° 6), cette circonstance résulte du fait que le
                                    bénéfice du régime est strictement réservé aux salariés sur lesquels s'exerce le
                                    pouvoir de direction de l'employer.<br>&nbsp;<br>5 –<strong> L'employeur doit être
                                        établi en France:</strong><br>L'employeur doit disposer en France de son siège
                                    social ou d'un établissement au sens de la définition qui en est donnée dans la
                                    documentation administrative sous la référence 4 H-1412 (§ 6 à 10), c'est-à-dire une
                                    entité qui se caractérise, en principe, par l'existence d'un organisme professionnel
                                    dont l'installation présente un certain caractère de permanence et qui possède une
                                    autonomie propre. C'est entre cet employeur et le salarié exerçant une activité à
                                    l'étranger que doit exister le lien contractuel ou statutaire pour que ce dernier
                                    puisse prétendre au bénéfice des dispositions de l'article 81 A.<br>Lorsque ce lien
                                    existe, il n'y a pas lieu de se préoccuper de savoir si la rémunération est payée en
                                    totalité ou en partie en France ou à l'étranger. De même, le fait que le salaire
                                    soit supporté par l'entreprise installée en France ou par un de ses établissements
                                    ou même par l'une de ses filiales à l'étranger demeure sans
                                    incidence.<br>&nbsp;<br>L'article 51 de la loi de finances rectificative met les
                                    dispositions existantes en conformité avec le droit communautaire et en précise la
                                    portée. Il supprime toute référence au critère de nationalité et étend le bénéfice
                                    des exonérations d'impôt sur le revenu aux salariés employés par un employeur établi
                                    en France, dans un autre État membre de la Communauté européenne, en Islande ou en
                                    Norvège.<br>Ne peuvent en revanche pas bénéficier du régime, les salariés dont
                                    l'employeur est établi au sein de la Confédération helvétique, dans la Principauté
                                    de Monaco, la Principauté d'Andorre ou le Liechtenstein.<br>&nbsp;<br>L'absence
                                    d'encadrement suffisant par la loi des conditions d'application des exonérations
                                    prévues à l'article 81 A était source d'insécurité juridique, comme en témoigne
                                    l'abondance de la jurisprudence.<br>L'article 51 de la loi de finances rectificative
                                    pour 2005 comble cette lacune en précisant le champ d'application commun à toutes
                                    les exonérations et les conditions d'exonération des suppléments de rémunération
                                    liés à l'expatriation (CGI, art. 81 A, II modifié).<br>L'article 51 de la loi de
                                    finances rectificative pour 2005 restitue au dispositif sa portée d'origine en
                                    recentrant son champ d'application sur les personnes qui exercent une activité
                                    salariée, caractérisée par l'existence d'un lien de subordination juridique entre la
                                    personne expatriée et l'entreprise qui l'emploie.<br>Il s'agit en pratique des
                                    personnes qui sont titulaires d'un contrat de travail. Sont par conséquent exclus du
                                    champ d'application du dispositif, non seulement les travailleurs indépendants mais
                                    également les mandataires sociaux et notamment ceux dont les rémunérations sont
                                    imposées sur le revenu dans la catégorie des traitements et salaires (gérants
                                    minoritaires de SARL, présidents-directeurs généraux ou présidents de
                                    directoire...), sans être pour autant salariés au sens du droit du
                                    travail.<br>Toutefois, conformément à l'engagement pris par le ministre lors des
                                    débats parlementaires (cf. JO Sénat CR 19 déc. 2005, p. 9949), il est admis que les
                                    mandataires sociaux titulaires d'un contrat de travail à raison de fonctions
                                    techniques exercées au sein de l'entreprise, puissent prétendre dans les conditions
                                    de droit commun au bénéfice de l'exonération d'impôt sur le revenu à raison des
                                    rémunérations perçues au titre de ces fonctions exercées à l'étranger, telle que
                                    cette notion est définie ci-dessous (cf. infra n° 69). Il est rappelé que la
                                    jurisprudence de la Cour de cassation soumet la validité du cumul d'un mandat social
                                    et d'un contrat de travail à des conditions très strictes. En particulier, le cumul
                                    n'est autorisé que si le contrat de travail correspond à un emploi effectif,
                                    caractérisé par l'exercice, dans un lien de subordination juridique à l'égard de la
                                    société, de fonctions techniques distinctes de celles exercées dans le cadre du
                                    mandat social et donnant lieu à rémunération séparée.<br>&nbsp;<br>Les conditions
                                    d'exonération des suppléments de rémunération liés à l'expatriation sont encadrées
                                    par la loi (CGI, art. 81 A, II modifié).<br>Les salariés qui entrent dans le champ
                                    d'application de l'article 81 A, sans toutefois pouvoir bénéficier de l'une des
                                    exonérations totales d'impôt sur les revenus perçus au titre de l'activité exercée
                                    hors de France, ne sont toutefois imposés que sur la rémunération qu'ils auraient
                                    perçue si celle-ci s'était déroulée en France, ce qui a pour effet d'exonérer les
                                    suppléments de rémunération susceptibles d'être versés au titre des séjours
                                    effectués hors de France.</p>
                                <p><br><strong>La loi (CGI, art. 81 A, II) encadre toutefois le bénéfice de cette
                                        exonération en la subordonnant à l'existence de trois conditions qui doivent
                                        être simultanément réunies :</strong><br>Les suppléments de rémunération doivent
                                    être versés en contrepartie de séjours effectués dans l'intérêt direct et exclusif
                                    de l'employeur ;<br>ils doivent être justifiés par un déplacement nécessitant une
                                    résidence d'une durée effective d'au moins vingt-quatre heures dans un autre État
                                    ;<br>ils doivent être déterminés dans leur montant préalablement aux séjours dans un
                                    autre État et en rapport, d'une part, avec le nombre, la durée et le lieu de ces
                                    séjours et, d'autre part, avec la rémunération versée aux salariés compte non tenu
                                    des suppléments de rémunération. Le montant des suppléments de rémunération ne peut
                                    pas excéder 40 % de la rémunération précédemment définie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
