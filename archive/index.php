<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/bulma-prefers-dark" />
        <link rel="stylesheet" href="styles/style.css">
        <script type="text/javascript" src="script.js"></script>
        <title>Sauveteurs du dunkerquois</title>
    </head>
    <body onload="document.body.style.opacity='1'";>
        
        <header>
            <div class="container is-widescreen">
                <div class="content is-large has-text-centered" id="titres" style="padding-top: 40%; padding-bottom: 40%; font-size: 60px; margin: 0; color: white; font-size: 42px; text-align: center; font-family: sans-serif;">
                    <!--<h1 class="has-text-white" id="titre">
                        Sauveteurs du dunkerquois
                    </h1>-->
                    <div id="titres">
                        <p>Sauveteurs du dunkerquois</p>   <!--class="title is-1 has-text-white"   class="subtitle is-3 has-text-white"-->
                        <p>Fan club officieux de Thomas Pesquet, le plus beau spationaute de tous les temps &#128150;&#128150;&#128150;</p>
                    </div>
                </div>
                
            </div>
        </header>

        <div class="columns is-gapless is-multiline">
            <aside class="menu" id="sidemenu">
                <p class="menu-label">
                    Espace personnel 
                </p>
                <ul class="menu-list">
                    <li><a>Archives</a></li>
                </ul>
                <p class="menu-label">
                    Général
                </p>
                <ul class="menu-list">
                    <li><a>Accueil</a></li>
                    <li
                    onmouseover="document.getElementById('menusauveteurs').hidden=false;"
                    onmouseout="document.getElementById('menusauveteurs').hidden=true;"
                    >
                        <a>Sauveteurs</a>
                        <ul class="menu-list" id="menusauveteurs" hidden>
                            <li><a>Tableau d'honneur</a></li>
                            <li><a>Qui étaient-ils?</a></li>
                            <li><a>Que faisaient-ils?</a></li>
                            <li><a>Paroles de sauveteurs et sauvés</a></li>
                            <li><a>Gratifications</a></li>
                            <li><a>Sauveteurs d'ailleurs</a></li>
                        </ul>
                    </li>
                    <li
                    onmouseover="document.getElementById('menusorties').hidden=false;"
                    onmouseout="document.getElementById('menusorties').hidden=true;"
                    >
                        <a>Sorties en mer</a>
                        <ul class="menu-list" id="menusorties" hidden>
                            <li><a>18ème siècle</a></li>
                            <li><a>19ème siècle</a></li>
                            <li><a>20ème siècle</a></li>
                            <li><a>SNSM XXIème siècle</a></li>
                        </ul>
                    </li>
                    <li
                    onmouseover="document.getElementById('menustations').hidden=false;"
                    onmouseout="document.getElementById('menustations').hidden=true;"
                    >
                        <a>Stations</a>
                        <ul class="menu-list" id="menustations" hidden>
                            <li><a>Dunkerque</a></li>
                            <li><a>Gravelines</a></li>
                            <li><a>Fort-Mardyck</a></li>
                            <li><a>Malo-les-Bains</a></li>
                            <li><a>Bray-Dunes</a></li>
                        </ul>
                    </li>
                    <li
                    onmouseover="document.getElementById('menuservices').hidden=false;"
                    onmouseout="document.getElementById('menuservices').hidden=true;"
                    >
                        <a>Services du port</a>
                        <ul class="menu-list" id="menuservices" hidden>
                            <li><a>Douanes</a></li>
                            <li><a>Lamanage</a></li>
                            <li><a>Pilotage</a></li>
                            <li><a>Ponts-et-Chaussées</a></li>
                            <li><a>Remorquage</a></li>
                        </ul>
                    </li>
                    <li
                    onmouseover="document.getElementById('menumoyens').hidden=false;"
                    onmouseout="document.getElementById('menumoyens').hidden=true;"
                    >
                        <a>Moyens maritimes</a>
                        <ul class="menu-list" id="menumoyens" hidden>
                            <li><a>Canots dunkerquois</a></li>
                            <li><a>Canots fort-mardyckois</a></li>
                            <li><a>Canots gravelinois</a></li>
                            <li><a>Canots de Malo-les-Bains</a></li>
                            <li><a>Pilotage des moyens maritimes</a></li>
                            <li><a>Remorqueurs dunkerquois</a></li>
                        </ul>
                    </li>
                    <li
                    onmouseover="document.getElementById('menutechs').hidden=false;"
                    onmouseout="document.getElementById('menutechs').hidden=true;"
                    >
                        <a>Techniques</a>
                        <ul class="menu-list" id="menutechs" hidden>
                            <li><a>Matériels</a></li>
                            <li><a>Sauvetage des personnes</a></li>
                            <li><a>Va-et-vient</a></li>
                        </ul>
                    </li>
                    <li
                    onmouseover="document.getElementById('menuhist').hidden=false;"
                    onmouseout="document.getElementById('menuhist').hidden=true;"
                    >
                        <a>Historique</a>
                        <ul class="menu-list" id="menuhist" hidden>
                            <li><a>Ephéméride du sauvetage</a></li>
                            <li><a>40 ans de société humaine</a></li>
                            <li><a>Société Centrale de Sauvetage des Naufragés</a></li>
                            <li><a>Société Nationale de Sauvetage en Mer</a></li>
                            <li><a>Les comités locaux</a></li>
                        </ul>
                    </li>
                    <li
                    onmouseover="document.getElementById('menucomps').hidden=false;"
                    onmouseout="document.getElementById('menucomps').hidden=true;"
                    >
                        <a>Compléments</a>
                        <ul class="menu-list" id="menucomps" hidden>
                            <li><a>Art et sauvetage</a></li>
                            <li><a>Bibliographie</a></li>
                            <li><a>Décorations et récompenses</a></li>
                            <li><a>Descriptions des bateaux</a></li>
                            <li><a>Galerie photo</a></li>
                            <li><a>Fortunes de mer</a></li>
                        </ul>
                    </li>
                    <li><a>Estaminet</a></li>
                </ul>
            </aside>

            <div class="column">
                <div class="container is-widescreen">
                    <input class="input is-rounded is-large is-primary" id="recherchePersonne" onkeyup="filtreListePersonne()" placeholder="Search for names..">
                    <form action="" method="post">
                        <input type="text" name="search">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
                <div class="container">
                    <div class="notification is-primary">
                    


                        <?php
                        require_once 'dbconfig.php';

                        $search_value = $_POST['search'];
                        $conn = new mysqli($host,$username,$password,$dbname);
                        if($conn->connect_error) {
                            echo 'connection failed'.$con->connect_error;
                        } else {
                            $sql = "SELECT * FROM sauveteurs WHERE name LIKE '%$search_value%'";
                            $res = $conn->query($sql);
                            while($row=$res->fetch_assoc()) {
                                echo $row["name"];

                            }
                        }
                        ?>
                    </div> 
                </div>
                
                <div class="container my-3">
                    <form class="box">
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email" placeholder="e.g. alex@example.com">
                            </div>
                        </div>
                    
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input" type="password" placeholder="********">
                            </div>
                        </div>
    
                        <button class="button is-primary">Sign in</button>
                    </form>
                </div>

                <div class="container has-text-centered">
                    <img src="gigabalek.jpg" alt="Chad marin"/>
                </div>
                <div class="container has-text-centered">
                    <img src="chadpesquet.jpg" alt="Chad Pesquet"/>
                </div>
            </div>

            
        </div>

        <footer class="footer has-text-centered">
            <strong>Sauveteurs du dunkerquois</strong> par <i>Mines Overfl0w</i> (Thomas Pesquet t'est les best on t'&#128150;&#128150;&#128150;)
        </footer>
    </body>
</html>