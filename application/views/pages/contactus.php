<main>
    <div id="map">
        <div id="map-canvas"></div>
    </div>
    <section class="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3><?= lang('g_contact_sede'); ?></h3>
                    <span id="mails"><a href="mailto:grespanaria@grespanaria.pt">grespanaria@grespanaria.pt</a></span>
                    <p>Gres Panaria Portugal, S.A.</p>
                    <p>Z.I. de Aveiro</p>
                    <p>Apartado 3002</p>
                    <p>3801-101 Aveiro</p>
                    <hr class="divider">
                    <p>T +351 234 303 030</p>
                    <p>F +351 234 303 031</p>
                    <hr class="divider">
                    <p>N 40.64840º</p>
                    <p>W 8.60818º</p>
                </div>
                <div class="col-md-3">
                    <h3><?= lang('g_contact_aveiro'); ?></h3>
                    <span id="mails"><a href="mailto:lovetiles@lovetiles.com">lovetiles@lovetiles.com</a></span>
                    <p>Gres Panaria Portugal, S.A.</p>
                    <p>Divisao Love Tiles</p>
                    <p>Z.I. de Aveiro</p>
                    <p>Apartado 3002</p>
                    <p>3801-101 Aveiro</p>
                    <hr class="divider">
                    <p>T +351 234 303 030</p>
                    <p>F +351 234 303 031</p>
                    <hr class="divider">
                    <p>N 40.64840º</p>
                    <p>W 8.60818º</p>
                </div>
                <div class="col-md-3">
                    <h3><?= lang('g_contact_ilhavo'); ?></h3>
                    <span id="mails"><a href="mailto:margres@margres.com">margres@margres.com</a></span>
                    <p>Gres Panaria Portugal, S.A.</p>
                    <p>Divisão Margres</p>
                    <p>Chousa Nova 3830-133</p>
                    <p>Ílhavo - Portugal</p>
                    <hr class="divider">
                    <p>T +351 234 329 700</p>
                    <p>F +351 234 329 702</p>
                    <hr class="divider">
                    <p>N 40.64840º</p>
                    <p>W 8.60818º</p>
                </div>
                <div class="col-md-3">
                    <h3><?= lang('g_contactus'); ?></h3>
                    <div class="contact-form">
                        <?php   if( $this->session->flashdata('message') != null ) { ?>
                            <div class="form-success text-success">
                                <?= $this->session->flashdata('message'); ?>
                                <?php form_reset(); ?>
                            </div>
                        <?php   } ?>
                        <?php   if(isset($erros)) { ?>
                            <div class="form-errors text-danger">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php   } ?>
                        <?php echo form_open('pages/contact');

                            echo form_input(array(
                                'name' => 'sender_name',
                                'value' => set_value('sender_name'),
                                'placeholder' => lang('g_form_name') ) );

                            echo form_input(array(
                                'name' => 'sender_email',
                                'value' => set_value('sender_email'),
                                'placeholder' => lang('g_form_email') )  );

                            echo form_input(array(
                            'name' => 'subject',
                            'value' => set_value('subject'),
                            'placeholder' => lang('g_form_subject') )  );

                            echo form_textarea(array(
                            'name' => 'message',
                            'value' => set_value('message'),
                            'placeholder' => lang('g_form_message') ) ); ?>

                            <div class="captcha">
                            <?php echo $cap_img; ?>
                                <div class="captcha-input">
                                    <?php echo form_input(array(
                                        'name' => 'captcha',
                                        'value' => set_value('captcha'),
                                        'placeholder' => 'Captcha' ) ); ?>
                                </div>
                            </div>

                            <?php echo form_submit('submit', lang('g_form_send_btn') ); ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="showroom">
        <div class="container">
            <h1><?= lang('g_showrooms'); ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <h3>Aveiro</h3>
                    <hr class="divider">
                    <p>Zona Industrial de Aveiro</p>
                    <p>3801-101 Aveiro - Portugal</p>
                    <hr class="divider">
                    <p>T +351 234 303 030</p>
                    <p>F +351 234 303 031</p>
                    <hr class="divider">
                    <p>N 40.64840º</p>
                    <p>W 8.60818º</p>
                    <hr class="divider">
                    <p><?= lang('g_hora_func'); ?>:</p>
                    <p><?= lang('g_av_mon'); ?></p>
                    <p><?= lang('g_av_tue'); ?></p>
                    <p><?= lang('g_av_sat'); ?></p>
                    <p><?= lang('g_av_sun'); ?></p>
                </div>
                <div class="col-md-6">
                    <h3>Lisboa</h3>
                    <hr class="divider">
                    <p>Av. Dom João II</p>
                    <p>Parque das Nações</p>
                    <p>Lote 4.53 02G</p>
                    <p>1990 - 100 Lisboa</p>
                    <hr class="divider">
                    <p>T +351 218 959 040</p>
                    <p>T +351 927 055 846</p>
                    <hr class="divider">
                    <p>N 38.77900º</p>
                    <p>W 9.09750º</p>
                    <hr class="divider">
                    <p><?= lang('g_hora_func'); ?>:</p>
                    <p><?= lang('g_lx_mon'); ?></p>
                    <p><?= lang('g_lx_sat'); ?></p>
                    <p><?= lang('g_lx_sun'); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>