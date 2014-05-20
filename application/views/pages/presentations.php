<main id="presentations">
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="triangle-left-grey"></div>
        <div class="triangle-left"></div>
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
    </div>
    <div class="bg-presentations">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <h1><?= lang('g_presentations'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div><?= $intro[0]['texto_'.$this->lang->lang()]; ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1><?= lang('g_available_documents'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                        <?php   foreach($apresentacoes as $apresentacao) { ?>
                            <li><a href="<?php echo base_url() ?>assets/uploads/files/<?= $apresentacao['url'] ?>" target="_blank"><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_pdf.png"/> <?= $apresentacao['nome'] ?></a> [ <?= $apresentacao['tamanho'] ?> ]</li>
                        <?php   } ?>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="<?php echo $video[0]['url']; ?>" target="_blank"><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_video.png" width="42" height="42" /> <?= lang('g_v_group_pre'); ?></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>