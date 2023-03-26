@extends('layouts.app')

@section('content')
    <div class="banner-interne" style="background-image: url({{ asset('skins/default/images/img/bg-rupture.jpg') }});"></div>
    <div class="wrap">
        <div id="PageArt" class="section-int">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="item-sect-int">
                            <div>
                                <h2 style="text-align: left;">La rupture conventionnelle<br></h2>
                                <h3>Le cadre général<br></h3>
                                <p>La loi n°2008-596 du 25 juin 2008 portant modernisation du marché du travail a créé,
                                    aux côtés du licenciement et de la démission, une nouvelle voie pour rompre le
                                    contrat d’un commun accord, celle de la rupture conventionnelle homologuée.<br>Cette
                                    nouvelle procédure est introduite aux articles L. 1237-11 et suivants du Code du
                                    travail.<br>&nbsp;<br>La rupture conventionnelle résulte d’une volonté commune de
                                    l’employeur et du salarié de mettre fin au contrat de travail à durée indéterminée
                                    qui les lie. Autrement dit, il s’agit d’un mode de rupture autonome distinct de la
                                    démission comme du licenciement et qui doit être homologué par
                                    l’Administration.<br>&nbsp;<br>En principe, la rupture conventionnelle du contrat de
                                    travail peut être conclue avec tout salarié en contrat à durée indéterminée. Cela
                                    peut ainsi être le cas, selon la circulaire du 17 mars 2009 (Circ. DGT n°2009-04),
                                    pour un salarié français travaillant pour une entreprise étrangère en France, dès
                                    lors qu’il est titulaire d’un CDI de droit français.<br>&nbsp;<br><strong>Cas ou la
                                        rupture conventionnelle est admise :</strong></p>
                                <ul>
                                    <li>Rupture conventionnelle avec un salarié en arrêt maladie d’origine non
                                        professionnelle (Cass. Soc., 30 septembre 2013, n°12-19.711) ;</li>
                                    <li>Rupture conventionnelle avec un salarié en arrêt maladie d’origine
                                        professionnelle (Cass. Soc., 16 décembre 2015, n°13-27.212) ;</li>
                                    <li>Rupture conventionnelle avec une salariée en congé maternité (Cass. Soc., 25
                                        mars 2015, n°14-10.149) ;</li>
                                    <li>Rupture conventionnelle avec un salarié déclaré apte avec réserves (Cass. Soc.,
                                        28 mai 2014, n°12-28.082).</li>
                                </ul>
                                <p>En revanche, une rupture conventionnelle ne peut pas être conclue avec un salarié en
                                    CDD ni avec un apprenti, le contrat d’apprentissage n’étant pas par nature un
                                    contrat à durée indéterminée.<br>&nbsp;<br>Pareillement, la Cour de cassation exclut
                                    la possibilité de conclure une rupture amiable en cas d’inaptitude : « la rupture
                                    d’un commun accord du contrat de travail d’un salarié déclaré inapte en conséquence
                                    d’une maladie (professionnelle ou non) est illégale » (Cass. Soc., 12 février 2002,
                                    n°99-41.698 ; CA Poitiers, ch. Soc., 28 mars 2012, n°10/02441).</p>
                                <h3>La procédure<br></h3>
                                <p>La rupture conventionnelle est subordonnée à un ou plusieurs entretiens au cours
                                    desquels le salarié et l’employeur peuvent se faire assister, conformément à
                                    l’article L. 1237-12 du Code du travail.<br>&nbsp;<br>La tenue d’au moins un
                                    entretien est « une condition substantielle de la rupture conventionnelle ». Ainsi,
                                    l’absence d’entretien est une cause de nullité de la convention de rupture. Mais si
                                    le salarié invoque devant les juges cette nullité, c’est à lui de prouver qu’aucun
                                    entretien n’a effectivement eu lieu (Cass. Soc., 1er décembre 2016,
                                    n°15-21.609).<br>&nbsp;<br>Le Code du travail ne prévoit rien en ce qui concerne le
                                    moment et le lieu où doivent se tenir le ou les entretiens. Ainsi, rien ne semble
                                    obliger l’employeur à les fixer pendant le temps de travail du salarié ni à
                                    rémunérer le temps passé par celui-ci.<br>&nbsp;<br>En l’absence de précisions
                                    légales, il peut être conseillé de prévoir 3 entretiens (2 au minimum) :</p>
                                <ul>
                                    <li>Un premier entretien de cadrage, qui permet d’engager les pourparlers ;</li>
                                    <li>Un entretien de négociations pendant lequel sont définies les conditions
                                        financières et matérielles de la rupture ;</li>
                                    <li>Un entretien dédié à la signature de la rupture conventionnelle qui comprend le
                                        montant brut de l’indemnité spécifique de rupture conventionnelle qui ne peut
                                        être inférieure à celui de l’indemnité légale ni à celui de l’indemnité
                                        conventionnelle de licenciement si elle est plus favorable, la date envisagée de
                                        rupture du contrat de travail (qui ne peut intervenir avant le lendemain du jour
                                        de l’homologation), la date et la signature des parties ainsi que la date de fin
                                        du délai de rétractation.&nbsp;</li>
                                </ul>
                                <p>A l’issue de l’entretien de signature, l’employeur doit remettre un exemplaire de la
                                    convention au salarié. Le non-respect de cette obligation permet au salarié
                                    d’obtenir l’annulation de la rupture conventionnelle. Par conséquent, le salarié
                                    perçoit les indemnités prévues pour licenciement sans cause réelle et
                                    sérieuse.<br>&nbsp;<br>Afin d’éviter les décisions trop hâtives, et afin de
                                    permettre à chaque partie de mesurer la portée de sa décision, l’article L. 1237-13
                                    du Code du travail fixe un délai minimum de 15 jours calendaires entre la signature
                                    de la convention et sa transmission à l’autorité administrative pour homologation ou
                                    pour autorisation (salariés protégés) ; qui permet à chaque partie de revenir sur sa
                                    décision, ce que l’on appelle « droit de rétractation ».<br>&nbsp;<br>Ledit délai
                                    démarre au lendemain de la signature de la convention de rupture.<br>&nbsp;<br>A
                                    l’issue du délai de rétractation, la partie la plus diligente adresse une demande
                                    d’homologation à l’autorité administrative compétente soit la DIRECCTE, avec un
                                    exemplaire de la convention de rupture conformément à l’article L. 1237-14 du Code
                                    du travail.<br>&nbsp;<br>La DIRECCTE dispose alors d’un délai d’instruction de 15
                                    jours ouvrables (les dimanches et jours fériés sont exclus), à compter de la
                                    réception de la demande.<br>&nbsp;<br>A défaut de notification dans ce délai,
                                    l’homologation est réputée acquise, l’homologation est donc tacite et l’autorité
                                    administrative est dessaisie.<br>&nbsp;<br>Enfin, il convient également de préciser
                                    que l’existence d’un différend entre les parties au contrat de travail n’affecte pas
                                    par elle-même la validité de la convention de rupture conventionnelle (Cass. Soc.,
                                    30 septembre 2013, n°12-19.711).<br>&nbsp;<br><strong>Les effets de la rupture
                                        conventionnelle</strong><br>Selon l’article L. 1237-13 du Code de travail, la
                                    date de rupture « ne peut intervenir avant le lendemain du jour de l’homologation ».
                                    La convention de rupture doit impérativement être datée.<br>&nbsp;<br>Ainsi, une
                                    fois la convention de rupture conventionnelle homologuée par la DIRECCTE, le contrat
                                    de travail est définitivement rompue. Aucun préavis n’est à
                                    effectuer.<br>&nbsp;<br>Le salarié se verra donc verser une indemnité spécifique
                                    dont le montant ne peut être inférieur à l’indemnité légale ou conventionnelle si
                                    elle est plus favorable.<br>&nbsp;<br>S’il quitte l’entreprise avant d’avoir pu
                                    prendre la totalité des congés payés qu’il avait acquis, le salarié a droit à une
                                    indemnité compensatrice de congés payés, ainsi qu’à l’ensemble des éléments de
                                    rémunération dus par l’employeur à la date de la rupture du contrat de
                                    travail.<br>&nbsp;<br>Au moment du départ de l’entreprise, l’employeur doit remettre
                                    au salarié un certificat de travail et un exemplaire de l’attestation Pole emploi.
                                    Il doit également établir un solde de tout compte dont il demandera au salarié de
                                    lui donner reçu.<br>Aussi, la rupture conventionnelle du contrat de travail permet
                                    de bénéficier des allocations de chômage, c’est ce qui la distingue principalement
                                    de la démission et la rend très attractive aux yeux du salarié désireux de quitter
                                    son entreprise.<br>&nbsp;<br>Enfin, l’article L. 1237-14 du Code du travail prévoit
                                    la possibilité d’un recours juridictionnel pour les parties.<br>&nbsp;<br>C’est le
                                    Conseil de prud’hommes qui est compétent à peine d’irrecevabilité et ce recours
                                    devra être formé, avant les douze mois suivant la date d’homologation de la
                                    convention.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
