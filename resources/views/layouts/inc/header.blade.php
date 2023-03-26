<header class="header">
    <div class="container">
        <nav class="nav"><a href="#" title="" class="logo"><img
                    src="{{ asset('skins/default/images/logo.png') }}" alt="" /></a>
            <ul class="nav-list">
                <li class="nav-item"><a href="{{ route('expatriation') }}">Expatriation</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu-item"><a href="{{ route('protection_social') }}">Protection
                                sociale</a></li>
                        <li class="nav-submenu-item"><a href="{{ route('regime_social') }}">Régime social</a></li>
                        <li class="nav-submenu-item"><a href="{{ route('regime_fiscal') }}">Régime Fiscal</a></li>
                        <li class="nav-submenu-item"><a href="{{ route('detachement') }}">Détachement</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('rupture') }}">Rupture</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu-item"><a href="#">Prise
                                d'acte</a></li>
                        <li class="nav-submenu-item"><a href="{{ route('rupture_conventionnelle') }}">Rupture
                                conventionnelle</a></li>
                        <li class="nav-submenu-item"><a href="{{ route('resiliation_judiciaire') }}">Résiliation
                                judiciaire</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#"> Licenciement</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu-item"><a href="#">Indemnités</a></li>
                        <li class="nav-submenu-item"><a href="#">Inaptitude</a></li>
                        <li class="nav-submenu-item"><a href="#">Disciplinaire</a>
                        </li>
                        <li class="nav-submenu-item"><a href="#">Economique</a>
                        </li>
                        <li class="nav-submenu-item"><a href="#">Motif
                                Personnel</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Harcèlement</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu-item"><a href="#">Réparation</a>
                        </li>
                        <li class="nav-submenu-item"><a href="#">Porter Plainte</a></li>
                        <li class="nav-submenu-item"><a href="#">Cadre Juridique</a>
                        </li>
                        <li class="nav-submenu-item"><a href="#">Législation</a></li>
                        <li class="nav-submenu-item"><a href="#">Définition</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Droit Social</a></li>
                <li class="nav-item"><a href="#">Le cabinet</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu-item"><a href="#">Presse</a></li>
                        <li class="nav-submenu-item"><a href="#">Accès</a></li>
                        <li class="nav-submenu-item"><a href="#">Contact</a></li>
                        <li class="nav-submenu-item"><a href="#">Mentions
                                légales</a></li>
                        <li class="nav-submenu-item"><a href="#">Tarifs</a>
                        </li>
                        <li class="nav-submenu-item"><a href="#">L'equipe</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-none d-md-flex align-items-center"><a href="tel:0616765566" class="tel-top"><i
                        class="icon icon-phone"></i> 06 16 76 55 66</a><a id="btn-rdv" href="javascript:;"
                    class="btn-rdv"><i class="icon icon-calendar-spring"></i> Prendre RDV</a><!-- modal -->
                <div class="modal-overlay">
                    <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
                                <path fill="#000000"
                                    d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                                </path>
                            </svg></a>
                        <div class="modal-content">
                            <div class="bloc_rdv">
                                <div class="titreRDV text-center">Prendre rendez-vous</div>
                                <p class="text-center">Veuillez remplir le formulaire ci-dessous pour nous prendre
                                    un rendez-vous</p>
                                <form action="https://www.cabinet-ap.fr/message.php" method="post" id="Devis_form">
                                    <input type="text" name="mail" id="mail" value="">
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
                                            <textarea name="message" required="" class="contact-form" placeholder="Votre message"></textarea><input type="submit" value="Prendre RDV"
                                                class="btn btn-custom">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end modal -->
                <div class="d-none d-lg-block custom_rappel_top"><strong>Être rappelé</strong>
                    <form action="https://www.cabinet-ap.fr/message.php" method="post" id="rappel_immediat">
                        <input type="text" name="mail" id="mail2" value=""><input type="hidden"
                            name="type" value="rappel"><input type="text" name="numtel" required=""
                            placeholder="Votre numéro de tel..." class="form-input"><input type="submit"
                            name="OK" value="OK" class=" btn btn-submit">
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>

