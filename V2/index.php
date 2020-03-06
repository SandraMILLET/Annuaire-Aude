<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Annuaire des artisans</title>
    </head>

    <body>

        <nav class="main_nav">
            <div><img src=""></div>
            <div>
                <a class="Actu" href="">Actus</a>
                <a class="Contact" href="contact/index.html">Contact</a>
                <a id="Connexion" href="">Se connecter</a>
                <a id="Inscription" href="">S'inscrire</a>
                <div><img src="IMG/loupe3.png"></div>
            </div>
        </nav>
        <header>
            <h2>Annuaire Professionnel</h2>
            <h1>Trouvez un artisan proche de chez vous !</h1>

            <form action="" method="" id="QuickSearch">
                <div>
                    <select class="Metier" value="Que recherchez-vous ?">
                        <option id="Plomberie" value="Plombier">Plombier</option>
                        <option id="Menuiserie" value="Menuisier">Menuisier</option>
                        <option id="Electric" value="Electricien">Electricien</option>
                        <option id="Peinture" value="Peintre">Peintre</option>
                    </select>
                </div>

                <div>
                    <select class="Metier" value="Où êtes-vous ?">
                        <option id="Carcassonne" value="Carcassonne">Carcassonne</option>
                        <option id="Limoux" value="Limoux">Limoux</option>
                        <option id="Couiza" value="Couiza">Couiza</option>
                        <option id="Quillan" value="Quillan">Quillan</option>
                        <option id="Narbonne" value="Narbone">Narbonne</option>
                        <option id="Lézignan" value="Lézignan">Lézignan</option>
                        <option id="Castelnaudary" value="Castelnaudary">Castelnaudary</option>
                    </select>
                </div>
                <!--voir a integrer maps localisation aussi attention user peut enlever la localisation-->

                <button id="Rechercher">Rechercher</button>
            </form>
        </header>


        <!-- catégories de métiers -->
        <section class="news py-5" id="about">
            <div class="container py-lg-5">
                <div class="w3l_head">
                    <h3 class="heading text-center">Catégories de métiers</h3>
                    <p class="subs mt-4 text-center mx-auto">Consulter notre annuaire des professionnels en ligne</p>
                </div>
                <div class="row news-grids py-lg-5 py-3 mt-3 text-center">
                    <div class="col-md-4 newsgrid">
                        <figure><img src="IMG/plombier.jpg" alt="news image" class="img-fluid"></figure>
                        <div class="news_btm mt-4">
                            <h6>Bâtiments</h6>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-5 newsgrid">
                        <figure><img src="IMG/esthetique.jpg" alt="news image" class="img-fluid"></figure>
                        <div class="news_btm mt-4">
                            <h6>Esthétique</h6>
                        </div>
                    </div>
                    <div class="col-md-4  mt-md-0 mt-5 newsgrid">
                        <figure><img src="IMG/restauration.jpg" alt="news image" class="img-fluid"></figure>
                        <div class="news_btm mt-4">
                            <h6>Restauration</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- nos services -->
        
            <div class="container py-lg-5">
                <div class="w3l_head1">
                    <h3 class="heading text-center"> Services</h3>
                    <p class="subs1 mt-4 text-center mx-auto">Integer porttitor mollisar lorem, at molestie arcu
                        pulvinar ut</p>
                </div>
                <div class="row about-info-grids text-center py-lg-5 py-3 mt-3">
                    <div class="col-md-4 about-info about-info1">

                        <img src="IMG/eye-solid.svg" id="serv_icon" alt="oeil-visibilité">
                        <h4>Visibilité</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                    <div class="col-md-4 about-info about-info2">
                        <img src="IMG/thumbs-up-solid.svg" id="serv_icon" alt="oeil-visibilité">
                        <h4>Pratique</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                    <div class="col-md-4 about-info about-info3">
                        <img src="IMG/newspaper-solid.svg" id="serv_icon" alt="news">
                        <h4>Actus</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                </div>
            </div>
        
            <!-- blog -->
        <article class="Découvrir">
            <h3 href="">Actus</h3>

            <section>
                <div class="Métier">
                    <img src="IMG/conformite.jpg" alt="conformité">
                    <div><span>Restez informés sur les dernières normes</span></div>
                </div>

                <aside class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="IMG/conformite.jpg" alt="" id="Professionnel">
                        <a class="Expert" href="">Voici la dernière norme<br>Consulter</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="IMG/conformite.jpg" alt="" id="Professionnel">
                        <a class="Expert" href="">Voici la dernière norme<br>Consulter</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="IMG/conformite.jpg" alt="" id="Professionnel">
                        <a class="Expert" href="">Voici la dernière norme<br>Consulter</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="IMG/conformite.jpg" alt="" id="Professionnel">
                        <a class="Expert" href="">Voici la dernière norme<br>Consulter</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="IMG/conformite.jpg" alt="" id="Professionnel">
                        <a class="Expert" href="">Voici la dernière norme<br>Consulter</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="IMG/conformite.jpg" alt="" id="Professionnel">
                        <a class="Expert" href="">Voici la dernière norme<br>Consulter</a>
                    </div>
                </aside>
            </section>
        </article>

        <!-- footer -->
        <footer>
            <div class="ctnr_footer">

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-3" class="foot1">

                            <div class="container-fluid">

                                <div class="box_titre_foot1" class="row">
                                    <div class="titre_foot1" class="col-sm-12">Inscrivez-vous à notre newsletter
                                    </div>
                                </div>

                                <div class="box_btn_foot1" class="row">

                                    <div class="box_btn_foot1_1" class="col-sm-6">
                                        <a href="#" class="news_button">Votre e-mail</a>
                                    </div>
                                    <div class="box_btn_foot1_2" class="col-sm-6">
                                        <a href="#" class="news_button2">Je m'inscris</a>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-3" class="foot2">

                            <div class="container-fluid">

                                <div class="box_titre_foot2" class="row">

                                    <div class="titre_foot2" class="col-sm-12">Nos solutions</div>

                                </div>

                                <div class="box_texte_foot2" class="row">

                                    <div class="texte_foot2" class="col-sm-12">Lorem ipsum dolor sit amet,
                                        consectetur adipiagna ultrices
                                        iaculis. Vestibulum, felis, libero, ac lacinia
                                        dictumst eget amet ut. Imperdiet pellentesque
                                        fermentum lacinia nibh nulla
                                        morbi a.</div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-3" class="foot3">

                            <div class="container-fluid">

                                <div class="box_titre_foot3" class="row">

                                    <div class="titre_foot3" class="col-sm-12">A propos</div>

                                </div>
                                <div class="box_texte_foot3" class="row">

                                    <div class="texte_foot3" class="col-sm-12">Lorem ipsum dolor sit amet,
                                        consectetur adipiagna ultrices
                                        iaculis. Vestibulum, felis, libero, ac lacinia
                                        dictumst eget amet ut. Imperdiet pellentesque
                                        fermentum lacinia nibh nulla
                                        morbi a.
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-3" class="foot4">

                            <div class="container-fluid">

                                <div class="box_titre_foot4" class="row">
                                    <div class="titre_foot4" class="col-sm-12">Support et Contact</div>
                                </div>
                                <div class="box_tel_foot4" class="row">
                                    <div class="tel_foot4" class="col-sm-12">04 68 56 67 11</div>
                                </div>
                                <div class="box_texte_foot4" class="row">
                                    <div class="texte_foot4" class="col-sm-12">Suivez-nous !</div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </body>

</html>