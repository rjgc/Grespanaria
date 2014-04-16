<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<title>Sosoares - MediaGest</title>
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
<!--<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/indelague/css/change_order.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/indelague/js/change_order.js" ></script>-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/duplicate_item/js/duplicate_item.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/mediagest/js/form_tabs.js" ></script>
</head>
<body>
<div class="testing">
<!--<header class="main">
	<h1><strong>Media</strong> Gest</h1>
	<input type="text" value="search" />
</header>-->
<section class="user">
	<div class="profile-img">
		<p><img src="<?php echo base_url() ?>assets/mediagest/images/logo.png" alt="" width="174" /> </p>
	</div>
	<div class="buttons">
		<button class="ico-font">&#59157;</button>
			<!--<span class="button dropdown">
			<a href="#">Notifications <span class="pip">4</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>You have a new task</h1>
						<h2>Report web statistics week by week.</h2> 
					</hgroup>
					<p><span>14:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1>New comment</h1>
						<h2>Comment on <em>About page</em> by Darren.</h2> 
					</hgroup>
					<p><span>11:04</span></p>
				</li>
				<li>
					<hgroup>
						<h1>Broken link</h1>
						<h2>We've spotted a broken link on the <em>Blog page</em>.</h2> 
					</hgroup>
					<p><span>10:46</span></p>
				</li>
				<li>
					<hgroup>
						<h1>User report</h1>
						<h2><em>Lee Grant</em> has been promoted to admin.</h2> 
					</hgroup>
					<p><span>09:57</span></p>
				</li>
			</ul>
		</span> 
		<span class="button dropdown">
			<a href="#">Inbox <span class="pip">6</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
			</ul>
		</span> 
		<span class="button">Live</span>
		 <span class="button">Help</span>-->
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
        