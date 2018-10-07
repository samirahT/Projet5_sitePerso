<?php
/**
 * Created by PhpStorm.
 * User: SamirahT
 * Date: 20/09/2017
 * Time: 17:24
 */
?>


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

                    <?php foreach ($sliders as $slider): ?>
                        <?php  var_dump($slider['image']);?>
                        <img src="<?php  $slider['image'];?>" class="img-responsive" alt="">
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
                    <?php endforeach; ?>

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
