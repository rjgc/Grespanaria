<main>
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
        <div class="triangle-right-grey"></div>
    </div>
    <div class="triangle-bottom-white"></div>
    <div class="container">
        <div>
            <h1><?= lang('g_news'); ?></h1>
            <div class="row">
                <?php foreach($noticias as $noticia) { ?>
                    <div class="col-md-4">
                        <div class="news-feed">
                            <a href="<?php echo site_url('pages/noticia/'.$noticia['id_noticia']) ?>"><img src="<?php echo base_url() ?>assets/uploads/noticias/<?= $noticia['foto'] ?>" width="250" height="167"></a>
                            <p class="date"><?= $noticia['data_news'] ?></p>
                            <h4><a href="<?php echo site_url('pages/noticia/'.$noticia['id_noticia']) ?>"><?= $noticia['titulo_'.$this->lang->lang()] ?></a></h4>
                            <div><?php echo substr($noticia['texto_'.$this->lang->lang()], 0, 100); if (strlen($noticia['texto_'.$this->lang->lang()]) > 100) echo '...' ?> <a class="read-more" href="<?php echo site_url('pages/noticia/'.$noticia['id_noticia']) ?>">&nbsp;Read More</a></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>