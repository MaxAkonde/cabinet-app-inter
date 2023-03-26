@extends('layouts.app')

@section('content')
<div class="homeslider">
    <div class="slider" style="background-image: url(skins/default/images/img/slider-1.jpg);">
        <div class="captionSlider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="caption-block">
                            <div class="ImgSldier"><img src="{{ asset('skins/default/images/logo-slider.png') }}"
                                    alt="" /></div>
                            <div class="subtitle-caption">Avocats expérimentés et compétents inscrits au Barreau de
                                Paris <strong>Droit Social et Droit du Travail</strong></div><a href="#"
                                title="Nous contacter" class="btn btn-custom"><span>Nous contacter</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider" style="background-image: url({{ asset('skins/default/images/img/slider-2.jpg') }});">
        <div class="captionSlider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="caption-block">
                            <div class="ImgSldier"><img src="{{ asset('skins/default/images/logo-slider.png') }}"
                                    alt="" /></div>
                            <div class="subtitle-caption">Avocats expérimentés et compétents inscrits au Barreau de
                                Paris <strong>Droit Social et Droit du Travail</strong></div><a href="#"
                                title="Nous contacter" class="btn btn-custom"><span>Nous contacter</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider" style="background-image: url({{ asset('skins/default/images/img/slider-3.jpg') }});">
        <div class="captionSlider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="caption-block">
                            <div class="ImgSldier"><img src="{{ asset('skins/default/images/logo-slider.png') }}"
                                    alt="" /></div>
                            <div class="subtitle-caption">Avocats expérimentés et compétents inscrits au Barreau de
                                Paris <strong>Droit Social et Droit du Travail</strong></div><a href="#"
                                title="Nous contacter" class="btn btn-custom"><span>Nous contacter</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="logo_slider_box">
    <div class="container">
        <div class="avis_google">
            <h3>Cabinet A-P</h3>
            <div class="lien_ext">
                <a href="#" target="_blank" class="btn-ggle">Site Web</a>
                <a href="#" target="_blank" class="btn-ggle">Itinéraire</a>
                <a href="#" target="_blank" class="btn-ggle">Enregister</a>
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
        <div class="item_slider_logo"><a href="#" title="Le figaro"><img
                    src="{{ asset('skins/default/images/logo/le-figaro.png') }}" alt="Le figaro" /></a><a
                href="avocat/cabinet/presse.html" title="L'express"><img
                    src="{{ asset('skins/default/images/logo/l-express.png') }}" alt="L'express" /></a><a
                href="avocat/cabinet/presse.html" title="Challenges"><img
                    src="{{ asset('skins/default/images/logo/challenges.png') }}" alt="Challenges" /></a><a
                href="avocat/cabinet/presse.html" title="TF1"><img
                    src="{{ asset('skins/default/images/logo/tf1.png') }}" alt="TF1" /></a><a
                href="avocat/cabinet/presse.html" title="BFM TV"><img
                    src="{{ asset('skins/default/images/logo/bfm-tv.png') }}" alt="BFM TV" /></a><a
                href="avocat/cabinet/presse.html" title="Mediapart"><img
                    src="{{ asset('skins/default/images/logo/mediapart.png') }}" alt="Mediapart" /></a><a
                href="avocat/cabinet/presse.html" title="Marianne"><img
                    src="{{ asset('skins/default/images/logo/marianne.png') }}" alt="Marianne" /></a></div>
    </div>
</div>
    <div class="wrap">
        <section class="droit_social_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="headingtitle">
                            <h2><span>Droit</span> Social</h2>
                        </div>
                        <div class="row">
                            <div class="col-6" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-expatriation"></i>
                                        <h4>Expatriation</h4>
                                    </span></a></div>
                            <div class="col-6" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-rupture"></i>
                                        <h4>Rupture</h4>
                                    </span></a></div>
                            <div class="col-6" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-licenciement"></i>
                                        <h4> Licenciement</h4>
                                    </span></a></div>
                            <div class="col-6" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-harcelement"></i>
                                        <h4>Harcèlement</h4>
                                    </span></a></div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-md-2">
                        <div class="midlleS"><img src="{{ asset('skins/default/images/img/avocat.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 Mobile-m">
                        <div class="headingtitle">
                            <h2><span>Le </span>Cabinet</h2>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-presse"></i>
                                        <h4>Presse</h4>
                                    </span></a></div>
                            <div class="col-6 col-md-4" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-acces"></i>
                                        <h4>Accès</h4>
                                    </span></a></div>
                            <div class="col-6 col-md-4" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-contact"></i>
                                        <h4>Contact</h4>
                                    </span></a></div>
                            <div class="col-6 col-md-4" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-m-legales"></i>
                                        <h4>Mentions légales</h4>
                                    </span></a></div>
                            <div class="col-6 col-md-4" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-tarifs"></i>
                                        <h4>Tarifs</h4>
                                    </span></a></div>
                            <div class="col-6 col-md-4" data-aos="zoom-in"><a href="#" class="block-social"><span><i
                                            class="icon icon-equipe"></i>
                                        <h4>L'equipe</h4>
                                    </span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="eq_block">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-12">
                        <div class="eq-item_titre" data-aos="fade-up">
                            <h1>Avocat spécialisé en droit social et droit du travail à Paris<br></h1><a id="btn-rdv1"
                                href="javascript:;" class="btn-rdv"><i class="icon icon-calendar-spring"></i> Prendre
                                RDV</a><!-- modal -->
                            <div class="modal-overlay">
                                <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
                                            <path fill="#000000"
                                                d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                                            </path>
                                        </svg></a>
                                    <div class="modal-content">
                                        <div class="bloc_rdv">
                                            <div class="titreRDV text-center">Prendre rendez-vous</div>
                                            <p class="text-center">Veuillez remplir le formulaire ci-dessous pour nous
                                                prendre un rendez-vous</p>
                                            <form action="https://www.cabinet-ap.fr/message.php" method="post"
                                                id="Devis_form"><input type="text" name="mail" id="mail"
                                                    value="">
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12"><label>Nom
                                                            <sup>*</sup></label><input type="text" name="nom"
                                                            required="" class="contact-form" placeholder=""></div>
                                                    <div class="form-group col-md-6 col-12"><label>Prénom
                                                            <sup>*</sup></label><input type="text" name="prenom"
                                                            required="" class="contact-form" placeholder=""></div>
                                                    <div class="form-group col-md-6 col-12"><label>Téléphone
                                                            <sup>*</sup></label><input type="text" name="telephone"
                                                            required="" class="contact-form" placeholder=""></div>
                                                    <div class="form-group col-md-6 col-xs-12"><label>Email
                                                            <sup>*</sup></label><input type="text" name="email"
                                                            required="" class="contact-form" placeholder=""></div>
                                                    <div class="form-group col-12 text-center">
                                                        <textarea name="message" required="" class="contact-form" placeholder="Votre message"></textarea><input type="submit"
                                                            value="Prendre RDV" class="btn btn-custom">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end modal -->
                        </div>
                        <div class="eq-item" data-aos="fade-up">
                            <h2><strong>Notre</strong> Equipe<br></h2>
                            <ul>
                                <li>Le CABINET A-P est un cabinet d’avocats parisien fondé en 2007 par Maître Alina
                                    PARAGYIOS. Le Cabinet est aujourd’hui composé de cinq avocats.</li>
                                <li>La Cabinet intervient dans deux domaines particuliers : le droit social et le droit
                                    du travail.</li>
                                <li>Son expérience vous assure la garantie d’une écoute professionnelle de qualité et
                                    d’une offre adaptée à vos besoins.&nbsp;</li>
                                <li>Plus précisément, en matière de droit social, le Cabinet met à votre service ses
                                    compétences en droit du travail et droit des affaires de la sécurité sociale. Le
                                    Cabinet est également amené à assurer le suivi de certaines procédures pénales
                                    connexes aux instances sociales.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="savoir_block">
            <div class="sf-bg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="text-center">
                            <h2>Notre Savoir Faire ...<br></h2>
                        </div>
                        <div class="block-sf">
                            <div class="row" data-aos="fade-up">
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img
                                                src="{{ asset('skins/default/images/img/droit-social.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3><em>Droit</em> social<br></h3>
                                            <p><strong>Consultation</strong><br>Le Client bénéficie d’une consultation
                                                téléphonique ou physique, sur rendez-vous, avec un avocat du Cabinet<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img
                                                src="{{ asset('skins/default/images/img/creation-startup.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3><em>Négo</em>ciation<br></h3>
                                            <p>Le Cabinet peut intervenir dans le cadre de différentes négociation
                                                (négociation de contrat, de départ, de dommages et intérêts,...).<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img
                                                src="{{ asset('skins/default/images/img/negociation.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3><em>Réd</em>action<br></h3>
                                            <p>Le Cabinet prend en charge les formalités administratives nécessaires à
                                                la création de votre société et leur rédaction (immatriculation, pack
                                                d'actionnaires, ...).<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item-sf">
                                        <div class="img-sf"><img
                                                src="{{ asset('skins/default/images/img/redaction.jpg') }}"
                                                alt="" /></div>
                                        <div class="text-sf">
                                            <h3><em>Content</em>ieux<br></h3>
                                            <p>Le Cabinet représente son client devant les juridictions sociales
                                                compétentes (conseil de prud'hommes, cour d'appel,...).<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="metier_block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="metier-item" data-aos="fade-up">
                            <h2><em>Le métier</em> d'avocat</h2>
                            <p>L'avocat est un professionnel du droit qui est soumis à des règles déontologiques.
                                L'avocat est indépendant par rapport au juge, au client et à toute idée préconçue.
                                L'indépendance permet à l'avocat de s'exprimer librement devant les tribunaux. Il est
                                également tenu de respecter scrupuleusement les devoirs de la justice. L'avocat ne peut
                                divulguer les confidences qui lui sont faites. Dans le même esprit, la correspondance
                                entre avocats, et entre l'avocat et son client est confidentielle. Chaque avocat est
                                soumis à la discipline de l'Ordre des avocats auquel il appartient.</p>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-5"><img
                            src="{{ asset('skins/default/images/img/metier-avocat.png') }}" alt=""
                            style="width: 100%" /></div>
                </div>
            </div>
        </section>
        <section class="equipe-home">
            <div class="sf-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-2">
                        <div class="equipe_item">
                            <div class="img_equipe"><img src="{{ asset('skins/default/images/equipe/Alina.jpg') }}"
                                    alt="Alina PARAGYIOS" /></div>
                            <hr class="colrM">
                            <div class="text_equipe">
                                <h3>Me Alina PARAGYIOS,<strong> AVOCAT AU BARREAU DE PARIS</strong><br></h3>
                                <p>Alina est titulaire d'un Doctorat en droit, d'une DEA en droit international public
                                    et privé de l'Université de Nice-Sophia Antipolis. Avant de fonder le cabinet en
                                    2007, ...<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="equipe_item">
                            <div class="img_equipe"><img src="{{ asset('skins/default/images/equipe/Pierre.jpg') }}"
                                    alt="Pierre BEFRE" /></div>
                            <hr>
                            <div class="text_equipe">
                                <h3>Me Pierre BEFRE,<strong>AVOCAT AU BARREAU DE PARIS</strong><br></h3>
                                <p>Pierre est titulaire d'un doctorat en droit privé et du Master 2 Droit et Pratique
                                    des Relations du Travail de l'Université Paris 2 Panthéon- Assas.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="equipe_item">
                            <div class="img_equipe"><img src="{{ asset('skins/default/images/equipe/Fatima.jpg') }}"
                                    alt="Fatima BELGHOMARI" /></div>
                            <hr class="colrM">
                            <div class="text_equipe">
                                <h3>Me Fatima BELGHOMARI,<strong>AVOCAT AU BARREAU DE PARIS</strong><br></h3>
                                <p>Fatima est titulaire d'un Master 2 en Droit social et Relations professionnelles
                                    obtenu à l'université Paris Ouest Nanterre La Défense (Paris X).<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="equipe_item">
                            <div class="img_equipe"><img src="{{ asset('skins/default/images/equipe/Anthony.jpg') }}"
                                    alt="Anthony STEINITZ" /></div>
                            <hr>
                            <div class="text_equipe">
                                <h3>Me Anthony STEINITZ,<strong>AVOCAT AU BARREAU DE PARIS</strong><br></h3>
                                <p>Anthony est titulaire d’une Maîtrise en droit privé, mention droit des affaires
                                    obtenu à l’université Paris II Panthéon-Assas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="equipe_item">
                            <div class="img_equipe"><img src="{{ asset('skins/default/images/equipe/Francois.jpg') }}"
                                    alt="François PACHY" /></div>
                            <hr class="colrM">
                            <div class="text_equipe">
                                <h3>Me François PACHY,<strong>AVOCAT AU BARREAU DE PARIS</strong></h3>
                                <p>François est titulaire d'un double diplôme en droit des affaires européen et comparé
                                    et en management obtenu à l'ULCO et à SKEMA Business School.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="equipe_item">
                            <div class="img_equipe"><img src="{{ asset('skins/default/images/equipe/Julie.jpg') }}"
                                    alt="Julie LEMARINIER" /></div>
                            <hr class="colrM">
                            <div class="text_equipe">
                                <h3>Me Julie LEMARINIER, <strong>Avocat au Barreau de Paris</strong></h3>
                                <p>Julie est titulaire d'un Master 2 en Droit social et Relations de travail obtenu à
                                    l'Université Paris 2 Panthéon-Assas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="interventions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="youT"><iframe width="640" height="395" src="#" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe></div>
                        </div>
                        <div class="col-md-6">
                            <div class="pase_actu"><a href="#" target="_blank"
                                    style="background-image: url(skins/default/images/cigarette_electronique.jpg); "><span>Cigarette
                                        électronique : au bureau, une interdiction de vapoter pas toujours
                                        respectée</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
