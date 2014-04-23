<main>
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="triangle-left"></div>
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
        <div class="triangle-green-invert"></div>
        <div class="triangle-right"></div>
    </div>
    <div class="container">
        <div>
            <h1><?= lang('g_media'); ?></h1>
            <div class="row">
                <?php foreach($noticias as $noticia) { ?>
                    <div class="col-md-4">
                        <div class="media-feed">
                            <h4><?= $noticia['titulo_pt'] ?></h4>
                            <img src="<?php echo base_url() ?>assets/uploads/noticias/<?= $noticia['foto'] ?>" width="250" height="167">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>