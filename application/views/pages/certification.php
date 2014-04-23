<main>
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
                    <p><?= lang('g_certification_intro') ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <thead>
                            <tr class="logos">
                                <th><h1><?= lang('g_available_documents') ?></h1></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/margres3.png" height="31"></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/love3.png" height="31"></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/bloom3.png" height="31"></th>
                                <th><img src="<?php echo base_url() ?>assets/grespanaria/img/easy3.png" height="31"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($tipos as $tipo) { ?>
                            <?php foreach($certificados as $certficado) { ?>
                                <tr>
                                    <td><?= $tipo['nome'] ?></td>


                                    <td>
                                        <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>assets/grespanaria/img/icon_pdf.png" width="42" height="42" />
                                            <?= $certficado['nome'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <img src="<?php echo base_url() ?>assets/grespanaria/img/icon_pdf.png" width="42" height="42" />
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <img src="<?php echo base_url() ?>assets/grespanaria/img/icon_pdf.png" width="42" height="42" />
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <img src="<?php echo base_url() ?>assets/grespanaria/img/icon_pdf.png" width="42" height="42" />
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>


           <!-- <div class="row">
                <div class="col-md-6">
                    <br><br><br><br><br>


                        <?php /*foreach($certificados as $certficado) { */?>
                            <li>
                                <a href="<?php /*echo base_url() */?>assets/uploads/files/<?/*= $certficado['url'] */?>" target="_blank">
                                    <img src="<?php /*echo base_url() */?>assets/grespanaria/img/icon_pdf.png" width="42" height="42" />
                                    <?/*= $certficado['nome'] */?>
                                </a>
                            </li>
                        <?php /*} */?>
                    </ul>
                </div>
            </div>-->



        </div>
    </div>
</main>