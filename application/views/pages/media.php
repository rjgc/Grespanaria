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
            <?php   foreach($fotos_tipo as $tipo) { ?>
                <div class="row grid effect-6" id="grid">
                    <h4><?= $tipo['nome_'.$this->lang->lang()]; ?></h4>

                    <?php   foreach($fotos as $foto) {

                                if($foto['id_media_tipo'] == $tipo['id_photo_tipos']) { ?>

                                    <a class="col-md-3 galeria" href="<?php echo base_url() ?>assets/uploads/media/<?= $foto['url'] ?>">
                                        <img src="<?php echo base_url() ?>assets/uploads/media/<?= $foto['url'] ?>" width="250" height="167">
                                    </a>
                                <?php   }
                            } ?>
                </div>
            <?php   } ?>

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

<script src="<?php echo base_url() ?>assets/grespanaria/js/AnimOnScroll/modernizr.custom.js"></script>
<script src="<?php echo base_url() ?>assets/grespanaria/js/AnimOnScroll/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/grespanaria/js/AnimOnScroll/imagesloaded.js"></script>
<script src="<?php echo base_url() ?>assets/grespanaria/js/AnimOnScroll/classie.js"></script>
<script src="<?php echo base_url() ?>assets/grespanaria/js/AnimOnScroll/AnimOnScroll.js"></script>
<script>
    new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
    } );
</script>