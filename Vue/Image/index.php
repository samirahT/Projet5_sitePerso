
<!--Affiche les images dans le dossier Upload-->


<h2>Galeries d'image</h2>

    <?php
    $dir = getcwd().DIRECTORY_SEPARATOR."Upload";
    $galeries = scandir($dir);
    foreach ($galeries as $galerie)
    {
        if(!is_dir($galerie))
        {
            ?>

            <a target="_blank" href="<?php echo  "/P5/Upload/".$galerie ?>">
                <img src="<?php echo "/P5/Upload/".$galerie ?>" width="100%" alt="" /> </a>
                <?php
        }
    }

?>




    