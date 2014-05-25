<main xmlns="http://www.w3.org/1999/html">
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="triangle-left-grey"></div>
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
        <div class="triangle-green-invert"></div>
    </div>
    <div class="container">
        <div class="triangle-left"></div>
        <div class="triangle-bottom-white"></div>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <h1><?= lang('g_certification') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div><?= $intro[0]['texto_'.$this->lang->lang()]; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="hidden-sm hidden-xs">
                        <thead>
                            <tr class="logos">
                                <th><h1><?= lang('g_available_documents') ?></h1></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/margres3.png" height="31"></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/love3.png" height="31"></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/bloom3.png" height="31"></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/easy3.png" height="31"></th>
                            </tr>
                        </thead>
                        <?php   if(isset($tipos) && !empty($tipos)) { ?>
                            <tbody>
                            <?php foreach($tipos as $tipo) { ?>
                                <tr>
                                    <td><?= $tipo['nome_'.$this->lang->lang()] ?></td>
                                    <td>
                                        <?php   foreach($certificados as $certficado) {

                                                    if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 1) { ?>

                                                        <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                            <i class="icon-pdf"></i>
                                                        </a>

                                            <?php   } ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php   foreach($certificados as $certficado) {

                                            if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 2) { ?>

                                                <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                    <i class="icon-pdf"></i>
                                                </a>

                                            <?php   } ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php   foreach($certificados as $certficado) {

                                            if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 3) { ?>

                                                <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                    <i class="icon-pdf"></i>
                                                </a>

                                            <?php   } ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php   foreach($certificados as $certficado) {

                                            if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 4) { ?>

                                                <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                    <!--<img src="<?php /*echo base_url() */?>assets/grespanaria/img/icon_pdf.png" width="42" height="42" alt="<?/*= $certficado['nome'] */?>" title="<?/*= $certficado['nome'] */?>"/>-->
                                                    <i class="icon-pdf"></i>
                                                </a>

                                            <?php   } ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <tbody>
                        </tbody>
                        </table>
                        <div class="text-warning">
                            <p><i><span class="glyphicon glyphicon-info-sign"></span> <?= lang('g_document_error') ?></i></p>
                        </div>
                    <?php   } ?>

                    <div class="cert-mobile visible-sm visible-xs">
                        <h1><?= lang('g_available_documents') ?></h1>
                        <?php if(isset($tipos) && !empty($tipos)) { ?>

                            <div class="margres">
                                <div class="logos">
                                    <img src="<?php echo base_url() ?>assets/grespanaria/img/margres3.png" height="45">
                                </div>
                                <div class="certificados">
                                    <?php foreach($tipos as $tipo) {

                                            foreach($certificados as $certficado) {

                                                if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 1) { ?>

                                                    <div class="certificado">
                                                        <?= $tipo['nome_'.$this->lang->lang()] ?>
                                                        <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                            <i class="icon-pdf"></i>
                                                        </a>
                                                    </div>
                                    <?php       }
                                            }
                                    } ?>
                                </div>
                            </div>
                            <div class="love">
                                <div class="logos">
                                    <img src="<?php echo base_url() ?>assets/grespanaria/img/love3.png" height="45">
                                </div>
                                <div class="certificados">
                                    <?php foreach($tipos as $tipo) {

                                        foreach($certificados as $certficado) {

                                            if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 2) { ?>

                                                <div class="certificado">
                                                    <?= $tipo['nome_'.$this->lang->lang()] ?>
                                                    <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                        <i class="icon-pdf"></i>
                                                    </a>
                                                </div>
                                            <?php       }
                                        }
                                    } ?>
                                </div>
                            </div>
                            <div class="bloom">
                                <div class="logos">
                                    <img src="<?php echo base_url() ?>assets/grespanaria/img/bloom3.png" height="45">
                                </div>
                                <div class="certificados">
                                    <?php foreach($tipos as $tipo) {

                                        foreach($certificados as $certficado) {

                                            if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 3) { ?>

                                                <div class="certificado">
                                                    <?= $tipo['nome_'.$this->lang->lang()] ?>
                                                    <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                        <i class="icon-pdf"></i>
                                                    </a>
                                                </div>
                                            <?php       }
                                        }
                                    } ?>
                                </div>
                            </div>
                            <div class="easy">
                                <div class="logos">
                                    <img src="<?php echo base_url() ?>assets/grespanaria/img/easy3.png" height="45">
                                </div>
                                <div class="certificados">
                                    <?php foreach($tipos as $tipo) {

                                        foreach($certificados as $certficado) {

                                            if($tipo['id_certificados_tipo'] == $certficado['id_tipos'] && $certficado['id_marcas'] == 4) { ?>

                                                <div class="certificado">
                                                    <?= $tipo['nome_'.$this->lang->lang()] ?>
                                                    <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                                        <i class="icon-pdf"></i>
                                                    </a>
                                                </div>
                                <?php       }
                                        }
                                    } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>