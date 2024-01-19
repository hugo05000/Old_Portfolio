<html lang="fr">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <div id="head-placeholder"></div>
    </head>
    <body>
        <!--**En-tête**-->
        <header>
            <nav>
                <div class="logo">
                    <a href="index.html">Hugo MARCEAU</a>
                </div>
                <ul class="nav-links">
                    <li><a href="profil.html">Profil</a></li>
                    <li><a href="stage.html">Stages</a></li>
                    <li><a href="boite_a_outils.html">Boite à outils</a></li>
                    <li><a href="veille.php">Veille</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="burger">
                    <div class="ligne1"></div>
                    <div class="ligne2"></div>
                    <div class="ligne3"></div>
                </div>
            </nav>
            <div class="wrapper enTeteContact">
                <div class="content">
                    <h1>Me contacter</h1>
                    <p class="subtitle">Vous trouverez ici des ressources pour me contacter.</p>
                </div>
            </div>
        </header>
        <!--**Corps de la page**-->
        <main>
            <div class="contactRapide">
                <div class="contactRapideContenu">
                    <div>
                        <div>
                            <i class="fa-solid fa-map-location-dot fa-3x"></i>
                            <h4>Adresse</h4>
                            <p>Gap 05000, France</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <i class="fa-solid fa-at fa-3x"></i>
                            <h4>Mail</h4>
                            <a href="mailto:hugomarceau@icloud.com">contact@hugomarceau.fr</a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <i class="fa-solid fa-mobile fa-3x"></i>
                            <h4>Téléphone</h4>
                            <a href="tel:0695714093">06.95.71.40.93</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="envoieMessage">
                <div class="envoieMessageContenu">
                    <div class="textEnvoieMessage">
                        <h4>Message rapide</h4>
                        <p>Contactez moi rapidement grâce à ce module.</p>
                        <p>Entrez simplement votre adresse mail ainsi que votre message et je prendrais contact avec vous le plus rapidement possible...</p>
                    </div>
                    <div class="zoneEnvoie">
                        <form action="contact.php" method="post">
                            <div class="nomPrenom">
                                <div class="name">
                                    <label id="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" required>
                                </div>
                                <div class="name">
                                    <label id="prenom">Prénom</label>
                                    <input type="text" id="prenom" name="prenom" required>
                                </div>
                                <div class=email>
                                    <label id="email">Email</label>
                                    <input type="email" id="email" name="email"required>
                                </div>
                            </div>
                            <div>
                                <label id="message">Votre message</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>
                            <div>
                                <center><input type="submit" class="bn632-hover bn27" value="Envoyer"></center>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['message'])) {
                            if (!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['message'])) {
                                $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
                                $header .= 'Content-Transfer-Encoding: 8bit';

                                $message = '
                                <html>
                                    <body>
                                        <div align="center">
                                            <u>Nom de l\'expéditeur :</u>' . $_POST['nom'] . '<br />
                                            <u>Mail de l\'expéditeur :</u>' . $_POST['email'] . '<br />
                                            <br />
                                            ' . nl2br($_POST['message']) . '
                                        </div>
                                    </body>
                                </html>
                                ';

                                mail("contact@hugomarceau.fr", "Message - portfolio", wordwrap($message, 70, "\r\n"), $header);
                                echo $msg = "Votre message a bien été envoyé !";
                                header("Location: index.html");
                            } else {
                                echo $msg = "Tous les champs doivent être complétés !";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <!--**Pied de page**-->
        <footer>
            <div id="footer-placeholder"></div>
        </footer>
        <!--Javascript-->
        <script>
            $(function(){
                $("#nav-placeholder").load("navbar.html");
                $("#head-placeholder").load("head.html");
                $("#footer-placeholder").load("footer.html");
            });
        </script>
    </body>
</html>