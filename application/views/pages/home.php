<main>
    <div class="triangle-left"></div>
    <div class='pageOption'>
        <img class='option' src='<?php echo base_url() ?>assets/grespanaria/img/background2.png' style="opacity: 0.8;">
    </div>
    <div class="triangle-right"></div>
    <div class="container">
        <h1 class="title"><?= lang('g_welcome'); ?></h1>
        <div class="lastNews">
            <h2 class="news"><?= lang('g_latest_news'); ?></h2>
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <?php   $i=0;
                            foreach ($noticias as $noticia) {
                                if ($i == 0) { ?>
                                    <div class="item active">
                                        <img class="img-news" src="<?= base_url()?>assets/uploads/noticias/<?= $noticia['foto'] ?>" />
                                        <div class="news-text">
                                            <h3><?= $noticia['titulo_'.$this->lang->lang()] ?></h3>
                                            <p><?php echo substr($noticia['texto_'.$this->lang->lang()], 0, 150); if (strlen($noticia['texto_'.$this->lang->lang()]) > 150) echo '...' ?> <a class="read-more" href="<?php echo site_url('pages/noticia/'.$noticia['id_noticia']) ?>">&nbsp;Read More</a></p>
                                        </div>
                                    </div>
                    <?php       } else { ?>
                                    <div class="item">
                                        <img class="img-news" src="<?= base_url()?>assets/uploads/noticias/<?= $noticia['foto'] ?>" />
                                        <div class="news-text">
                                            <h3><?= $noticia['titulo_'.$this->lang->lang()] ?></h3>
                                            <p><?php echo substr($noticia['texto_.$this->lang->lang()'], 0, 150); if (strlen($noticia['texto_'.$this->lang->lang()]) > 150) echo '...' ?> <a class="read-more" href="<?php echo site_url('pages/noticia/'.$noticia['id_noticia']) ?>">&nbsp;Read More</a></p>
                                        </div>
                                    </div>
                    <?php       } $i++;
                            } ?>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</main>