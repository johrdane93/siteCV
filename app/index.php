<?php
require_once 'includes/mobile_detect.php';
$detect = new Mobile_Detect();
define('IS_MOBILE', $detect->isMobile());
define('IS_TABLET', $detect->isTablet());
if(!IS_MOBILE && !IS_TABLET){
    define('IS_DESKTOP', true);
} else {
    define('IS_DESKTOP', false);
}
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Johrdane Ledra Développeur Web Annecy">
    <meta name="keywords" content="Jl Johrdane Ledra J-L developpeur web developer pantin france I.D.F">
    <meta name="author" content="Johrdane Ledra">
    <!-- /META -->
    <title>Johrdane Ledra - Développeur Web</title>
    <!-- STYLES -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/flaticon/flaticon.css">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/styles.min.css" rel="stylesheet">
    <link href="assets/css/wrap.min.css" rel="stylesheet">
    <!-- /STYLES -->
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <!-- /FONTS -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/map.js" type="text/javascript"></script>

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="assets/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="assets/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="assets/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="assets/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="assets/favicon/mstile-310x310.png" />

</head>
</head>
<body>
    <div class="beta">
        <img src="assets/images/beta.png" alt="">
    </div>
    <!-- MENU -->
    <div id="menu">
        <div id="menu-image">
            <img src="https://graph.facebook.com/jlparent4/picture?width=400&amp;height=400" alt="" title="Ca c'est moi, quand je code pas !">
        </div>
        <div id="menu-links">
            <ul id="menu-links-list">
                <li id="link-cv" class="menu-links-list-item">
                    <a href="#cv" class="scroll">
                        <div  class="menu-link-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <a href="#cv" class="menu-link-a scroll">C.V</a>
                    </a>
                </li>
                <li id="link-skills" class="menu-links-list-item">
                    <a href="#skills" class="scroll">
                        <div class="menu-link-icon">
                            <i class="fa fa-keyboard-o"></i>
                        </div>
                        <a href="#skills" class="menu-link-a scroll">Compétences</a>
                    </a>
                </li>
                <li id="link-work" class="menu-links-list-item">
                    <a href="#work" class="scroll">
                        <div  class="menu-link-icon">
                            <i class="fa fa-gears"></i>
                        </div>
                        <a href="#work" class="menu-link-a scroll">Réalisations</a>
                    </a>
                </li>
                <li id="link-contact" class="menu-links-list-item">
                    <a href="#contact" class="scroll">
                        <div class="menu-link-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <a href="#contact" class="menu-link-a scroll">Contact</a>
                    </a>
                </li>
                <li id="link-propos" class="menu-links-list-item">
                    <a href="#propos" class="scroll">
                        <div  class="menu-link-icon">
                            <i class="fa fa-question"></i>
                        </div>
                        <a href="#propos" class="menu-link-a scroll">A propos</a>
                    </a>
                </li>
            </ul>
        </div>
        <div id="menu-footer">
            <div class="menu-footer-border"></div>
            <div class="menu-footer-text">
              v4.1  &copy; Johrdane Ledra 2017
          </div>

      </div>
  </div>
  <!-- /MENU -->
  <?php if(IS_TABLET || IS_DESKTOP){ ?>
  <!-- ACCUEIL -->
  <div id="accueil">
    <div class="accueil-background"></div>
    <div class="accueil-content">
        <div class="accueil-top-bar">
            <div class="row">
                <div class="col-md-6">
                    <i class="fa fa-navicon fa-2x toggle-menu"></i>
                    <span class="text-menu"><a href="#">Menu</a></span>
                    <ul class="list-unstyled list-inline list-menu">
                        <li><a href="#" class="scroll active">Accueil</a></li>
                        <li><a href="#cv" class="scroll">C.V</a></li>
                        <li><a href="#skills" class="scroll">Compétences</a></li>
                        <li><a href="#work" class="scroll">Réalisations</a></li>
                        <li><a href="#contact" class="scroll">Contact</a></li>
                        <li><a href="#propos" class="scroll">A Propos</a></li>
                    </ul>
                </div>
                <div class="accueil-contact pull-right col-md-5 text-right">
                    <a href="#" class="active">Français</a> / <a href="active">English </a>
                    <a href="#contact" class="scroll"><button>Contactez moi !</button></a>
                </div>
            </div>
        </div>
        <div class="accueil-title">
            <div class="border-gradient">
                <h2 class="tlt" data-in-effect="fadeInDown">
                    Johrdane Ledra
                </h2>
            </div>
            <h4 class="tlt" data-in-effect="fadeInUp">Je suis développeur web</h4>
        </div>
        <div class="accueil-quote">
            <blockquote class="blockquote-reverse">
                <p id='quote-quote' ></p>
                <footer id='quote-author'></footer>
            </blockquote>
        </div>
        <div class="wrap">
            <?php for($i=0;$i<199;$i++){
                echo '<div class="c"></div>';
            } ?>
        </div>
        <div class="accueil-start">
            <a href="#cv" class="scroll">
                <div class="start-button">
                    En savoir plus
                    <i class="fa fa-chevron-down fa-2x"></i>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /ACCUEIL -->
<?php } ?>
<!-- CONTENU -->
<div id="content">
    <div id="cv" class="content-data">
        <div class="content-data-text">
            <div class="row">
                <div class="col-md-<?php  echo (IS_DESKTOP) ? '8' : '12' ?>">
                    <div class="col-md-2 text-center">
                        <p>
                            <img src="assets/images/hello.png" alt="" class="img-responsive">
                        </p>
                        <a href="../docs/cv.pdf" target="_blank">
                            <button class="btn btn-down">
                                <i class="fa fa-download"></i> Mon C.V
                            </button>
                        </a>
                    </div>
                    <div class="col-md-10">
                        <h2>
                            <?php if(date('H',time()) >= 17 && date('H',time()) < 0 ){
                                echo "Bonsoir !";
                            } else { echo "Bonjour ! "; }
                            ?>
                        </h2>
                        <p>Bienvenue sur mon site !</p>
                        <p>Je suis <b>Johrdane Ledra</b>, développeur web à <b>pantin</b> en I.D.F, France.</p>
                        <p>
                            J'ai 
                            <?php 
                            //date in mm/dd/yyyy format; 
                            $birthDate = "11/25/1989";
                            $birthDate = explode("/", $birthDate);
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                ? ((date("Y") - $birthDate[2]) - 1)
                                : (date("Y") - $birthDate[2]));
                            echo $age;
                            ?> 

                            ans et je suis depuis mon plus jeune âge passionné d’informatique.
                        </p>
                        <p>
                            J’ai très vite découvert la programmation et, plus particulièrement, celle des sites internet. Dès lors, j’ai mis toutes mes compétences dans une formation pour  Certification Développeur/intégrateur web chez LePoleS la création de sites internet pour mon plaisir ou pour une cause particulière.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="page-header"><i class="flaticon-university1"></i> Ce que j'ai étudié</h4>
                            <ul class="resume-list">
                                <li>
                                    <h5 class="resume-list-title">a remplire etude</h5>
                                    <div class="resume-list-describe">
                                        <span><b>2013-2014</b>  Formation  / </span><br>
                                        <i>Mention Bien</i>
                                    </div>
                                </li>
                                <li>
                                    <h5 class="resume-list-title">etude</h5>
                                    <div class="resume-list-describe">
                                        <span><b>2011-2013</b> IUT Annecy</span><br>
                                        <i>Mention Bien</i>
                                    </div>
                                </li>
                                <li>
                                    <h5 class="resume-list-title">etude </h5>
                                    <div class="resume-list-describe">
                                        <span><b>2007-2010</b> lycee</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="page-header"><i class="flaticon-user74"></i> Où j'ai travaillé</h4>
                            <ul class="resume-list">
                                <li>
                                    <h5 class="resume-list-title">Développeur / Intégrateur Web </h5>
                                    <div class="resume-list-describe">
                                        <span><b>2013/2014</b> - nom de la societe ou autre</span>
                                        <br>
                                        <i>poste </i>
                                    </div>
                                </li>
                                <li>
                                    <h5 class="resume-list-title">Développeur PHP</h5>
                                    <div class="resume-list-describe">
                                        <span><b>2013</b> - wf3 Pantin</span>
                                        <br>
                                        <i>Stagiaire</i>
                                    </div>
                                </li>
                                <li>
                                    <h5 class="resume-list-title">Accueil / Conseil / Dépannage</h5>
                                    <div class="resume-list-describe">
                                        <span><b>2011</b> - Bouygues Telecom - Epagny</span>
                                        <br>
                                        <i>Emploi-vacances</i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if(IS_DESKTOP){ ?>
                <div class="col-md-4">
                    <img src="assets/images/moi.jpg" alt="" title="Ca c'est moi, dans la vrai vie !" class="img-responsive pull-right">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div id="skills" class="content-data">
        <div class="content-data-text">
            <div class="row">
                <div class="col-md-12"><h3 class="page-header"><i class="fa fa-keyboard-o fa-2x"></i> Compétences</h3></div>
                <div class="col-md-4">
                    <div class="box-skills webdev">
                        <h4 class="page-header"><i class="flaticon-html-tag"></i> Développement Web</h4>
                        <p>
                            Mon cursus scolaire ainsi que mes expériences professionnelles et personnelles me rendent polyvalent dans le développement Web.
                        </p>
                        <p>
                            <b>Front-end</b>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skill-item">
                                    <h5>HTML5</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h5>CSS3</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item">
                                    <h5>jQuery</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h5>Javascript</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            <b>Back-end</b>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skill-item">
                                    <h5>PHP</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h5>UNIX/Apache</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item">
                                    <h5>SQL</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h5>PL/SQL</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-skills rwd">
                        <h4 class="page-header"><i class="flaticon-responsive"></i> Responsive Web Design</h4>
                        <p>
                            Lors de l'obtention de ma licence , je vais me spécialisé dans le développement <abbr title="Responsive Web Design">RWD</abbr>.
                        </p>
                        <p>
                            Les technologies progressent sans cesse, entraînant une évolution de la taille et de la résolution des écrans. <br>
                            A la suite de cette expérience professionnelle, j'intègre systématiquement cette nouvelle technologie à mes développements, et je ne me soucie plus de la taille des écrans ! 
                        </p>

                        <b>Framework CSS</b>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skill-item">
                                <h5>Bootstrap</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill-item">
                                <h5>Foundation</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <p></p>
                    <p>Je sais aussi gérer un développement Responsive Web Design plus complexe : le <abbr title="Responsive with server side">RESS</abbr>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-skills misc">
                    <h4 class="page-header"><i class="flaticon-translation"></i> Autres compétences</h4>
                    <p>
                        <b>Logiciels</b>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skill-item">
                                <h5>Adobe Photoshop</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill-item">
                                <h5>Microsoft Office</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p> <b>Systèmes d'exploitation</b> </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skill-item">
                                <h5>Windows</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h5>Mac OSX</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill-item">
                                <h5>Linux</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
                <p><b>Langues</b></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="skill-item">
                            <h5>Langues02
                            </h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill-item">
                            <h5>langues02</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <p><b>Permis</b></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="skill-item">
                            <h5> pas de Permis B  <small><i>pas de Véhicule personnel </i></small> </h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="work" class="content-data">
    <div class="content-data-text">
        <div class="row">
            <div class="col-md-6">
                <div id="cobras" class="work-box">
                    <div class="work-box-text">
                        <div class="work-box-logo">
                            <img src="assets/images/work/loscobras/header.png" alt="" class="img-responsive">
                        </div>
                        <div class="work-box-desc">
                            <p>a remplire!
                            </p>
                            <a href="http://loscobras.fr" target="_blank">
                                <button class="btn-work">
                                    <i class="fa fa-external-link"></i> Voir le site
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="miliboo" class="work-box">
                    <div class="work-box-text">
                        <div class="work-box-logo">
                            <img src="assets/images/work/miliboo/header.png" alt="" class="img-responsive">
                        </div>
                        <div class="work-box-desc">
                            <p>
                                A remplire.
                            </p>
                            <a href="http://www.miliboo.com" target="_blank">
                                <button class="btn-work">
                                    <i class="fa fa-external-link"></i> Voir le site
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="post-it" class="work-box work-box-half">
                    <div class="work-box-text">
                        <div class="work-box-desc">
                            <p>
                                Sujet d'étude</br>
                                Gestion de post-it dynamique</br>
                                PHP jQuery + Ajax
                            </p>
                            <a href="workfiles/postit/" target="_blank">
                                <button class="btn-work">
                                    <i class="fa fa-external-link"></i> Voir le projet
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="unlocker" class="work-box work-box-half">
                    <div class="work-box-text">
                        <div class="work-box-desc">
                            <p>
                                Dévérouillage façon Androïd<br>
                                Arriverez-vous à trouver la bonne combinaison ?<br>
                                PHP jQuery + Ajax
                            </p>
                            <a href="workfiles/unlocker/" target="_blank">
                                <button class="btn-work">
                                    <i class="fa fa-external-link"></i> Voir le projet
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="content-data">
    <div class="content-data-text">
        <?php if(!IS_MOBILE){ ?>
        <div id="map_canvas" class="contact-map"></div>
        <?php } ?>
        <div class="contact-text">
            <i class="fa fa-comments-o fa-4x icon-top"></i>
            <h2 class="">Vous souhaitez me contacter ?</h2>
            <ul class="list-contact list-unstyled ">
                <li><i class="fa fa-phone fa-2x"></i> +33 (0) 6.61.78.45.28</li>
                <li><i class="fa fa-comment fa-2x"></i> johrdane.ledra@lepoles.com</li>
                <li class="li-adress"><i class="fa fa-map-marker fa-2x"></i> PANTIN 93500</li>
                <li class="li-adress"><i class="fa "></i> FRANCE</li>
            </ul>
            <h2 class="">Réseaux sociaux</h2>
            <ul class="list-social list-inline">
                <li class="face"><a href="https://www.facebook.com/profile.php?id=100018563655998" target="_blank"><i class="fa fa-2x fa-facebook"></i></a>
                </li>
                <li class="twit"><a href="https://twitter.com/" target="_blank"><i class="fa fa-2x fa-twitter"></i></a>
                </li>
                <li class="linked"><a href="https://www.linkedin.com/in/johrdane-ledra-b52429142" target="_blank"><i class="fa fa-2x fa-linkedin"></i></a>
                </li>
                <li class="github"><a href="https://github.com/johrdane93" target="_blank"><i class="fa fa-2x fa-github"></i></a>
                </li>
                <li class="skype"><a href="skype:"><i class="fa fa-2x fa-skype"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="propos" class="content-data">
    <div class="content-data-text">
        <div class="row">
            <div class="col-md-6">
                <h3 class="page-header"><i class="flaticon-question53"></i> Qui suis-je ?</h3>
                <div class="row box-propos">
                    <div class="col-md-3 text-center">
                        <i class="flaticon-man77 icon-propos"></i>
                    </div>
                    <div class="col-md-9">
                        <p>
                            Depuis l’enfance l’informatique est ma grande passion. 
                        </p>
                        <p>Découverte grâce aux jeux vidéos sur PC, je me suis très rapidement intéressé à ce qu’il y avait derrière l’écran, ce qui m’a, petit à petit, mené vers la programmation informatique. 
                        </p>
                        <p>
                            Au moment de mon orientation scolaire, le choix s’est  porté sur autre chose et je suis conscient de la chance que j'ai eue d’avoir pu faire faire une formations Développeur/intégrateur web chez LePoleS. Je suis fier de pouvoir faire de ma passion mon métier.
                        <p>
                            Les jeux vidés continuent toujours autant de me fasciner.
                            Je ne manque jamais une occasion de partager une partie avec un groupe d’amis.
                        </p>

                        <p>Je suis aussi passionné par les nouvelles technologies.</p>

                    </div>
                </div>
                <div class="row box-propos">
                    <div class="col-md-3 text-center">
                        <i class="flaticon-kid icon-propos"></i>
                    </div>
                    <div class="col-md-9">
                        <p>Quand je ne suis pas sur mon ordinateur, je suis un grand fainéant amateur. Je joue du clavier dans un groupe de geek. <br>
                            Rares sont les moments où je n'ai pas de touche de clavier en dessou les doigts.
                        </p>
                        <div class="box-music">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="https://play.spotify.com/user/toxx1k" target="_blank">
                                        <button class="btn-music">
                                            <i class="flaticon-spotify5"></i> Spotify
                                        </button>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="https://soundcloud.com/j-l-parent" target="_blank">
                                        <button class="btn-music">
                                            <i class="flaticon-soundcloud6"></i> Soundcloud
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="page-header"><i class="flaticon-speech140"></i> Le site</h3>
                <p>
                    Ce site a pour but de me présenter plus en détails et d'être aussi une vitrine de mes compétences en Développement Web.
                </p>
                <p>
                    Si vous souhaitez en savoir plus sur le développement de ce site, vous pouvez consulter et télécharger ses sources complètes.
                </p>
                <a href="https://github.com/johrdane93" target="_blank">
                    <button class="btn-sources">
                        <i class="fa fa-github"></i> Sources
                    </button>
                </a>
                <p>Librairies</p>
                <ul class="list-inline">
                    <li><a href="http://jquery.com/" target="_blank">jQuery</a></li>
                    <li><a href="http://jqueryui.com/" target="_blank">jQuery UI</a></li>
                    <li><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
                    <li><a href="http://demos.flesler.com/jquery/scrollTo/" target="_blank">ScrollTo</a></li>
                    <li><a href="http://ricostacruz.com/jquery.transit/" target="_blank">Transit</a></li>
                    <li><a href="http://jschr.github.io/textillate/" target="_blank">Textillate</a></li>
                    <li><a href="http://daneden.github.io/animate.css/" target="_blank">Animate.css</a></li>
                    <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font-Awesome</a></li>
                    <li><a href="http://www.flaticon.com/" target="_blank">Flaticon</a></li>
                </ul>
                <p>Logiciels</p>
                <ul class="list-inline">
                    <li>Sublime Text 2</li>
                    <li>Netbeans 8.0</li>
                    <li>Git</li>
                </ul>
                <p>Hébergement via <a href="http://www.ovh.com/fr" target="_blank">OVH</a></p>
                <div class="credit">
                    Les dessins ont été réalisés par l'excellent <a href="http://www.luc-damas.fr/" target="_blank">Luc Damas</a>, mon professeur de technologies web. N'hésitez pas à visiter son site.<br>
                    <small>Icons made by Freepik, Daniel Bruce, Icomoon from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>         is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /CONTENU -->
<!-- SCRIPTS -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.transit.min.js"></script>
<script src="assets/js/jquery.textillate.min.js"></script>
<script src="assets/js/jquery.lettering.min.js"></script>
<script src="assets/js/velocity.min.js"></script>>
<script src="assets/js/menu.min.js"></script>
<script src="assets/js/accueil.min.js"></script>
<script src="assets/js/content.min.js"></script>
<script src="assets/js/contact.min.js"></script>
<!-- /SCRIPTS -->
</body>
</html>