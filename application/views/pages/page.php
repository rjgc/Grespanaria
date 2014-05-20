<main>
    <!--Imagem e triangulos-->
    <div class="imgHeader">
        <div class="img-news"></div>
        <div class="triangle-darkgreen"></div>
        <div class="triangle-green"></div>
        <div class="triangle-green-invert"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= lang('g_disclaimer'); ?></h1>
                <div class="text-noticia"><?= $disclaimer[0]['texto_'.$this->lang->lang()] ?></div>
            </div>
        </div>
    </div>
</main>