<main>
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="triangle-left"></div>
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
    </div>
    <div class="afterImgHeader">
        <div class="rectangle"></div>
        <div class="triangle-bottom-left"></div>
        <div class="triangle-bottom"></div>
        <img class="img-triang" src="<?php echo base_url() ?>assets/grespanaria/img/img-triang.png">
        <div class="triangle-little-bottom"></div>
        <img class="img-triang2" src="<?php echo base_url() ?>assets/grespanaria/img/img-triang2.png">
    </div>
    <div class="container">
        <div class="profile">
            <h2><?= lang('g_group_profile') ?></h2>
            <div><?= $profile[0]['texto_'.$this->lang->lang()]; ?></div>
        </div>
        <div class="media">
            <h3>
                <a href="<?= $videos[1]['url']; ?>" target="_blank">
                    <i class="icon-video"></i>
                    <span><?= lang('g_institutional_video') ?></span>
                </a>
            </h3>
            <h3>
                <a href="<?php echo site_url('pages/media'); ?>">
                    <i class="icon-galeria"></i>
                    <span><?= lang('g_gallery') ?></span>
                </a>
            </h3>
            <h3>
                <a href="<?php echo site_url('pages/contactus'); ?>">
                    <i class="icon-plus"></i>
                    <span><?= lang('g_contact_aveiro') ?></span>
                </a>
            </h3>
            <h3>
                <a href="<?php echo site_url('pages/contactus'); ?>">
                    <i class="icon-plus"></i>
                    <span><?= lang('g_contact_ilhavo') ?></span>
                </a>
            </h3>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/margres2.png"></div>
            <div class="col-md-10">
                <div><?= $margres[0]['texto_'.$this->lang->lang()]; ?></div>
                <h3>
                    <a href="<?= $videos[2]['url']; ?>" target="_blank">
                        <i class="icon-video"></i>
                        <span><?= lang('g_margres_video') ?></span>
                    </a>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/love2.png"></div>
            <div class="col-md-10">
                <div><?= $love[0]['texto_'.$this->lang->lang()]; ?></div>
                <h3>
                    <a href="<?= $videos[3]['url']; ?>" target="_blank">
                        <i class="icon-video"></i>
                        <span><?= lang('g_love_video') ?></span>
                    </a>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/bloom2.png"></div>
            <div class="col-md-10">
                <div><?= $bloom[0]['texto_'.$this->lang->lang()]; ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/easy2.png"></div>
            <div class="col-md-10">
                <div><?= $easy[0]['texto_'.$this->lang->lang()]; ?></div>
            </div>
        </div>
    </div>
</main>