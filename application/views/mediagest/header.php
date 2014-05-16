<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<title>Gres Panaria - MediaGest</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/style.css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/form_tabs.css" media="all" />
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>assets/indelague/js/html5shiv.js"></script>
    <![endif]-->
    
	<!--[if IE]><link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/ie.css" media="all" /><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/lt-ie-9.css" media="all" /><![endif]-->
<?php foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<script type="text/javascript" src="<?php echo base_url() ?>assets/duplicate_item/js/duplicate_item.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/mediagest/js/form_tabs.js" ></script>
</head>
<body>
<div class="testing">
<section class="user">
	<div class="profile-img">
		<p><img src="<?php echo base_url() ?>assets/mediagest/images/logo.png" alt="" width="279" /> </p>
	</div>
	<div class="buttons">
		<button class="ico-font">&#59157;</button>
		 <span class="button blue"><a href='<?php echo site_url("login/logout")?>'>Logout</a></span>
	</div>
</section>    
    
</div>
    

<nav>
	<ul>
        <li <?php if ($data['titulo'] == 'Noticias') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/noticias_management")?>'><span class="icon">&#128196;</span> Noticias</a>
        </li>
        <li <?php if ($data['titulo'] == 'Apresentações') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/apresentacoes_management")?>'><span class="icon">&#128196;</span> Apresentações</a>
        </li>
        <li <?php if ($data['titulo'] == 'Certificados' ||
            $data['titulo'] == 'Tipos de Certificados') echo 'class="section"'; ?> >
            <a href='#'><span class="icon">&#59176;</span> Certificados</a>
            <ul class="submenu">
                <li><a href='<?php echo site_url("mediagest/certificados_management")?>'>Certificados</a></li>
                <li><a href='<?php echo site_url("mediagest/certificados_tipo_management")?>'>Tipos de Certificados</a></li>
            </ul>
        </li>
        <li <?php if ($data['titulo'] == 'Fotos' ||
            $data['titulo'] == 'Videos') echo 'class="section"'; ?> >
            <a href='#'><span class="icon">&#59176;</span> Media</a>
            <ul class="submenu">
                <li><a href='<?php echo site_url("mediagest/media_photo_management")?>'>Fotos</a></li>
                <li><a href='<?php echo site_url("mediagest/media_video_management")?>'>Videos</a></li>
                <li><a href='<?php echo site_url("mediagest/page_video_management")?>'>Videos das Páginas</a></li>
            </ul>
        </li>
        <li <?php if ($data['titulo'] == 'Páginas') echo 'class="section"'; ?> >
            <a href='<?php echo site_url("mediagest/paginas_management")?>'><span class="icon">&#128196;</span> Páginas</a>
        </li>
    </ul>
</nav>

<section class="content" style="margin-top: 0px;">

    <section class="widget">
        <header>
            <span class="icon">&#128200;</span>
            <hgroup>
                <h1><?=$data['titulo'];?></h1>
                <h2><?=$data['sub-titulo'];?></h2>
            </hgroup>
        </header>
