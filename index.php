<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="theme-color" content="#84db94">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Elhadi BEDDAREM</title>
</head>
<body>
<div class="inc">
    <header class="container-fluid">
        <div class="row">
            <nav class="navbar-fixed">
                <div class="nav-wrapper">
                    <a id="switch" onclick="toggleTheme()" class="waves-effect waves-light btn-large"><i class="material-icons">airplay</i></a>
                    <a href="#!" class="brand-logo">EB<i class="material-icons">cloud</i></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>                    <ul class="right hide-on-med-and-down">
                        <li><a href="#services" class="sc"><i class="material-icons">live_tv</i></a></li>
                        <li><a href="#competences"><i class="material-icons">crop_free</i></a></li>
                        <li><a href="#parcours"><i class="material-icons">crop_portrait</i></a></li>
                        <li><a href="#contact"><i class="material-icons">contact_mail</i></a></li>
                    </ul>
                </div>
            </nav>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="#services">Services</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#parcours">Parcours</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <ul id="slide-out" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="/assets/img/mysql.png" class="circle">
                        </div>
                        <a href="#user"><img class="circle" src="/assets/img/git.png"></a>
                        <a href="#name"><span class="black-text name">Elhadi Beddarem</span></a>
                        <a href="#email"><span class="black-text email">elhadibeddarem@gmail.com</span></a>
                    </div>
                </li>
                <li><a href="https://codeintheshell.fr" target="_blank"><i class="material-icons">cloud</i>Autre site : codeintheshell.fr</a></li>
                <li><a href="https://shtex.fr/">Autre site : shtex.fr</a></li>
                <li><a href="http://shtexworld.fr/">Autre site : shtexworld.fr</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">séparateur</a></li>
                <li><a class="waves-effect" href="./assets/img/cvelhadi.pdf" download="cvelhadi"><i class="material-icons">cloud_download</i> CV Download</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </header>

    <section class="container">
        <article class="row">
            <h1 class="elhadi-title" data-aos="fade-right">Elhadi BEDDAREM</h1>
            <h2 data-aos="fade-left">Concepteur d'Application Web</h2>
            <div class="carousel" data-aos="zoom-in-left">
                <a class="carousel-item" href="#one!"><img src="./assets/img/symfony.png"></a>
                <a class="carousel-item" href="#two!"><img src="./assets/img/mysql.png"></a>
                <a class="carousel-item" href="#three!"><img src="./assets/img/git.png"></a>
                <a class="carousel-item" href="#four!"><img src="./assets/img/javascript.png"></a>
                <a class="carousel-item" href="#five!"><img src="./assets/img/react.png"></a>
            </div>
            
            <div class="parallax-container" data-aos="zoom-in-left">
                <div class="parallax">
                    <img src="./assets/img/ordinateur-de-bureau-pc.jpg" alt="ordinateur de bureau"/>
                </div>
            </div>
        </article>
        

    </section>

    <section class="container-fluid">
        <div id="services" class="section scrollspy"></div>
        <article class="row services">
            <h3>Services</h3>
            <div class="parallax-container" data-aos="zoom-in-right">
                <div class="parallax">
                    <img src="./assets/img/ordinateur-de-bureau-pc.jpg" alt="ordinateur de bureau"/>
                </div>
            </div>
            <div>
                <p>
                    Gestion de Projet. <i class="material-icons">lightbulb_outline</i><br>
                    Site vitrine, évènementiel, e-commerce.<br> 

                    Intégration Web <i class="material-icons">add_a_photo</i><br>
                    Des intégrations HTML5 / CSS, respectueusent des standards du web<br>

                    Responsive Design <i class="material-icons">loop</i><br>
                    Compatible tous supports, tablette et application mobile<br>
                </p>            
            </div>
        </article>
    </section>
    <div id="competences">

    </div>
    <section class="container-fluid section scrollspy" data-aos="fade-up" >
        <article class="row competences">
            <h3>Compétences</h3>
            
                <div class="col s6" data-aos="fade-left">
                    <h5 class="title-five">Symfony</h5>
                    <div class="progress bar">
                        <div class="determinate symfony" data-done="80"><span class="percent">80%</span></div>
                    </div>              
                    
                    <h5 class="title-five">PHP</h5>
                    <div class="progress bar">
                        <div class="determinate php" data-done="75"><span class="percent">75%</span></div>
                    </div>
                    <h5 class="title-five">MySQL</h5>
                    <div class="progress bar">
                        <div class="determinate mysql" data-done="75"><span class="percent">75%</span></div>
                    </div>
                </div>
                <div class="col s6" data-aos="fade-right">
                    <h5 class="title-five">JavaScript</h5>
                    <div class="progress bar">
                        <div class="determinate javascript" data-done="75"><span class="percent">75%</span></div>
                    </div>
                    <h5 class="title-five">React</h5>
                    <div class="progress bar">
                        <div class="determinate react" data-done="50"><span class="percent">50%</span></div>
                    </div>
                    <h5 class="title-five">MongoDB</h5>
                    <div class="progress bar">
                        <div class="determinate mongodb" data-done="60"><span class="percent">60%</span></div>
                    </div>
                </div>
        </article>
    </section>

    <aside class="">
        <article class="">
            <h4>Portfolio</h4>
            <p><i class="material-icons large">add</i></p>
            <div id="search" class="section scrollspy"></div>
        </article>
        <button></button>
    </aside>

    


<div data-aos="fade-up">Salut tout le monde</div>



<div data-aos="fade-right">Fade à droite</div>


<div class="fadeup" data-aos="fade-up"
    data-aos-anchor-placement="top-center">
        m2i
</div>
<div id="parcours">

    </div>
<section class="container">
    <article class="row">
        <h4 class="parcours-title">Parcours</h4>
        <div class="parcours">
            <div data-aos="zoom-in-left" class="parcours-text">
                <p>En 2016, je me suis formé au joie du code en m'orientant dans le domaine du web.
                J'ai commencé à suivre des formations sur des plateformes gratuites telle que youtube, freecodecamp
                mais aussi payantes telle que udemy.<br>
                cours udemy : 
                cours d'algo avec matthieu Gaston
                </p>
                <ol class="parcours-div">
                    <li class="parcours-info">algo de tri</li>
                    <li class="parcours-info">cours js</li>
                    <li class="parcours-info">requete HTTP</li>
                    <li class="parcours-info">function asynchrone</li>
                    <li class="parcours-info">cours web component HTML5</li>
                </ol>
                <blockquote>Environnement technique : Windows, Linux</blockquote>
            </div> 
            <div data-aos="zoom-in-right" class="parcours-text">  
                <p> 2017, j'ai travaillé chez FTL Express, une société de livraison de colis. 
                Nous avions pour projet une application d'impression de timbres postaux.
                Le but étant de facilité l'envoie de colis postaux vers la chine pour les personnes vivant en France.
                
                Coté front nous avons utilisé Vue JS et coté back Java.
                </p>
                <br>
                <ol class="parcours-div">
                    <li>Migration Vue 2.* et Int8 de l'application</li>
                    <li>Implémentationde fonctionnalité d’importation de CSV et de PDF</li>
                    <li>Test Unitaire et fonctionnel</li>
                </ol>
                
                <blockquote>Environnement technique: Vue JS, Node JS, Express,
                Element io, Chai, Mocha, SCRUM.</blockquote>
            </div>

            <div data-aos="zoom-in-left" class="parcours-text">
                <p>En 2018, j'ai travaillé pour la société Azzerisk Advantage basée à saint Mandé. AZZERISK Advantage est un cabinet indépendant et 
                international proposant des solutions complètes en risk management.</p> <br>
                <ol class="parcours-div">
                    <li class="parcours-info">Installation de Cassandra sous windows 10</li>
                    <li class="parcours-info">Ajout de nouvelles règles de gestion</li>
                    <li class="parcours-info">Stockage en base de données NoSQL (Cassandra)</li>
                    <li class="parcours-info">Maintenance évolutive et corrective sur un logiciel de comparaison de stratégie de risk.</li>
                    <li class="parcours-info">Mise en forme de l’application grâce au flexbox</li>
                </ol>
                <blockquote>technique : AngularJS, Oracle, Cassandra, REST, Elasticsearch</blockquote>
            </div>

            <p data-aos="zoom-in-right"> En 2019, J'ai travaillé sur des projets personnels : <br>
                <a href="https://shtex.fr" target="_blank">https://shtex.fr</a> est un site en React JS. C'est une SPA connecté à une API REST (the MovieDB). <br>
                <a href="http://shtexworld.fr" target="_blank">https://shtexworld.fr</a> est un site en javascript. Le jeu Snake pour les amateurs ;)<br>
                <a href="http://shtexworld.com"target="_blank" >https://shtexworld.com</a> est un site en React JS. il permet de voir la valeur de la monnaie par rapport au dollar.<br>
                <blockquote>J'ai lu le livre "tête la première dans les design pattern" écrit par Eric Freeman.</blockquote>
            </p>

            <p data-aos="zoom-in-left">En 2020, Développeur fullstack d'une application de calcul du nutriscore avec une solution Symfony 4.3 (twig) :
                <br>
                <a href="https://www.coopin.io/coopincook" target="_blank" rel="noopener noreferrer">https://www.coopin.io/coopincook</a>
                <br>
                <a href="https://cook.readyplayerweb.com/" target="_blank" rel="noopener noreferrer">https://cook.readyplayerweb.com/</a>
                <br>
            </p>
                <ol class="parcours-div">
                    <li>Web Scrapping en php de recette de cuisine. Site cuisine AZ, Marmitton, journal des femmes.</li>
                    <li>Implémentation de différentes fonctionnalité comme facebook login, facebook share, google sign-in...
                        dans le projet symfony.
                    </li>
                    <li>Inscription à l'app, connexion à l'app. envoie de mail avec swiftmailer...</li>
                    <li>Importation de CSV dans la base de données grâce à une connexion ssh et scp.</li>
                    <li>Installation du bundle webpack encore...</li>
                    <li>Ecriture de doc technique...</li>
                    <li>Site Wordpress avec Elementor.io</li>
                </ol>
                
                
            
            <blockquote>Environnement technique: Linux, Symfony 4, Twig, jQuery, CSS3</blockquote>

            <p data-aos="zoom-in-right">En 2021, Développeur fullstack d'une application de vote d'éléction du CSE :
                <br>
                
            </p>
                <ol class="parcours-div">
                    <li>Création et modification de plugin Wordpress</li>
                    <li>Modification du plugin Woocommerce</li>
                </ol>
                
                
            
            <blockquote>Environnement technique: Linux, Symfony 5, Twig, ES6, SCSS</blockquote>
        </div>
        
    </article>
</section>
<div id="contact"></div>
<section class="container" data-aos="fade-right">
    <article class="row" >
        <h3>Contact</h3>
        <form action="./contact.php" method="POST">
            <div class="div-input-text">
                <input type="text" class="input-group-text input-name" placeholder="nom">
                <input type="email" class="input-group-text input-email" placeholder="email">
            </div>
            <textarea name="message" id="message" cols="90" rows="80" placeholder="Votre message ..."></textarea>
            <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Envoyer</a>        
        </form>
    </article>
</section>

    <footer class="footer">

        <div id="footer">

            <p>je fais des macro sur wow
                <br>
                configuration addon weakaura
                <br>
                Hype Unreal Engine 5
            </p>
        </div>
    </footer>
    
</div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/index.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>