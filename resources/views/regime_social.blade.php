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
                                <h2 style="text-align: left;">Le régime de la protection sociale<br></h2>
                                <p>La principale différence entre le détachement et l’expatriation résulte du fait que
                                    le salarié expatrié n’est plus affilié au régime français de Sécurité
                                    sociale.<br>&nbsp;<br><strong>Détachement temporaire :</strong><br>Ainsi, il n'est
                                    pas rare de lire qu'en cas de détachement temporaire, le maintien du système de
                                    sécurité sociale du pays d'origine soit garanti. Les salariés travaillant à
                                    l'étranger pour le compte d'une société française peuvent bénéficier des
                                    dispositions conventionnelles relatives à la participation. Les modalités de calcul
                                    et la répartition de la réserve spéciale de participation entre les salariés
                                    bénéficiaires ne peut pas faire l'objet d'une distinction suivant que les salariés
                                    d'une même entreprise travaillent en France ou à l'étranger (Cass. soc., 29 oct.
                                    2002 : TPS 2003, comm. 84 ; JurisData n° 2002-016120).<br>Pour le surplus, l'accord
                                    collectif peut prévoir la souscription ou le maintien par l'employeur d'une
                                    couverture santé complémentaire destinée à parfaire la protection sociale du
                                    collaborateur et des membres de sa famille à l'étranger, sous couvert d'un contrat
                                    de prévoyance collective ou individuelle souscrit auprès d'une compagnie
                                    d'assurance, d'une mutuelle ou d'un organisme de prévoyance. De même, le régime
                                    collectif de prévoyance en vigueur dans l'entreprise peut prévoir des règles
                                    particulièrement avantageuses pour les personnels envoyés à l'étranger (par exemple,
                                    CCN personnel des entreprises de pâtes alimentaires et de couscous non préparé,
                                    Avenant III (ingénieurs et cadres), 3 juill. 1997, art.
                                    4).<br>&nbsp;<br>&nbsp;<br><strong>Expatriation :</strong><br>À l'inverse, lorsque
                                    le salarié est véritablement expatrié, les dispositions légales prévoient la perte
                                    en principe du bénéfice du régime de sécurité sociale applicable (CSS, art. L. 762-1
                                    et s.). Aussi, les règles conventionnelles mettent, le plus souvent, à la charge de
                                    l'employeur une obligation d'information en direction de l'intéressé, notamment au
                                    sujet de la possibilité qui lui offre le Code de la sécurité sociale de conserver
                                    une affiliation au régime français en s'inscrivant volontairement auprès de la
                                    Caisse des Français de l'Étranger (CFE). Dans un tel cas, la norme conventionnelle
                                    peut prévoir le versement d'une prime supplémentaire liée à la situation
                                    d'expatriation, afin de lui permettre de faire face au coût que représentent les
                                    cotisations à la CFE.<br>Certaines dispositions conventionnelles sont plus
                                    avantageuses car elles obligent l'employeur à organiser la protection sociale du
                                    salarié et des membres de sa famille par delà le maintien du bénéfice du régime
                                    légal. Ainsi, l'article 14 de la Convention collective nationale des personnels
                                    navigants techniques des entreprises de transport aérien et assimilés indique qu'“en
                                    cas de déplacement, de détachement ou d'affectation temporaire, hors du champ
                                    d'application géographique du régime général de la sécurité sociale, l'entreprise
                                    prend les mesures nécessaires pour que les garanties sociales du régime général ou
                                    des régimes complémentaires (régime maladie, accident du travail et vieillesse de la
                                    sécurité sociale, CRPNP, Assedic) dont il bénéficie au moment du déplacement, du
                                    détachement ou de l'affectation temporaire soient maintenues au navigant ou, en cas
                                    d'impossibilité, que lui soient assurées des garanties analogues sans augmentation
                                    de taux de la part salariale des charges sociales”.<br>&nbsp;<br>Ainsi, la règle est
                                    que l’expatrié est affilié au régime de protection sociale du pays dans lequel il
                                    exerce sa mission.<br>Néanmoins, afin de pallier les carences du système de
                                    protection sociale du pays d’accueil, l’expatrié salarié ou non salarié a la
                                    possibilité de bénéficier des droits et prestations du régime de Sécurité sociale
                                    français en adhérant au régime d’assurance volontaire de la Caisse des français de
                                    l’étranger (CFE). Le régime spécifique élaboré pour les français résidant à
                                    l’étranger est donc fondé sur le principe d’une assurance
                                    volontaire.<br>&nbsp;<br>La CFE est un organisme privé en charge du service public
                                    de la sécurité sociale. La demande d’affiliation doit être introduite dans les 3
                                    mois suivant le départ ou le début de l’activité à l’étranger et au plus tard, avant
                                    l’expiration d’un délai d’un an. Les cotisations versées à la CFE sont en principe à
                                    la charge du salarié, mais rien n’interdit à l’employeur de les prendre en charge,
                                    même partiellement.<br>&nbsp;<br>Le salarié français expatrié à l’étranger ne
                                    bénéficie plus du régime français de sécurité sociale. Il est affilié au régime
                                    local du pays d’accueil. Sa protection va alors varier selon les législations. D’où
                                    l’intérêt de s’affilier volontairement à la Caisse des français à l’étranger (ce qui
                                    ne le dispense pas de l’obligation d’être assujetti au régime local) : double
                                    cotisation.<br>&nbsp;<br><strong>Les avantages de ce système résident dans la
                                        souplesse, la continuité et le cout de l’adhésion :</strong></p>
                                <ul>
                                    <li><strong>La souplesse :</strong> le salarié peut choisir les risques contre
                                        lesquels il veut s’assurer : principe d’affiliation volontaire à la carte ;</li>
                                    <li><strong>Le coût :</strong> l’adhésion à la CFE coûte environ 3 fois moins cher
                                        que la solution du détachement (légal, conventionnel ou communautaire) ;</li>
                                    <li><strong>La continuité :</strong> CFE constitue le trait d’union avec la sécurité
                                        sociale française, en ce sens que le salarié pourra dès son retour en France,
                                        bénéficier de la protection sociale du régime français, sans qu’un délai de
                                        carence ne puisse lui être opposé.</li>
                                </ul>
                                <p>&nbsp;<br><strong>Les inconvénients de ce système sont :</strong></p>
                                <ul>
                                    <li>Le niveau des remboursements : la CFE ne rembourse les prestations que dans la
                                        limite des tarifs applicables en France, ce qui peut s’avérer insuffisant si le
                                        salarié est expatrié vers un pays dans lequel les soins sont onéreux ;</li>
                                    <li>L'adhésion à la C.F.E. ne dispense pas toujours de régler des cotisations dans
                                        le pays d'expatriation. Si la cotisation au régime local de sécurité sociale est
                                        obligatoire (c’est le cas le plus fréquent en pratique), le salarié est soumis à
                                        une double cotisation.</li>
                                </ul>
                                <p>&nbsp;<br><strong>Elle couvre deux risques pour lesquels elle assure tant le
                                        recouvrement des cotisations que le service des prestations :</strong></p>
                                <ul>
                                    <li>Le risque maladie, maternité, invalidité ;</li>
                                    <li><strong>Le risque ATMP :</strong> accidents du travail, maladies
                                        professionnelles.</li>
                                </ul>
                                <p>&nbsp;<br>En outre, la CFE recouvre, pour le compte de la Caisse Nationale
                                    d’assurance vieillesse les cotisations d’assurance
                                    vieillesse.<br>&nbsp;<br><strong>Pour le risque maladie, maternité,
                                        invalidité:</strong><br>Les prestations en nature sont les mêmes que celles du
                                    régime général : frais médicaux, médicaments, hospitalisations. Elles sont prises en
                                    charge dans la limite des tarifs de remboursement en vigueur en France (70%). Pour
                                    les frais d’hospitalisation, l’assuré doit faire l’avance et demander ensuite le
                                    remboursement à la CFE.<br>Les prestations en espèces (indemnités journalières et
                                    capital décès) ne sont dues que si le contrat d’assurance le prévoit
                                    (optionnel).<br>&nbsp;<br><strong>Pour le risque ATMP :</strong><br>Tous les soins
                                    et arrêts de travail sont pris en charge au profit de l’assuré.<br>Pour les frais,
                                    le remboursement s’effectue sur la base des tarifs français. Quant aux indemnités
                                    journalières et rentes d’incapacité, tout dépend de l’option choisie.<br>Et si, à
                                    son retour en France, l’assuré a encore des séquelles, la coordination avec le
                                    régime français est assurée.<br>&nbsp;<br><strong>Pour le risque vieillesse
                                        :</strong><br>Le salarié peut décider de cotiser auprès de la CFE qui va
                                    reverser les cotisations à la Caisse nationale (française d’assurance vieillesse).
                                    Les périodes d’assurance obligatoire et facultative se cumulent pour calculer la
                                    retraite qui sera perçue.<br>&nbsp;<br><strong>Il est possible de souscrire une
                                        assurance complémentaire auprès de :</strong></p>
                                <ul>
                                    <li>la CRE (Caisse des retraites pour les expatriés employés, cadres et non cadres),
                                        qui est membre de l’ARRCO (complémentaire retraite employés) ;</li>
                                    <li>l’IRCAFEX (cadres) qui est membre de l’AGIRC (organisme de retraite
                                        complémentaire des cadres).</li>
                                </ul>
                                <p>&nbsp;<br><strong>Pour le risque chômage :</strong><br>Le Code du travail (article
                                    L.5422-13) fait obligation à tout employeur établi en France d’assurer ses salariés
                                    contre le risque perte d’emploi, même si ces derniers ont le statut d’expatrié (ou
                                    de détaché) au regard de la Sécurité Sociale.<br>Mais, ce principe ne joue que pour
                                    ceux qui sont expatriés dans un pays non membre de l’UE ou EEE. Dans ce cas,
                                    l’affiliation au GARP (Association des risques professionnels) est obligatoire si et
                                    seulement si un contrat de travail lie toujours le salarié et l’employeur d’origine.
                                    Sinon, elle est facultative.<br>Les salariés expatriés dans un Etat membre relèvent
                                    obligatoirement du régime local d’assurance chômage en vigueur dans la pays
                                    d’accueil (conditions d’affiliation et prestations) : égalité de traitement et
                                    totalisation des périodes.<br>La question de l'assurance chômage est peu traitée
                                    dans les conventions et accords collectifs de travail. En effet, cette question est
                                    délicate à aborder dans des textes généraux et collectifs dans la mesure où leur
                                    présence serait de nature à inquiéter, plus qu'à rassurer, les candidats à
                                    l'expatriation. Dès lors, cette question est plutôt traitée à l'oral, lors des
                                    entretiens qui précèdent le départ de l'intéressé, ou dans une mention écrite
                                    lapidaire portée sur la lettre de mission ou l'avenant au contrat de
                                    travail.<br>&nbsp;<br><strong>Prévoyance et prestations sociales :</strong><br>La
                                    protection sociale du salarié est organisée en termes de prestations sociales par
                                    les normes supranationales telles qu'issues des traités diplomatiques ou des normes
                                    communautaires. Par voie de conséquence, les dispositions conventionnelles ne sont
                                    pas d'une importance première. Le plus souvent, elles se contentent d'informer les
                                    candidats au départ sur le régime social qui découle des textes supranationaux pour
                                    les salariés détachés à l'étranger ou expatriés (par exemple, CCN des cabinets de
                                    métreurs-vérificateurs, 16 avr. 1993, annexe IV, déplacements à l'étranger
                                    concernant les contrats de travail pour les déplacements ou affectations à
                                    l'étranger, avenant 1er juin 1994).<br>&nbsp;<br><strong>Retraite :</strong><br>En
                                    matière de retraite le problème est un peu différent dans la mesure où la
                                    constitution d'une pension vieillesse ne dépend pas seulement de la législation de
                                    sécurité sociale. Les régimes complémentaires de retraite, obligatoires et
                                    facultatifs, ont également leur importance. Aussi, devant la complexité de la
                                    situation, certains accords collectifs se limitent à des formules lapidaires qui
                                    n'éclairent pas beaucoup le salarié sur l'étendue de ses droits. Par exemple,
                                    certains accords se contentent d'indiquer que “les cadres en fonction à l'étranger
                                    continuent à souscrire aux régimes de retraite et de prévoyance du pays d'origine
                                    dans la mesure du possible”. Cependant, depuis le 1er janvier 2000, les régimes de
                                    retraite complémentaire obligatoires, AGIRC et ARRCO, relèvent des règles de
                                    coordination communautaire applicables à l'assurance vieillesse du régime général.
                                    Par conséquent, le problème est beaucoup plus simple (V. Déclaration du Gouvernement
                                    français : Journal Officiel des communautés européennes 28 Juillet 1999). Dès lors,
                                    les normes conventionnelles relatives à la retraite devraient connaître une
                                    amélioration de leur rédaction sur le thème de la retraite.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
