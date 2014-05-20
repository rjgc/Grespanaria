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
        <div class="noticia">
            <?php foreach($noticias as $noticia) { ?>
            <h1><?= $noticia['titulo_'.$this->lang->lang()] ?></h1>
            <div class="row">
                    <div class="img-noticia">
                        <img src="<?php echo base_url() ?>assets/uploads/noticias/<?= $noticia['foto'] ?>" width="250" height="167">
                        <p class="date"><?= $noticia['data_news'] ?></p>
                    </div>
                    <div class="text-noticia"><?= $noticia['texto_'.$this->lang->lang()] ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>