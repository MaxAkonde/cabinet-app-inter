@extends('layouts.app')

@section('content')
    <div class="banner-interne" style="background-image: url({{ asset('skins/default/images/img/bg-harcelement.jpg') }});">
        <div class="container">
            <div class="caption-banner">
                <h1>Harcèlement Moral au Travail</h1>
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
                                <h2 style="text-align: left;">Législation<br></h2>
                                <p>La loi n° 2002-73 du 17 janvier 2002, intégrée à l'article L. 1152-1 du Code du
                                    travail, dispose qu’ « aucun salarié ne doit subir des agissements répétés de
                                    harcèlement moral qui ont pour objet ou pour effet une dégradation des conditions de
                                    travail susceptible de porter atteinte à ses droits et à sa dignité, d'altérer sa
                                    santé physique ou mentale ou de compromettre son avenir professionnel. »<br>De même,
                                    l’article L. 1152-2 dispose qu’ « aucun salarié ne peut être sanctionné, licencié ou
                                    faire l'objet d'une mesure discriminatoire directe ou indirecte, notamment en
                                    matière de rémunération, de formation, de reclassement, d'affectation, de
                                    qualification, de classification, de promotion professionnelle, de mutation ou de
                                    renouvellement de contrat pour avoir subi, ou refusé de subir, les agissements
                                    définis à l'alinéa précédent ou pour avoir témoigné de tels agissements ou les avoir
                                    relatés. Toute rupture du contrat de travail qui en résulterait, toute disposition
                                    ou tout acte contraire est nul de plein droit». La notion de harcèlement moral n’est
                                    pas définie par la loi. Le texte précise uniquement son objet ou ses effets. »<br>
                                </p>
                                <p><br></p>
                                <h3>Auteurs du harcèlement moral<br></h3>
                                <p>Le harcèlement moral peut être vertical : employeur / supérieur - salarié /
                                    subordonné (Cass. soc., 16 juill. 1998, no 96-41.480, Bringel c/ Sté Bronzes
                                    Strassacker).<br>Mais le législateur n’a pas voulu cantonner le harcèlement moral à
                                    des situations d’abus d’autorité dans le cadre de relations hiérarchiques
                                    (harcèlement vertical).<br>L’auteur des faits de harcèlement n’étant pas identifié
                                    par le législateur, il peut en effet s’agir de toute personne faisant partie de
                                    l’entreprise. Ainsi, le harcèlement moral peut être horizontal, à savoir entre
                                    collègues de même niveau hiérarchique (Cass. soc., 6 févr. 1980, no 78-41.497, Dame
                                    Leduc c/ Sté Arseni et a. : Bull. civ. V, no 111, Cass. Soc., 3 févier 2010,
                                    n°08-44.019).<br>Le harceleur peut également être un client, un prestataire (Cass.
                                    Soc., 1er mars 2011, n°09-69.616 ; Cass. Soc., Cass. Soc., 19 octobre 2011,
                                    n°09-68.272). A ce titre, l’employeur peut être reconnu responsable d’un harcèlement
                                    moral commis par un tiers à l’entreprise si ce tiers exerce de fait une autorité sur
                                    ce salarié (Cass. Soc., 19 octobre 2011, n°09-68.772). Il en est de même, si le
                                    tiers avait été désigné par l’employeur pour effectuer une mission dans l’entreprise
                                    et pouvait exercer une autorité sur le personnel (Cass. Soc., 1er mars 2011,
                                    n°09-69.616).<br>Les situations de harcèlement moral sont donc admises dans des
                                    situations de travail très variées.<br>Aussi, en matière de harcèlement ascendant,
                                    donc d’un salarié vers son supérieur hiérarchique, la chambre criminelle de la Cour
                                    de cassation a-t-elle pu reconnaitre que «le fait que la personne poursuivie pour
                                    harcèlement moral soit un subordonné de la victime est indifférent à la
                                    caractérisation de l’infraction » (Cass. Crim., 6 décembre 2011, n°10-82.266).<br>Au
                                    final, peu importe la qualité de l’auteur de harcèlement moral, il est primordial de
                                    souligner qu’il n’est pas nécessaire qu’il ait eu l’intention de nuire. En effet,
                                    l’intention de l’auteur est indifférente (Cass. Soc., 7 juin 2011, n°09-69.903 ;
                                    Cass. Soc., 23 novembre 2011, n°10-18.195).<br>En effet, la loi définit les actes de
                                    harcèlement moral par rapport à leurs conséquences sur les conditions de travail du
                                    ou des salariés victimes.<br></p>
                                <p><br></p>
                                <h3>Victimes du harcèlement moral<br></h3>
                                <p>L’article L. 1152-1 du Code du travail prévoit que le comportement répréhensible doit
                                    être susceptible de porter atteinte à la situation personnelle ou professionnelle du
                                    salarié. Il n'est pas nécessaire qu’un dommage soit avéré pour le salarié. La loi
                                    protégé toutes les catégories des salariés, quel que soit leur statut: CDD, CDI,
                                    contrat de professionnalisation etc. <strong>Les personnes pouvant se prévaloir de
                                        la protection édictée en matière de harcèlement moral sont :</strong></p>
                                <ul>
                                    <li>les salariés qui ont subi des agissements de harcèlement moral ;</li>
                                    <li>les salariés qui ont refusé de subir de tels agissements ;</li>
                                    <li>les salariés qui ont témoigné de ces agissements ou les ont relatés.</li>
                                    <li>les marins (C. trav., art. L. 742-8) ;</li>
                                    <li>les employés de maison (C. trav., art. L. 772-2) ;</li>
                                    <li>les concierges et employés d'immeubles à usage d'habitation (C. trav., art. L.
                                        771-2) ;</li>
                                    <li>les assistantes maternelles (C. trav., art. L. 773-2) ;</li>
                                    <li>les fonctionnaires et agents publics non titulaires.</li>
                                </ul>
                                <p>Il s’agit donc d’une protection générale et absolue.<br><br></p>
                                <h3>Quel sont les éléments constitutifs du harcèlement moral ?<br></h3>
                                <p>L’article L. 1152-1 du Code du travail fait apparaitre plusieurs conditions afin de
                                    caractériser l’existence d’un harcèlement moral.<br><strong>Des agissements
                                        répétés</strong><br>L’article L. 1152-1 du Code du travail prévoit que le
                                    salarié doit subir des agissements répétés.<br>Le critère de la répétition et de la
                                    durée est important puisqu’un fait isolé ne peut pas constituer, faute de
                                    répétition, un harcèlement moral (Cass. Soc., 22 janvier 2014, n°12-29.131).<br>La
                                    circulaire du ministère de la justice n°2012-15/ES en date du 7 aout 2012 rappelle
                                    qu’il suffit que l’acte ait été commis à deux reprises pour constituer un acte
                                    répétitif. Ainsi une agression ponctuelle ou des difficultés relationnelles «
                                    classiques » ne peuvent pas être considérés comme acte de harcèlement
                                    moral.<br>Exemple : La Cour de Cassation a considéré qu’il s’agissait de harcèlement
                                    moral dans le cas « d’un salarié, technicien de maintenance chargé de l'atelier de
                                    mécanique, qui avait reçu en l'espace de six mois, deux lettres lui rappelant que
                                    ses attributions n’était pas remplies, après douze années sans reproche. Après avoir
                                    engagé une procédure disciplinaire, sans lui donner de suite, la société publie une
                                    annonce pour recruter responsable de maintenance visant, selon le salarié, à
                                    pourvoir à son remplacement. » (Cour de cassation, Chambre sociale 2 janvier 2005
                                    n°02-47.296).<br>Enfin, la Cour de cassation a, depuis plusieurs années, assoupli sa
                                    position puisqu’elle n’exige plus que le harcèlement se soit déroulé sur une période
                                    d’une durée assez longue et estime de ce fait que les faits constitutifs d’un
                                    harcèlement moral peuvent se dérouler sur une brève période.<br>Ainsi, la Haute
                                    juridiction a considéré que les agissements exposés par le salarié constituaient un
                                    harcèlement moral et ce, même s’ils n’avaient duré que 17 jours (Cass. Soc., 6 avril
                                    2011, n°09-71.170).<br><br></p>
                                <h3>Une dégradation des conditions de travail<br></h3>
                                <p><strong>Le Code du travail ne précise pas en quoi consistent les agissements de
                                        harcèlement moral, mais il se fonde sur les conséquences qu’ils sont
                                        susceptibles d’engendrer à savoir :</strong></p>
                                <ul>
                                    <li>De porter atteinte aux droits et à la dignité du salarié ;</li>
                                    <li>Ou d’altérer sa santé physique ou mentale ;</li>
                                    <li>Ou encore de compromettre son avenir professionnel</li>
                                </ul>
                                <p>Cette notion de dégradation des conditions de travail est extrêmement imprécise et
                                    permet ainsi d’adapter la définition du harcèlement moral dans le temps, selon
                                    l’évolution des pratiques, selon les secteurs d’activité.<br>Une atteinte aux
                                    droits, à la dignité, à la santé physique ou mentale ou à l’avenir professionnel du
                                    salarié<br><strong>Pour qu’il y ait harcèlement moral, il faut ensuite que la
                                        dégradation des conditions de travail du salarié soit susceptible :</strong></p>
                                <ul>
                                    <li>soit de porter atteinte à ses droits et à sa dignité;</li>
                                    <li>soit d’altérer sa santé physique ou mentale;</li>
                                    <li>soit de compromettre son avenir professionnel.</li>
                                </ul>
                                <p>Ces trois éléments n’ont pas à être tous réunis pour caractériser le harcèlement
                                    moral (Cass. Soc., 10 mars 2010, n°08-44.393).<br>Le législateur parle de «droits»
                                    du salarié sans autre précision. Le Conseil constitutionnel, dans la décision du 12
                                    janvier 2002, a considéré que si l’article L. 1152-1 du Code du travail n’a pas
                                    précisé les droits du salarié auxquels les agissements incriminés sont susceptibles
                                    de porter atteinte, il doit être regardé comme ayant visé les droits de la personne
                                    au travail, tels qu’ils sont énoncés à l’article L. 1121-1 du Code du
                                    travail».<br>L’article L.1121-1 du Code du travail prévoit que : «nul ne peut
                                    apporter aux droits des personnes et aux libertés individuelles et collectives de
                                    restrictions qui ne seraient pas justifiées par la nature de la tâche à accomplir ni
                                    proportionnées au but recherché».<br>Les atteintes à la dignité telles qu’elles sont
                                    caractérisées par la jurisprudence sont le plus souvent liées aux conditions de
                                    travail sur la situation personnelle du salarié. Elles peuvent ainsi se manifester
                                    par une mise au placard, des brimades, des mesures vexatoires, des humiliations (CA
                                    Bourges, ch. Soc., 13 juin 1997, n°97/300).<br>Il y a également atteinte à la
                                    dignité du salarié lorsqu’un chef d’agence impose des humiliations, des pressions
                                    sur ses collaborateurs, les faisant culpabiliser, les rabaissant, les critiquant
                                    devant le client (CA Grenoble, ch. Soc., 3 mai 1999, n°97/3502).<br>Il y a atteinte
                                    à la santé quand le salarié se voit obligé de prendre des calmants ou que l’attitude
                                    de l’employeur a sur sa santé des répercussions établies par certificat
                                    médical.<br>Aussi, les certificats médicaux sont des éléments importants car ils
                                    permettent de mettre en lumière les constatations d’un professionnel de santé sur
                                    une altération de l’état de santé du salarié.<br>Il en est de même de l’état
                                    dépressif provoqué par des actes de harcèlement moral (CA Grenoble, ch. Soc., 30
                                    avril 2001, n°98/1028).<br>Enfin, l’atteinte à la carrière professionnelle est
                                    constituée par le fait que le salarié harcelé a perdu toute confiance et se voit
                                    souvent reprocher des erreurs professionnelles.<br>Il est évident que dans un tel
                                    contexte, carrière du salarié subit un coup d’arrêt indéniable et notamment dans des
                                    cas où l’on est confronté à une mise au placard sa salarié, à une rétrogradation qui
                                    se produisent notamment à la vue de l’ensemble des autres salariés.<br>&nbsp;<br>Les
                                    agissements caractéristiques du harcèlement moral<br>Les comportements susceptibles
                                    de constituer un harcèlement moral relèvent de l’appréciation des
                                    juges.<br><strong>Exemples de faits ou de comportements qui caractérisent le
                                        harcèlement moral :</strong></p>
                                <ul>
                                    <li>insultes ou injures,</li>
                                    <li>surnoms ridicules,</li>
                                    <li>reproches constants,</li>
                                    <li>volonté d'exclure le salarié du groupe,</li>
                                    <li>surveillance démesurée par rapport aux autres salariés,</li>
                                    <li>humiliations,</li>
                                    <li>discrimination par rapport aux autres salariés,</li>
                                    <li>retrait de toute responsabilité,</li>
                                    <li>tâches dégradantes ou sans rapport avec sa qualification,</li>
                                    <li>menaces,...</li>
                                </ul>
                                <p><strong>La Cour de Cassation a considéré que:</strong></p>
                                <ul>
                                    <li>le simple exercice du pouvoir disciplinaire, fût-il abusif, ne constituait pas
                                        en soi un acte de harcèlement moral.</li>
                                    <li>le simple fait d'infliger deux sanctions disciplinaires en un mois, même
                                        irrégulières, ne constituait pas en soi un acte de harcèlement moral (Cour de
                                        Cassation, Chambre sociale, 16 juin 2004, n°02-41.795).</li>
                                    <li>le fait d'engager à l'égard du même salarié plusieurs procédures de licenciement
                                        infructueuses pour motif disciplinaire, ne constituait pas en soi un acte de
                                        harcèlement moral (Cour de Cassation, Chambre sociale, 8 janvier 2003,
                                        n°00-46.824).</li>
                                </ul>
                                <p>Dans un autre arrêt du 27 octobre 2004, la Cour de cassation a précisé la notion de
                                    harcèlement moral : « implique une dégradation des conditions de travail, une
                                    atteinte aux droits et à la dignité, une altération de la santé ou une compromission
                                    de l'avenir professionnel du salarié. »<br>La Cour de cassation a confirmé cette
                                    interprétation du Code du travail dans un arrêt du 29 juin 2005, indiquant que « le
                                    harcèlement moral était constitué dès lors qu'à plusieurs reprises, l'employeur
                                    avait affecté la salariée dans un local exigu et sans outils de travail lors de sa
                                    reprise du travail, que ledit local était dépourvu d'un chauffage décent, que
                                    l'employeur avait également volontairement isolé la salariée des autres salariés de
                                    l'entreprise en leur demandant de ne plus lui parler, qu'il avait été encore jusqu'à
                                    mettre en doute son équilibre psychologique et avait eu un comportement
                                    excessivement autoritaire à son égard » (Cass. Soc., 29 juin 2005,
                                    n°03-44.055).<br>De même, l’employeur qui se livre à des remarques humiliantes et
                                    injures répétées, telles que « nabot incompétent, voleur, vendeur, vendeur nul et
                                    incompétent, faux cul » commet un harcèlement moral (Cass. Soc., 20 octobre 2011,
                                    n°10-19.291).<br>Pareillement, la mise à l’écart du salarié constitue l’un des
                                    comportements les plus caractéristiques du harcèlement moral, de même que
                                    l’exclusion injustifiée de réunions et d’organigrammes ou encore une diminution
                                    importe des responsabilités. Tel est le cas pour une salariée, de retour de congé de
                                    maternité, qui se heurte à un refus de l’employeur de la laisser reprendre son
                                    travail et avait fait l’objet d’un retrait de responsabilités et d’une mise à pied
                                    de huit jours jugée injustifiée (Cass. Soc., 7 juillet 2009, n°07-44.590).<br>Enfin,
                                    le 21 juin 2006, la Cour de cassation s’est prononcée pour la première fois sur les
                                    responsabilités civiles qui peuvent être mises en œuvre par un salarié victime de
                                    harcèlement moral. Ainsi, la victime pourra agir contre le "harceleur" mais
                                    également, même en l'absence de faute de celui-ci, contre son employeur. (Cass.
                                    Soc., 21 juin 2006, n° 05-43.914 à 05-43.919)<br>Dans cette affaire, six salariés
                                    d’une association avaient porté plainte contre le directeur pour harcèlement moral,
                                    celui-ci s’étant montré « brutal, grossier, humiliant et injurieux » à leur égard.
                                    Le directeur s’était pourvu en Cassation, arguant qu’au lieu de sa responsabilité,
                                    c’est celle de son employeur qui aurait dû être engagée, car il avait agi dans le
                                    cadre de sa mission. La Cour de cassation a jugé « qu’engage sa responsabilité
                                    personnelle à l’égard de ses subordonnés le salarié qui leur fait subir
                                    intentionnellement des agissements répétés de harcèlement moral » et que l’employeur
                                    devait aussi être mis en cause, car « L’employeur est tenu envers ses salariés d’une
                                    obligation de sécurité de résultat en matière de protection de la santé et de la
                                    sécurité des travailleurs dans l’entreprise, notamment en matière de harcèlement
                                    moral, et l’absence de faute de sa part ne peut l’exonérer de sa responsabilité.
                                    »<br><br></p>
                                <h3>Comment réagir en tant que salarié, victime d’un harcèlement moral ?<br></h3>
                                <p>L'employeur doit organiser la prévention. Dans les entreprises et les établissements
                                    de 20 salariés et plus, les dispositions relatives à l'interdiction de toute
                                    pratique de harcèlement moral<br><strong>Le salarié peut prouver l’existence d’un
                                        harcèlement moral en produisant :</strong></p>
                                <ul>
                                    <li>des courriers,</li>
                                    <li>des notes de service,</li>
                                    <li>des témoignages,</li>
                                    <li>des certificats médicaux.</li>
                                </ul>
                                <p>D’ailleurs, depuis la loi du 8 aout 2016 dite « Loi Travail », la preuve du
                                    harcèlement moral est rendu moins difficile pour le salarié. En effet, avant cette
                                    loi, en application de l’article L. 1154-1 du Code du travail, le salarié victime
                                    devait établir des faits permettant de présumer l’existence d’un harcèlement.
                                    Désormais, il n’a plus qu’à présenter des éléments de fait laissant supposer
                                    l’existence d’un harcèlement.<br>Par ailleurs, une procédure de médiation peut être
                                    engagée par tout salarié s’estimant victime de harcèlement en application de
                                    l’article L. 1152-6 du Code du travail.<br>Enfin, les organisations syndicales
                                    représentatives dans l’entreprise peuvent exercer, en faveur du salarié concerné,
                                    toutes les actions en justice consécutives à des faits de harcèlement moral, sous
                                    réserve de justifier, pour ce faire, l’accord écrit du salarié en application de
                                    l’article L. 1154-2 du Code du travail.<br><br></p>
                                <h3>Sanctions<br></h3>
                                <p>Le harcèlement moral est sanctionné tant sur le plan civil que pénal. Toute mesure
                                    prise par l’employeur à l’encontre de la victime, en lien avec des agissements de
                                    harcèlement, est condamnée par le Code du travail : « toute rupture du contrat de
                                    travail qui en résulterait, toute disposition ou acte contraire est nul de plein
                                    droit».<br><strong>L'interdiction des agissements de harcèlement moral emporte trois
                                        conséquences :</strong><br></p>
                                <p><br></p>
                                <ul>
                                    <li>la nullité de la rupture du contrat ;</li>
                                    <li>la nullité des sanctions ;</li>
                                    <li>la nullité des mesures discriminatoires.<br></li>
                                </ul>
                                <p><br></p>
                                <h3>A. Sanctions pénales<br></h3>
                                <p>L’article 222-33-2 du Code pénal crée un délit spécifique : « le fait de harceler
                                    autrui par des agissements répétés ayant pour objet ou pour effet une dégradation
                                    des conditions de travail susceptible de porter atteinte à ses droits et à sa
                                    dignité, d'altérer sa santé physique ou mentale ou de compromettre son avenir
                                    professionnel, est puni d'un an d'emprisonnement et de 15 000 € d'amende ».<br>Il
                                    s’agit d’un délit, même sans intention et sans préjudice. Il suffit que les
                                    agissements aient pour objet, ou pour effet de dégrader les conditions de travail
                                    d'un salarié. Aucune action intentionnelle n’est requise par la loi.<br>Les articles
                                    225-14 à 225-16 du code pénal sanctionnent les atteintes à la dignité de la
                                    personne. La réalisation du délit est subordonnée à l'état de vulnérabilité et de
                                    dépendance de la personne.<br></p>
                                <p><br></p>
                                <h3>B. Sanctions civiles<br></h3>
                                <p>Si le harcèlement moral est prouvé, les mesures discriminatoires ou les sanctions
                                    prises à l’encontre du salarié, ainsi que la rupture du contrat seront annulées. Le
                                    salarié pourra également prétendre au paiement de dommages et intérêts.<br>L’article
                                    L. 1152-3 du Code du travail prévoit la nullité de la rupture d’un contrat de
                                    travail faisant suite à un comportement de harcèlement moral.<br>Le salarié peut
                                    solliciter sa réintégration ou des indemnités de rupture compte tenu de
                                    l'illégitimité de celle-ci.<br>Si la nullité du licenciement du salarié harcelé est
                                    prononcée, ce dernier peut demander sa réintégration.</p>
                                <ul>
                                    <li><strong>a) Réintégration demandée par le salarié</strong><br>Dans cette
                                        hypothèse, le juge lui alloue :<ul>
                                            <li>- l'intégralité des salaires afférents à la période entre le
                                                licenciement et la décision du conseil de prud'hommes qui lui donne gain
                                                de cause ;-éventuellement, des dommages et intérêts en fonction du
                                                préjudice subi.</li>
                                        </ul>
                                    </li>
                                    <li><strong>b) Réintégration refusée par le salarié</strong><br>La Cour de cassation
                                        considère que le salarié victime d'un licenciement nul et qui ne demande pas sa
                                        réintégration a droit, d'une part, aux indemnités de rupture, d'autre part, à
                                        une indemnité réparant l'intégralité du préjudice résultant du caractère
                                        illicite du licenciement et au moins égale à celle prévue à l'article L.
                                        1235-3-1 du Code du travail ( Cass. soc., 12 juin 2001, n° 99-41.695, Peccoud c/
                                        Sté Les Provinciales).</li>
                                    <li><strong>c) Réparation du préjudice moral distinct</strong><br>Le préjudice moral
                                        du salarié victime de harcèlement peut être réparé sur le fondement de l'article
                                        1240 du Code civil. Ainsi, l'acharnement de l'employeur à nuire à sa salariée et
                                        son attitude méprisante et vexatoire justifient l'attribution de dommages et
                                        intérêts sur le fondement de l'article 1240 du Code civil.<br></li>
                                </ul>
                                <p><br></p>
                                <h3>Nouvelles jurisprudences<br></h3>
                                <p>Harcèlement moral, condamnation pénale : Doit être déclaré coupable de harcèlement
                                    moral un employeur ayant, de manière constante, procédé à des agressions verbales,
                                    des brimades et des comportements récurrents à connotation sexuelle au préjudice des
                                    employés de sa société, à l’origine, chez elles, de fatigue, d’importantes tensions
                                    et d’une souffrance constatée par l’inspection du travail. Les juges relèvent d’une
                                    part, le caractère répété et inadapté de ces agissements, qui ne s’inscrivent
                                    aucunement dans le cadre de reproche pour insuffisance professionnelle, sont
                                    étrangers à l’intérêt de l’entreprise et outrepassent les limites de l’exercice
                                    normal du pouvoir hiérarchique de direction et de contrôle, d’autre part , qu’ils
                                    ont entrainé une dégradation des conditions de travail de ces salariés qui a porté
                                    atteinte à leur dignité (Cass. Crim., 25 avril 2017, n°15-86.849).<br>Harcèlement
                                    managérial : Un responsable des ressources humaines n’ayant pas pris les mesures
                                    permettant de mettre fin à une situation de harcèlement moral manque à ses
                                    obligations contractuelles et met en danger la santé physique et mentale des
                                    salariés, ce qui justifient son licenciement (en l’espèce, un licenciement pour «
                                    cause réelle et sérieuse »). La Cour de cassation rappelle qu’un responsable des
                                    ressources humaines a une mission particulière en matière de management et doit
                                    veiller au climat social et aux bonnes conditions de travail de ses collaborateurs.
                                    Il ne peut donc cautionner par son inaction, des méthodes managériales constitutives
                                    d’un harcèlement moral (Cass. Soc., 8 mars 2017, n°15-24.406).<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
