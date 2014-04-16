<main id="presentations">
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="triangle-left-grey"></div>
        <div class="triangle-left"></div>
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
    </div>
    <div class="container">
        <div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Presentations</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat turpis ac congue. Morbi at hendrerit velit. Vivamus facilisis lectus vel euismod iaculis. Quisque sagittis condimentum turpis, venenatis rutrum risus scelerisque in. Suspendisse semper mollis leo vel iaculis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Available Documents</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                    <?php   foreach($apresentacoes as $apresentacao) { ?>
                        <li><a href="<?php echo base_url() ?>assets/uploads/files/<?= $apresentacao['url'] ?>"><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_pdf.png"/> <?= $apresentacao['nome'] ?></a> [ <?= $apresentacao['tamanho'] ?> ]</li>
                    <?php   } ?>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/grespanaria/img/icon_video.png" width="42" height="42" /> Watch Panaria Group Presentation</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>