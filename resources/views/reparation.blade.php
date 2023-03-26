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
                                <h2 style="text-align: left;">Préjudice et réparation<br></h2>
                                <p>En commettant ou en laissant commettre un harcèlement moral, l’employeur engage sa
                                    responsabilité. En effet, l’existence d’un harcèlement est en elle-même une faute
                                    appelant une double réparation.<br>Le harcèlement moral est interdit par l’article
                                    L. 1152-1 du Code du travail, dont le non-respect permet au salarié victime de
                                    demander réparation.<br><strong>Sur ce point, la jurisprudence est ferme :</strong>
                                    « un harcèlement moral, lorsqu’il est constitué, cause nécessaire un préjudice »
                                    (Cass. Soc., 6 mai 2014, n°12-25.253). Aujourd’hui encore, l’essentiel du
                                    contentieux de la réparation de ce préjudice se noue devant le juge prud’homal.
                                    Cette action en réparation est le plus souvent dirigée contre l’employeur, même
                                    lorsqu’il n’est pas l’auteur (matériel ou intellectuel) des actes de
                                    harcèlement.<br>Afin de faciliter l’indemnisation du salarié, le principe a été
                                    posé, selon lequel lorsque le harcèlement moral est constitué, il cause «
                                    nécessairement » un préjudice au salarié (Cass. Soc., 6 mai 2014,
                                    n°12-25.253).<br>Le recours à cette notion de « préjudice nécessaire » permet
                                    d’alléger la charge de la preuve du salarié, même si elle a été adoucie depuis la
                                    loi du 8 aout 2016 dite « Loi Travail ».<br>En réalité, cela est logique compte tenu
                                    de l’objectif de protection du droit à la santé.<br>Et, s’agissant de faits graves
                                    en matière de harcèlement moral, cette jurisprudence devrait se maintenir, la santé
                                    mentale étant une « composante de la santé » (Cass. Soc., 10 février 2016,
                                    n°14-26.909).<br>Le juge prud’homal ne vise finalement qu’assez rarement le
                                    fondement délictuel ou contractuel des condamnations prononcées, qui donnent lieu,
                                    dans la plupart des cas, au versement d’une indemnité spécifique et distincte de
                                    celle qui répare l’illégitimité de la rupture par ailleurs reconnue.<br>Ainsi, le 25
                                    juin 2007, la Cour de Cassation a jugé que « Le juge peut retenir l'existence de
                                    faits de harcèlement moral et fixer le montant des dommages-intérêts sans qu'il soit
                                    nécessaire que l'inspection du travail ait retenu une infraction à l'encontre de
                                    l'employeur ».<br>Dans cette affaire, l’employeur condamné à payer au salarié des
                                    dommages-intérêts pour harcèlement moral, invoquait à l'encontre de cette décision
                                    le fait notamment que l'inspection du travail n'avait retenu aucune infraction à son
                                    égard.<br>Autrement dit, les juges du fond apprécient souverainement le montant du
                                    préjudice (Cass. Soc., 29 janvier 2013, n°11-23.743 ; Cass. Soc., 29 septembre 2014,
                                    n°12-28.679). Le salarié, n’ayant demandé que des dommages-intérêts réparant le
                                    préjudice causé par un comportement de l’employeur dont il soutenait qu’il était
                                    constitutif d’un harcèlement moral, ne peut ainsi, sous le couvert d’une critique de
                                    la qualification du comportement fautif de l’employeur retenue par la Cour d’appel,
                                    mais indifférente à la mise en œuvre de la responsabilité de la société, remettre en
                                    cause, devant la Cour de cassation, l’évaluation souveraine par les juges du fond du
                                    préjudice subi par le salarié (Cass. Soc., 29 janvier 2013, n°11-22.867).<br>Aussi,
                                    les héritiers ou légataires universels de la victime (décédée) d’un harcèlement
                                    moral peuvent demander, en justice, la réparation du préjudice subi par la victime
                                    avant son décès (action successorale), peu important que la victime ait engagé ou
                                    non l’action de son vivant (Cass. Crim., 5 février 2013, n°11-89.125).<br>De même,
                                    le salarié harcelé et licencié peut évidemment cumuler des dommages-intérêts pour
                                    licenciement sans cause réelle et sérieuse et des dommages-intérêts pour harcèlement
                                    moral (Cass. Soc., 19 janvier 2012, n°10-30.483). De même, une Cour d’appel peut, à
                                    bon droit, réparer les préjudices distincts résultant de la perte de l’emploi, des
                                    agissements de harcèlement moral et des sanctions disciplinaires injustifiées (Cass.
                                    Soc., 30 novembre 2011, n°11-10.527).<br>En revanche, il n’est pas possible de
                                    demander au juge de sanctionner l’auteur du harcèlement, par exemple en ordonnant à
                                    l’employeur de le licencier, bien que le harcèlement moral caractérise
                                    nécessairement une faute grave.<br>Par ailleurs et surtout, si le harcèlement moral
                                    permet au salarié victime de demander réparation comme vu précédemment, il
                                    caractérise également une violation de l’obligation de sécurité de l’employeur, qui
                                    doit tout mettre en œuvre pour préserver la santé et la sécurité des salariés.<br>Et
                                    pour cause, il pèse sur l’employeur une obligation de prévention des actes de
                                    harcèlement moral en vertu de l’article L. 1152-4 du Code du travail. L’accord
                                    national interprofessionnel du 26 mars 2010 impose également l’obligation de
                                    prévention du harcèlement moral à l’employeur.<br>En ce sens, l’employeur doit
                                    prendre toutes les mesures nécessaires en vue de prévenir de tels
                                    agissements.<br>Ainsi, la méconnaissance de l’obligation de prévention entraine donc
                                    un préjudice réparable distinct du préjudice résultant du harcèlement moral.<br>La
                                    Cour de cassation a récemment confirmé ce point dans d’une décision du 19 novembre
                                    2014.<br>Dès lors, la victime de harcèlement moral peut être indemnisée au titre du
                                    préjudice résultant du harcèlement moral en lui-même mais également au titre du
                                    préjudice résultant de la méconnaissance de l’obligation de prévention de
                                    l’employeur (Cass. Soc., 19 novembre 2014, n°13-17.729).<br>En l’espèce, un salarié
                                    embauché en tant qu’aide conducteur a démissionné après avoir subi des agissements
                                    de harcèlement moral.<br>L’employeur avait organisé à la suite de cet incident une
                                    réunion d’apaisement au cours de laquelle le supérieur hiérarchique, auteur des
                                    agissements de harcèlement moral, avait présenté des excuses, puis a procédé à la
                                    mutation du salarié sans que cela emporte une rétrogradation. L’employeur avait
                                    également mis en place une cellule visant à prévenir les risques psychosociaux.
                                    Cependant, le salarié avait tout de même démissionné.<br>Quelques mois plus tard, le
                                    salarié saisissait le Conseil des prud’hommes pour voir requalifier sa démission en
                                    licenciement sans cause réelle et sérieuse et obtenir la condamnation de l’employeur
                                    à lui verser diverses sommes au titre de la rupture de son contrat de travail et de
                                    l’indemnisation du harcèlement moral.<br>La Cour d’appel a alors condamné
                                    l’employeur à réparer le dommage résultant de la violation de son obligation de
                                    sécurité de résultat et le dommage résultant du harcèlement lui-même.<br>La Haute
                                    juridiction a confirmé le raisonnement des juges du fond : « mais attendu que
                                    l’employeur, tenu d’une obligation de sécurité de résultat en matière de protection
                                    de la santé et de la sécurité des travailleurs, manque à cet obligation, lorsqu’un
                                    salarié est victime sur le lieu de travail d’agissements de harcèlement moral ou
                                    sexuel exercés par l’un ou l’autre de ses salariés, quand bien même il aurait pris
                                    des mesures en vue de faire cesser ces agissements.<br>Et attendu que la Cour
                                    d’appel a alloué des sommes distinctes correspondant au préjudice résultant d’une
                                    part de l’absence de prévention par l’employeur des faits de harcèlement et d’autre
                                    part des conséquences du harcèlement effectivement subi,<br>D’où il suit que le
                                    moyen n’est pas fondé ».<br>Dès lors que des agissements constitutifs de harcèlement
                                    surviennent au sein de l’entreprise, l’employeur manque à son obligation de
                                    prévention même s’il prend des mesures visant à faire cesser les agissements. Et,
                                    cette violation donne lieu à réparation d’un préjudice distinct du préjudice
                                    résultant des conséquences du harcèlement en lui-même.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
