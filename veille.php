<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scal=1.0">
        <title>Hugo MARCEAU - Veille technologique</title>
        <!--CSS-->
        <link rel="stylesheet" href="css/style.css">
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
            <div class="wrapper enTeteVeille">
                <div class="content">
                    <h1>Veille</h1>
                    <p class="subtitle">De quoi s'informer sur les dernières avancées en matière de cybersécurité.</p>
                </div>
            </div>
        </header>
        <!--**Corps de la page**-->
        <main>
            <div class="blocVeille">
                <div>
                    <h2>Bloc 1 - Le fonctionnement des technologies d'affichage</h2>
                </div>
                <div class="blocVeilleContenu">
                    <div>
                        <p>Dans le cadre du bloc 1, j'ai réalisé, avec l'aide de mon camarade Melvin VIOUGEA, un document comparant les différentes technologies d'affichages et leur principe de fonctionnement. </p>
                        <p>Vous pouvez le consulter ci-dessous.</p>
                    </div>
                    <div class="blocVeilleButton">
                        <a href="Documents/Fonctionnement_des_technologies_d_affichage_document.pdf" target="_blank"><button class="bn632-hover bn27">Consulter le document</button></a>
                        <a href="Documents/Fonctionnement_des_technologies_d_affichage_diaporama.pdf" target="_blank"><button class="bn632-hover bn27">Consulter le diaporama</button></a>
                    </div>
                </div>
            </div>
            <div class="blocVeille">
                <div>
                    <h2>Qu'est-ce que la veille technologique ?</h2>
                </div>
                <div class="blocVeilleContenu">
                    <div>
                        <p>Une veille est une activité consistant à rester au courant des dernières avancées et informations sur un secteur donné.</p>
                    </div>
                    <div>
                        <h3>Sujet de ma veille technologique :</h3>
                    </div>
                    <div>
                        <p>Ma veille technologique est issue du flux RSS de O1net : "sécurité". Elle traite de la cybersécurité pour les particuliers et les entreprises, les avancées en terme de cybersécurité, les nouvelles failles découvertes...</p>
                    </div>
                </div>
            </div>
            <div class="veille">
                <?php
                    $rss = simplexml_load_file('https://www.01net.com/rss/actualites/securite/');
                    $cpt = 0;
                    $limite = 10;

                    foreach ($rss->channel->item as $item) {
                        echo '<div class="boxVeille">';
                        echo "<h3>" . $item->title . "</h3>";
                        echo "<p>" . $item->description . "</p>";
                        echo '<a href="'.$item->link.'" target="_blank"><button class="bn632-hover bn27">Consulter</button></a>';
                        echo '</div>';

                        $cpt++;
                        
                        if($cpt==$limite){
                            break;
                        }
                    } 
                ?>
            </div>
        </main>
        <!--**Pied de page**-->
        <footer>
            <div>
                <a href="https://github.com/hugo05000" target="_blank"><img src="../Images/github.png" alt="github"></a>
                <a href="https://www.linkedin.com/in/hugo-marceau-ab6a74213/" target="_blank"><img src="../Images/linkedin.png" alt="linkedin"></a>
            </div>
            <hr>
            <div>
                <p>© Hugo MARCEAU | Tous droits Réservés</p>
            </div>
        </footer>
        <!--Javascript-->
        <script src="js/app.js"></script>
    </body>
</html>