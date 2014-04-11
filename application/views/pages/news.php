  <section>
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
                <div class="triangle-bottom-white"></div>
                <div>
                    <h1>News</h1>
                    <div class="row">

                        <?php foreach($noticias as $noticia) { ?>
                            <div class="col-md-4">
                                <div class="news-feed">
                                    <img src="<?php echo base_url() ?>assets/uploads/noticias/<?= $noticia['foto'] ?>" width="250" height="167">
                                    <p class="date"><?= $noticia['data'] ?></p>
                                    <h4><?= $noticia['titulo_pt'] ?></h4>
                                    <p><?= $noticia['texto_pt'] ?><a href="<?php echo site_url('pages/noticia/'.$noticia['id_noticia']) ?>">Read More</a></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>