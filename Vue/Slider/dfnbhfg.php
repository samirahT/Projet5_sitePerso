<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->



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
                <div class="item active">

                    <img src="MC/img/1.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>Double champion de France 2017 </span></h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>Golfeur de haut niveau</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <a class="btn btn-primary btn-lg" href="<?= "index.php?controleur=profil&action=index&id=1" ?>">En savoir plus</a>
                                </div>
                                <div class="form-group">
                                    <a href="#section-contact" class="btn btn-primary btn-lg" required="required">Me soutenir</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="MC/img/2.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                            <h2>Groupe France Elite Boys</h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>Top 50 Ranking Amateur Français</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <a class="btn btn-primary btn-lg" href="<?= "index.php?controleur=profil&action=index&id=1" ?>">En savoir plus</a>
                                </div>
                                <div class="form-group">
                                    <a href="#section-contact" class="btn btn-primary btn-lg" required="required">Me soutenir</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>







            <div class="carousel-inner">
                <?php  foreach ($sliders as $slider): ?>

                <div class="item <?php echo (($this->nettoyer($slider['estPrincipal'])== 1)?"active":"");?>">
                    <img src="<?php echo $slider['image']; ?>" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="<?php echo (($this->nettoyer($slider['estPrincipal'])== 1)?"0.3s":"1.0s");?>"
                        <h2><span><?php  echo ($slider['texte2']) ; ?> </span></h2>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                            <p><?php  echo ($slider['texte']) ; ?></p>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="<?php echo (($this->nettoyer($slider['estPrincipal'])== 1)?"0.9s":"1.6s");?>"
                    <form class="form-inline">
                        <div class="form-group">
                            <a class="btn btn-primary btn-lg" href="<?= "index.php?controleur=profil&action=index&id=1" ?>">En savoir plus</a>
                        </div>
                        <div class="form-group">
                            <a href="#section-contact" class="btn btn-primary btn-lg" required="required">Me soutenir</a>
                        </div>
                    </form>
                </div> <?php endforeach; ?>
            </div>
        </div>


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
<!--/#slider-->

<!-- -------------------------------------------------autre version qui marche mais pas au top---------------------------------------------------------------- -->


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

                <div class="item active">

                    <img src="MC/img/1.jpg ?>" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>gjtgjhgfhgbnvgnbfchdrherhr </span></h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>ghfhgfhgfhfg</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <a class="btn btn-primary btn-lg" href="<?= "index.php?controleur=profil&action=index&id=1" ?>">En savoir plus</a>
                                </div>
                                <div class="form-group">
                                    <a href="#section-contact" class="btn btn-primary btn-lg" required="required">Me soutenir</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <?php  foreach ($sliders as $slider): ?>
                    <div class="item">

                    <img src="<?php echo $slider['image']; ?>" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                            <h2><?php  echo ($slider['texte2']) ; ?></h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p><?php  echo ($slider['texte']) ; ?></p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <a class="btn btn-primary btn-lg" href="<?= "index.php?controleur=profil&action=index&id=1" ?>">En savoir plus</a>
                                </div>
                                <div class="form-group">
                                    <a href="#section-contact" class="btn btn-primary btn-lg" required="required">Me soutenir</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    </div><?php endforeach; ?>
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
<!--/#slider-->




</html>
