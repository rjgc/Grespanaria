<main>
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
        <div class="triangle-right-grey"></div>
    </div>
    <div class="container">
        <div>
            <h1><?= lang('g_photo_gallery'); ?></h1>
            <div class="row">
                <?php foreach($fotos as $foto) { ?>
                    <div class="col-md-3">
                        <div class="media-feed">
                            <a class="galeria" href="<?php echo base_url() ?>assets/uploads/media/<?= $foto['url'] ?>">
                                <img src="<?php echo base_url() ?>assets/uploads/media/<?= $foto['url'] ?>" width="250" height="167">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <h1><?= lang('g_video_gallery'); ?></h1>
            <div class="row">
                <?php foreach($videos as $video) { ?>
                    <div class="col-md-6">
                        <div class="video-feed">
                            <h4><?= $video['nome_'.$this->lang->lang()] ?></h4>
                            <iframe width="560" height="315" src="//www.youtube.com/embed/<?= $video['url'] ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>