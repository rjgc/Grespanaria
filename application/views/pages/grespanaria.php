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
            <div><?= lang('g_group_profile_intro') ?></div>
        </div>
        <div class="media">
            <a href="<?= $videos[1]['url']; ?>" target="_blank">
                <h3><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_video.png"><?= lang('g_institutional_video') ?></h3>
            </a>
            <a href="<?php echo site_url('pages/media'); ?>">
                <h3><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_foto.png"><?= lang('g_gallery') ?></h3>
            </a>
            <a href="<?php echo site_url('pages/contactus'); ?>">
                <h4><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_plus.png"><?= lang('g_contact_aveiro') ?></h4>
            </a>

            <a href="<?php echo site_url('pages/contactus'); ?>">
                <h4><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_plus.png"><?= lang('g_contact_ilhavo') ?></h4>
            </a>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/margres2.png"></div>
            <div class="col-md-10">
                <p><?= lang('g_margres_intro') ?></p>
                <a href="<?= $videos[2]['url']; ?>" target="_blank">
                    <h4><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_video.png"><?= lang('g_margres_video') ?></h4>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/love2.png"></div>
            <div class="col-md-10">
                <p><?= lang('g_love_intro') ?></p>
                <a href="<?= $videos[3]['url']; ?>" target="_blank">
                    <h4><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_video.png"><?= lang('g_love_video') ?></h4>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/bloom2.png"></div>
            <div class="col-md-10">
                <p><?= lang('g_bloom_intro') ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><img class="img" src="<?php echo base_url() ?>assets/grespanaria/img/easy2.png"></div>
            <div class="col-md-10">
                <p><?= lang('g_easy_intro') ?></p>
            </div>
        </div>
    </div>
</main>