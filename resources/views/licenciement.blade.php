@extends('layouts.app')

@section('content')
    <div class="banner-Droit" style="background-image: url({{ asset('skins/default/images/img/bg-licenciement.jpg') }});">
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
                    <div class="d-none d-md-block col-md-6"><img src="{{ asset('skins/default/images/img/licenciement-photo.png') }}"
                            alt="" /></div>
                    <div class="col-md-6">
                        <div class="item-sect-int">
                            <div>
                                <h1>Licenciement<br></h1>
                                <ul>
                                    <li>Le licenciement est la mesure par laquelle un employeur met fin au contrat de
                                        travail d’un salarié.<br></li>
                                    <li>Le licenciement pour cause personnelle est celui qui est prononcé pour un motif
                                        inhérent à la personne du salarié. « le manquement doit être reproché au salarié
                                        personnellement » La faute disciplinaire est constituée par la violation des
                                        règles de discipline de l’entreprise.<br></li>
                                    <li>Le licenciement pour motif économique est effectué par un employeur pour un ou
                                        plusieurs motifs non inhérents à la personne du salarié a cause notamment à des
                                        difficultés économiques ou à des mutations technologiques.</li>
                                    <li>Elle s'oppose à la démission qui constitue une rupture du contrat de travail à
                                        l'initiative du salarié.La rupture conventionnelle a pour objet de mettre un
                                        terme au contrat de travail.</li>
                                    <li>La démission est la rupture du contrat de travail du fait du salarié. L’article
                                        L. 1231-1 C. trav. prévoit que « le contrat de travail conclu sans détermination
                                        de durée peut cesser à l’initiative d’une des parties contractantes.<br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer-interne"></div>
            </div>
        </div>
    </div>
@endsection
