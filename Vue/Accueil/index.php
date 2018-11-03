<!--/#slider-->
<div class="slider">
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <?php  foreach ($sliders as $slider): ?>
                    <div class="item <?php echo (($this->nettoyer($slider['estPrincipal'])== 1)?"active":"");?>">
                        <img src="<?php echo $slider['image']; ?>" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="<?php echo (($this->nettoyer($slider['estPrincipal'])== 1)?"0.3s":"1.0s");?>">
                                <h2><span><?php  echo ($slider['texte2']) ; ?> </span></h2>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                    <p><?php  echo ($slider['texte']) ; ?></p>
                                </div>
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="<?php echo (($this->nettoyer($slider['estPrincipal'])== 1)?"0.9s":"1.6s");?>">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <a class="btn btn-primary btn-lg" href="<?php echo((isset($slider['lien']))?($slider['lien']):"index.php?controleur=profil&action=index&id=1"); ?>" target="_blank">En savoir plus

                                       </a>
                                    </div>
                                    <div class="form-group">
                                        <a href="#section-contact" class="btn btn-primary btn-lg" required="required">Me soutenir</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>

            <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
</div>


<!--/Profil-->

<div class="container">

    <div class="starter-template" style="padding-top: 5px;">

        <!--about-->
        <section id="section-about" >


                    <div class="row mar-bot40">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="title">
                                <div class="wow bounceIn">

                                    <h2 class="section-heading animated" data-animation="bounceInUp">Mon profil</h2>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >

                        <div >
                            <div class="col-lg-6 ">
                                <img alt="" class="img-responsive" src="<?php echo $profil['image'] ;?>" width="100%" height="350" />
                                <!--<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                                    <div class="slides" data-group="slides">
                                        <ul>

                                            <div class="slide-body" data-group="slide">
                                             <?php /*foreach ($profils as $pro):*/?>

                                                    <li><img alt="" class="img-responsive" src="<?php /*echo  (isset($pro['image'])?($pro['image']):"" );*/?>" width="100%" height="350" /></li>
                                             <?php /*endforeach;
                                                */?>

        <!--                                                <li><img alt="" class="img-responsive" src="--><?php /*//echo $profil['image'] ;*/?><!--" width="100%" height="350" /></li>-->
                                                        <!--<li><img alt="" class="img-responsive" src="MC/img/10.jpg" width="100%" height="350" /></li>
                                                        <li><img alt="" class="img-responsive" src="MC/img/11.jpg" width="100%" height="350" /></li>
        -->
                                          <!--  </div>
                                        </ul>
                                        <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                                        <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>

                                    </div>
                                </div>-->-->
                            </div>
                            <!--/PROFIL-->
                            <div class="col-lg-6 ">

                                <?php
                                    $this->titre = "Blog - " . $this->nettoyer($profil['titre']); ?>
                                <section>
                                    <header>
                                        <h2 class="titreProfil"><?= $this->nettoyer($profil['titre']) ?></h2>

                                    </header>
                                    <p><?= $profil['descr'] ?></p>

                                </section>
                                <hr />
                            </div>

                        </div>
                    </div>




        </section>
        <!--/about-->
    </div>
</div>


<section id="parallax1" class="section" data-stellar-background-ratio="0.5">
    <!--<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                        <h5>
                            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                        </h5>
                        <br/>
                        <span class="author">&mdash; Jouse Manuel <a href="#">www.jouse-manuel.com</a></span>
                    </div>

                </div>
            </div>
        </div>

    </div>-->

</section>


<!--/ ACTUS-->
<section  id="actus"   class="line-section line-center">
            <div class="container pad-top50">
                <div class="row mar-bot10 ">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="section-header">
                            <div class="wow bounceIn">

                                <h2 class="section-heading animated" data-animation="bounceInUp">Les actualités</h2>
                                <p>Ne ratez pas mes dernières actualités !!!</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="line-wrap" style="width: auto; display: flex " >
                    <!-- Facebook -->
                    <div class="line-pricing-table">
                        <!--  /////////////////////////////////// -->
                        <div class="fb-page" data-href="https://www.facebook.com/CaraMariusGolf/" data-tabs="timeline" data-width="500" data-height="1000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/CaraMariusGolf/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CaraMariusGolf/">Marius Cara Golfer 16 ans</a></blockquote></div>
                        <!--  /////////////////////////////////// -->

                    </div>

                    <div class="line-pricing-table">

                        <!--  /////////////////////////////////// -->
                        <div  >
                            <!--/LISTE ACTUS-->
                            <?php foreach ($actusPage as $actu):
                                ?>
                                <div class="panel panel-default" style="padding: 30px">
                                    <article>

                                        <a href="<?= "index.php?controleur=actu&action=index&id=" . $actu['id'] ?>">
                                            <h2 class="titreActu"><i class="fa fa-file-text" aria-htypeden="true"></i> <?= $this->nettoyer($actu['titre']) ?></h2>
                                        </a>
                                        <span type="date"><?= $this->nettoyer($actu['date']) ?></span>
                                        <p><?= substr( $actu['descr_c']  ,0, 130)?>
                                            <a class="btn btn-secondary float-right" href="<?= "index.php?controleur=actu&action=index&id=" . $actu['id'] ?>">Lire la suite  &rarr;</a>
                                        </p>

                                    </article>
                                    <hr />
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!--  /////////////////////////////////// -->

                        <ul class="pager">


                            <?php if($pageActuelle != 1){ ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo 1 ?>#actus" tabindex="-1" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">First</span>
                                    </a>
                                </li>
                            <?php } ?>


                            <?php if($pageActuelle >= 2){ ?>
                                <li class="page-item"><a class="page-link" href="?page=<?php echo ($pageActuelle -1) ?>#actus"><?php echo ($pageActuelle -1) ?></a></li>
                            <?php } ?>


                            <li class="page-item active"><a class="page-link" href="?page=<?php echo $pageActuelle ?>#actus"><?php echo $pageActuelle ?></a></li>

                            <?php if($pageActuelle != $nombrePage){ ?>
                                <li class="page-item"><a class="page-link" href="?page=<?php echo ($pageActuelle + 1) ?>#actus"><?php echo ($pageActuelle + 1) ?></a></li>
                            <?php } ?>

                            <?php if($pageActuelle != $nombrePage){ ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo $nombrePage ?>#actus" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Last</span>
                                    </a>
                                </li>
                            <?php } ?>






                        </ul>


                    </div>
                </div>

            </div>
</section>


<section id="parallax2" class="section" data-stellar-background-ratio="0.5">
    </section>

<!-- contact -->
<section id="section-contact" class="section appear clearfix">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Me contacter</h2>
                    <p>Je suis à l'ecoute de vos messages de soutien et d'encouragement</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <?php


                if($ajoutMode): ?>
                    <div class="alert alert-success"> <i class="fa fa-check-circle-o fa-2x"  aria-hidden="true"></i>  Votre message a été envoyé. On vous remercie!</div>

                <?php endif; ?>


                <div id="errormessage"></div>
                <form action="index.php?controleur=contact&action=index" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères" />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Veuillez entrer un email valide" />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="objet" class="form-control" id="name" placeholder="Objet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères" />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plaît, écrivez quelque chose pour nous" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="text-center"><button type="submit" class="line-btn green"> Envoyer </button></div>
                </form>
            </div>
            <!-- ./span12 -->
        </div>

    </div>
</section>







































