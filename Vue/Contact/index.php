
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




















