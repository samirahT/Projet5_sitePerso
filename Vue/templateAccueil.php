<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>
    <!-- BASICS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>MARIUS CARA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="MC/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="MC/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="MC/css/bootstrap.css">
    <link rel="stylesheet" href="MC/css/bootstrap-theme.css">
    <link href="MC/css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="MC/css/animate.css">
    <link rel="stylesheet" href="MC/css/style.css">

    <link rel="stylesheet" href="MC/css/font-awesome.min.css">
    <!-- skin -->
    <link rel="stylesheet" href="MC/skin/default.css">


</head>

<body>

    <!--Script pour timeline facebook-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Fin du Script pour timeline facebook-->

    <div class="header">
        <section id="header" class="appear">

            <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars color-white"></span>
                    </button>
                    <h1><a class="navbar-brand" href="<?= "index.php?controleur=accueil&action=index" ?>" data-0="line-height:90px;" data-300="line-height:50px;">MARIUS CARA / GOLFER 15ANS
                        </a></h1>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                        <li class="active"><a href="<?= "index.php?controleur=accueil&action=index" ?>">Accueil</a></li>
                        <li><a href="<?= "index.php?controleur=profil&action=listeProfil" ?>" >Mon profil</a></li>
                        <li><a href="<?= "index.php?controleur=actu&action=listeActu" ?>">Mes actualités</a></li>
                        <li><a href="<?= "index.php?controleur=tournoi&action=listeTournoi"  ?>">Mes tournois</a></li>
                        <li><a href="<?= "index.php?controleur=entourage&action=listeEntourage" ?>">Mon entourage</a></li>
                        <li><a href="<?= "index.php?controleur=golf&action=listeGolf" ?>">Golf</a></li>
                        <li><a href="<?= "index.php?controleur=contact&action=index" ?>">Me contacter</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse -->
            </div>
        </section>
    </div>



    <!--contenu-->
    <!--<div class="container">

        <div class="starter-template" style="padding-top: 5px;">-->
    <?= $contenu ?>
      <!--  </div>
    </div>
    -->









    <!-- map -->
    <section id="section-map" class="clearfix">
        <div id="google-map" data-latitude="48.744866" data-longitude="2.119086 "></div>
    </section>

    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row align-center copyright">
                <div class="col-sm-12">
                    <p>&copy; Samirah T</p>
                    <div class="credits">

                        <a STYLE="color: darkgrey">marius.golfassociation</a>
                        <p><a STYLE="color: darkgrey" class="nav-link" href="index.php?controleur=connexion&action=index">CONNEXION</a></p>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

    <script src="MC/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="MC/js/jquery.js"></script>
    <script src="MC/js/jquery.easing.1.3.js"></script>
    <script src="MC/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq3J7b_TT2X1CEyH049ymQ7ZVCBmILjIE"></script>
    <script src="MC/js/jquery.isotope.min.js"></script>
    <script src="MC/js/jquery.nicescroll.min.js"></script>
    <script src="MC/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="MC/js/skrollr.min.js"></script>
    <script src="MC/js/jquery.scrollTo.js"></script>
    <script src="MC/js/jquery.localScroll.js"></script>
    <script src="MC/js/stellar.js"></script>
    <script src="MC/js/responsive-slider.js"></script>
    <script src="MC/js/jquery.appear.js"></script>
    <script src="MC/js/grid.js"></script>
    <script src="MC/js/main.js"></script>
    <script src="MC/js/wow.min.js"></script>
    <script>
        wow = new WOW({}).init();
    </script>
    <script src="MC/contactform/contactform.js"></script>


</body>

</html>


