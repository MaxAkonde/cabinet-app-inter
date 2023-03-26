@extends('layouts.app')

@section('content')
    <div class="banner-Droit" style="background-image: url({{ asset('skins/default/images/img/bg-rupture.jpg') }});">
        <div class="captionSlider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="caption-block">
                            <div class="ImgSldier"><img src="{{ asset('skins/default/images/logo-slider.png') }}" alt="" />
                            </div>
                            <div class="subtitle-caption">Avocats expérimentés et compétents inscrits au Barreau de
                                Paris <strong>Droit Social et Droit du Travail</strong></div><a
                                href="#" title="Nous contacter" class="btn btn-custom"><span>Nous
                                    contacter</span></a>
                            <div class="avis_google">
                                <h3>Cabinet A-P</h3>
                                <div class="lien_ext">
                                    <a href="#" target="_blank" class="btn-ggle">Site
                                        Web</a>
                                    <a href="#" target="_blank"
                                        class="btn-ggle">Itinéraire</a>
                                    <a href="#" target="_blank"
                                        class="btn-ggle">Enregister</a>
                                </div>
                                <div class="avis_block">
                                    <div id="google_avis">
                                        4.7
                                        <div class="avis"><i class="avis-10"></i></div>
                                        <span>105 avis google</span>
                                    </div>
                                    <p>Avocat spécialisé en droit social et<br /> droit du travail à Paris</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="section-int">
            <div class="container">
                <div class="row">
                    <div class="d-none d-md-block col-md-6"><img src="{{ asset('skins/default/images/img/rupture-photo.png') }}"
                            alt="" /></div>
                    <div class="col-md-6">
                        <div class="item-sect-int">
                            <div>
                                <h1>Rupture</h1>
                                <ul>
                                    <li>Le contrat de travail peut être rompu à tout moment, à l’initiative de
                                        l’employeur, du salarié ou d’un commun accord. Dans tous les cas, certains
                                        documents doivent être remis au salarié à l’échéance du contrat.</li>
                                    <li>Le contrat de travail peut ainsi être rompu à l’initiative de l’employeur
                                        pendant la période d’essai sans motif, dans le cadre d’une mise à la retraite
                                        d’office, mais surtout, dans le cadre d’un licenciement, que ce soit pour motif
                                        personnel, disciplinaire, économique, ou pour inaptitude.</li>
                                    <li>Les différents motifs de licenciement sont présentés en détail au sein de la
                                        rubrique <strong>« Licenciement »</strong>.<br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer-interne"></div>
            </div>
        </div>
        <div class="section-int-o">
            <div class="container">
                <div class="middle_article">
                    <ul>
                        <li>Ainsi, le salarié qui reproche à son employeur des manquements graves à ses obligations
                            contractuelles peut demander au Conseil des prud’hommes de résilier son contrat de travail.
                            Si la résiliation judiciaire est prononcée, alors elle produira les effets d’un licenciement
                            sans cause réelle et sérieuse, ou d’un licenciement nul si le salarié était protégé ou s’il
                            a subi des actes de harcèlement moral et donnera donc droit aux indemnités dues en
                            conséquence. A défaut, le salarié continue de travailler dans les conditions
                            habituelles.<br></li>
                        <li>Ensuite, la prise d’acte de la rupture du contrat de travail constitue un mode de rupture du
                            contrat d’origine jurisprudentielle. Le salarié qui prend acte de la rupture pour des faits
                            qu’il reproche à son employeur saisit le juge afin qu’il statue sur les conséquences de
                            cette rupture. Ainsi, la prise d’acte produira les effets d’un licenciement sans cause
                            réelle et sérieuse si les faits invoqués par le salarié la justifiaient. Dans le cas
                            contraire, elle produira les effets d’une démission.</li>
                        <li>Enfin, salarié et employeur peuvent convenir ensemble de mettre un terme à leur relation
                            contractuelle en signant une rupture conventionnelle. En effet, la rupture conventionnelle
                            permet à l’employeur et au salarié en contrat à durée indéterminée de convenir d’un commun
                            accord des conditions de la rupture du contrat de travail qui les lie. La rupture
                            conventionnelle est possible sous conditions, et, une procédure légale fixe les démarches à
                            respecter (rédaction d’une convention de rupture et validation par la Direccte).<br></li>
                        <li>Dans tous les cas, que la rupture du contrat de travail se soit faite à l’initiative de
                            l’employeur, à celle du salarié, ou d’un commun accord, l’employeur devra remettre au
                            salarié divers documents. Ce sont les documents de fin de fin de contrat, il s’agit du
                            certificat de travail, de l’attestation Pole emploi, du solde de tout compte, ainsi que de
                            l’état récapitulatif de l’ensemble des sommes et valeurs mobilières épargnées ou transférées
                            au sein de l’entreprise dans le cadre des dispositifs de participation, d’intéressement et
                            des plans d’épargne salariale.<br></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-int-l" style="background-image: url({{ asset('skins/default/images/img/bg-rupture1.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item-int-l">
                            <ul>
                                <li>Mais les ruptures du contrat de travail peuvent être également à l’initiative du
                                    salarié, il s’agit en premier lieu de la demande de résiliation judiciaire et de la
                                    prise d’acte ; voire même d’un commun accord, par le biais d’une rupture
                                    conventionnelle signée par l’employeur et le salarié.<br></li>
                                <li>Le certificat de travail est un document remis par l’employeur au salarié à la date
                                    de fin du contrat de travail.<br></li>
                                <li>L’attestation Pole emploi est un document permettant au salarié en fin de contrat de
                                    faire valoir ses droits aux allocations chômage.</li>
                                <li>Le solde de tout compte est établi par l’employeur et remis, contre reçu, au salarié
                                    qui quitte son emploi. L’un des exemplaires du reçu pour solde de tout compte doit
                                    être au salarié. Cependant, la loi n’oblige pas le salarié à le signer.</li>
                                <li>Ces trois documents sont dus au salarié pour tout type de contrat de travail, quel
                                    que soit le motif de la rupture (licenciement…). Aussi, ils sont remis au salarié à
                                    la date de fin de contrat de travail, même si le salarié est dispensé de préavis.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="savoir_block">
            <div class="sf-bg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="text-center">
                            <h2>Nos services<br></h2>
                        </div>
                        <div class="block-sf">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img src="{{ asset('skins/default/images/img/droit-social.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3>Consultation<br></h3>
                                            <p>Le Client bénéficie d’une consultation téléphonique ou physique, sur
                                                rendez-vous, avec un avocat du Cabinet.<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img src="{{ asset('skins/default/images/img/creation-startup.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3>Négociation<em>/Transaction</em><br></h3>
                                            <p><em></em>Le Cabinet peut intervenir dans le cadre de négociation, qu'elle
                                                porte sur le contrat de travail, les indemnités de départ ou des
                                                dommages et intérêts<em></em><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img src="{{ asset('skins/default/images/img/negociation.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3>Rédaction<br></h3>
                                            <p>Le Cabinet rédige tout type de contrats (CDI, CDD, avenant
                                                d'expatriation,...) et d’actes.<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img src="{{ asset('skins/default/images/img/redaction.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3>Contentieux<br></h3>
                                            <p>Le Cabinet représente le Client devant les juridictions compétentes en
                                                matière sociale, pénale et administrative.<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
