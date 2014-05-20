<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mediaweb Creations">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/grespanaria/ico/favicon.ico">

        <title>Grespanaria Portugal, S.A.</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/grespanaria/css/reset.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/grespanaria/css/bootstrap.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url() ?>assets/grespanaria/font-styles.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/grespanaria/styles.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <?php   if( isset($current) && $current === 'grespanaria' ){ ?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-grespanaria.css" rel="stylesheet">
        <?php   }
                if( isset($current) && $current === 'presentations' ){ ?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-presentations.css" rel="stylesheet">
                <?php   }
        if( isset($current) && $current === 'media' ){ ?>
            <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-media.css" rel="stylesheet">
        <?php   }
        if( isset($current) && $current === 'news' ){ ?>
            <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-news.css" rel="stylesheet">
        <?php   }
                if( isset($current) && $current === 'certification' ){ ?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-certification.css" rel="stylesheet">
        <?php   }
                if( isset($current) && $current === 'contactus' ){ ?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-contactus.css" rel="stylesheet">
        <?php   }
                if( isset($current) && $current === 'page' ){ ?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-pages.css" rel="stylesheet">
        <?php   } ?>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>assets/grespanaria/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/grespanaria/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/grespanaria/js/docs.min.js"></script>

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="<?php echo base_url() ?>assets/grespanaria/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
         <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACyHnR6xtiTqqjSrYl05xkIKzO6fYJZqk&sensor=false">
        </script>
        <script type="text/javascript">
            function initialize() {

                // Create an array of styles.
                /*var styles = [
                    {
                        stylers: [
                            { hue: "#90ba92" },
                            { saturation: 80 },
                            { lightness: -20 },
                            { gamma: 3 },
                        ]
                    }
                ];*/

                var styles = [
                    {
                        featureType: "all",
                        stylers: [
                            { saturation: -80 }
                        ]
                    },{
                        featureType: "road",
                        elementType: "geometry",
                        stylers: [
                            { hue: "#8eb98c" }
                        ]
                    },{
                        featureType: "water",
                        elementType: "geometry",
                        stylers: [
                            { hue: "#8eb98c" },
                            { lightness: 0 }

                        ]
                    },{
                        featureType: "poi.business",
                        elementType: "labels",
                        stylers: [
                            { visibility: "off" }
                        ]
                    }
                ];

                var image1 = '<?=base_url()?>assets/grespanaria/img/markerM.png';
                var image2 = '<?=base_url()?>assets/grespanaria/img/markerPG.png';
                var image3 = '<?=base_url()?>assets/grespanaria/img/markerLove.png';

                var styledMap = new google.maps.StyledMapType(styles,
                        {name: "Styled Map"});

                var mapOptions = {
                    center: new google.maps.LatLng(40.754062,-8.505959),
                    zoom: 10,
                    panControl: false,
                    mapTypeControl: false,
                    disableDefaultUI: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    
                };
                var map = new google.maps.Map(document.getElementById("map-canvas"),
                        mapOptions);

                var myLatLng3 = new google.maps.LatLng(40.647686, -8.608828);

                var marker = new google.maps.Marker({
                    position: myLatLng3,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image3,
                    title:"LoveTiles"
                });

                var myLatLng = new google.maps.LatLng(40.605095, -8.651530);

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image1,
                    title:"MarGres"
                });

                var myLatLng2 = new google.maps.LatLng(40.603183,-8.652140);

                var marker = new google.maps.Marker({
                    position: myLatLng2,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image2,
                    title:"Gres Panaria"
                });

                // Code for infowindow
                var popup=new google.maps.InfoWindow({
                    content: "Title oi"
                });
                google.maps.event.addListener(marker, 'click', function(e) {
                    console.log(e);
                    popup.open(map, this);
                });

                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <header>
            <div class="container">
                <script>
                    $(".dropdown-menu li a").click(function(){
                        var selText = $(this).text();
                        $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
                    });
                </script>
                <div class="lang">
                    <div class="btn-group">
                        <a class="lang-dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php

                            if (strpos($_SERVER['REQUEST_URI'], '/pt')) {
                                echo "PT";
                            } else if (strpos($_SERVER['REQUEST_URI'], '/en')) {
                                echo "EN";
                            } else if (strpos($_SERVER['REQUEST_URI'], '/fr')) {
                                echo "FR";
                            } else if (strpos($_SERVER['REQUEST_URI'], '/de')) {
                                echo "DE";
                            } else if (strpos($_SERVER['REQUEST_URI'], '/py')) {
                                echo "PY";
                            } else if (strpos($_SERVER['REQUEST_URI'], '/es')) {
                                echo "ES";
                            }?>
                            <span class="glyphicon glyphicon-chevron-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= site_url($this->lang->switch_uri('pt')) ?>" >PT</a></li>
                            <li><a href="<?= site_url($this->lang->switch_uri('en')) ?>" >EN</a></li>
                            <li><a href="<?= site_url($this->lang->switch_uri('fr')) ?>" >FR</a></li>
                            <li><a href="<?= site_url($this->lang->switch_uri('es')) ?>" >ES</a></li>
                            <li><a href="<?= site_url($this->lang->switch_uri('de')) ?>" >DE</a></li>
                            <li><a href="<?= site_url($this->lang->switch_uri('py')) ?>" >PY</a></li>
                        </ul>
                    </div>
                </div>
                <div class="logo">
                    <a href="<?php echo base_url() ?>">
                        <h1>GRES PANARIA Portugal S.A.</h1>
                    </a>
                </div>
                <nav class="navbar navbar-default visible-xs">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a <?php echo ( isset($current) && $current === 'home' ) ? 'class="active"' : ''?> href="<?php echo site_url('home')?>"><?= lang('g_home'); ?></a></li>
                            <li><a <?php echo ( isset($current) && $current === 'grespanaria' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/grespanaria')?>"><?= lang('g_grespanaria'); ?></a></li>
                            <li><a <?php echo ( isset($current) && $current === 'presentations' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/presentations')?>"><?= lang('g_presentations'); ?></a></li>
                            <li><a <?php echo ( isset($current) && $current === 'media' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/media')?>"><?= lang('g_media'); ?></a></li>
                            <li><a <?php echo ( isset($current) && $current === 'news' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/news')?>"><?= lang('g_news'); ?></a></li>
                            <li><a <?php echo ( isset($current) && $current === 'certification' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/certification')?>"><?= lang('g_certification'); ?></a></li>
                            <li><a <?php echo ( isset($current) && $current === 'contactus' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/contactus')?>"><?= lang('g_contactus'); ?></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="menu hidden-xs">
                    <ul class="nav">
                        <li><a <?php echo ( isset($current) && $current === 'home' ) ? 'class="active"' : ''?> href="<?php echo site_url('home')?>"><?= lang('g_home'); ?></a></li>
                        <li><a <?php echo ( isset($current) && $current === 'grespanaria' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/grespanaria')?>"><?= lang('g_grespanaria'); ?></a></li>
                        <li><a <?php echo ( isset($current) && $current === 'presentations' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/presentations')?>"><?= lang('g_presentations'); ?></a></li>
                        <li><a <?php echo ( isset($current) && $current === 'media' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/media')?>"><?= lang('g_media'); ?></a></li>
                        <li><a <?php echo ( isset($current) && $current === 'news' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/news')?>"><?= lang('g_news'); ?></a></li>
                        <li><a <?php echo ( isset($current) && $current === 'certification' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/certification')?>"><?= lang('g_certification'); ?></a></li>
                        <li><a <?php echo ( isset($current) && $current === 'contactus' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/contactus')?>"><?= lang('g_contactus'); ?></a></li>
                    </ul>
                </div>
            </div>
        </header>