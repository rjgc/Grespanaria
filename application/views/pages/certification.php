<main>
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="triangle-left-grey"></div>
        <div class="triangle-left"></div>
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
        <div class="triangle-green-invert"></div>
    </div>
    <div class="container">
        <div class="triangle-bottom-white"></div>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Certification</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat turpis ac congue. Morbi at hendrerit velit. Vivamus facilisis lectus vel euismod iaculis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="logos">
                        <h1>Available Documents</h1><a href="#"><img src="<?php echo base_url() ?>assets/grespanaria/img/margres3.png" height="31"></a><a href="#"><img src="<?php echo base_url() ?>assets/grespanaria/img/love3.png" height="31"></a><a href="#"><img src="<?php echo base_url() ?>assets/grespanaria/img/bloom3.png" height="31"></a><a href="#"><img src="<?php echo base_url() ?>assets/grespanaria/img/easy3.png" height="31"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <?php foreach($tipos as $tipo) { ?>
                            <li><?= $tipo['nome'] ?>
                            </li>
                        <?php } ?>
                        <?php foreach($certificados as $certficado) { ?>
                            <li>
                                <a href="<?php echo base_url() ?>assets/uploads/files/<?= $certficado['url'] ?>" target="_blank">
                                    <img src="<?php echo base_url() ?>assets/grespanaria/img/icon_pdf.png" width="42" height="42" />
                                    <?= $certficado['nome'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>