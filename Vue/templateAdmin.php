<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="description" content="">
    <meta name="author" content="">

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



    <!-- Tinymce -->


    <!--plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools  contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | image code',-->

    <script src="Js/Tiny/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>

        tinymce.init({
            selector: '#mytextarea',
            height: 500,
            theme: 'modern',
            plugins: 'image code',
            toolbar:'undo redo | image code',

            images_upload_url: 'http://localhost/P5/index.php?controleur=admin&action=upload',

            // override default upload handler to simulate successful upload
            images_upload_handler: function (blobInfo, success, failure) {
                var xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', 'upload.php'); //MEttre la route cree

                xhr.onload = function() {
                    var json;

                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    success(json.location);
                };

                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                xhr.send(formData);
            },


//            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });






    </script>

    <!-- Pop comfirm -->

    <script src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="Js/jquery.popconfirm.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".popconfirm").popConfirm();

        });
    </script>

</head>
<body style=" ">
<br>
<br><br>
Le test
<textarea id="mytextarea"></textarea >


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
                    <li><a href="<?= "index.php?controleur=profil&action=listeProfil" ?>">Mon profil</a></li>
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

<!--<div style="margin-top: 5px;width: 100%">
    <img src="MC/img/15.jpg" class="img-fluid" alt="">
</div>

-->


<div class="container" style="margin-top: 5px;">

    <div class="starter-template" id="box" style="padding: 55px;">
        <?= $contenu ?>
    </div>
</div>



<section id="footer" class="section footer" style="margin-top: 55px;">
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
                    <p><a STYLE="color: darkgrey" class="nav-link" href="index.php?controleur=connexion&action=deconnecter">DECONNEXION</a></p>

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
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Js/jquery.popconfirm.js"></script>
</body>
</html>