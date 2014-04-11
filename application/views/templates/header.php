<!doctype html>
<html lang="en">
    <head>
        <meta charset="iso-8859-15">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/grespanaria/ico/favicon.ico">

        <title>Grespanaria Portugal, S.A.</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/grespanaria/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <?php if( isset($current) && $current === 'home' ){?>
        <link href="<?php echo base_url() ?>assets/grespanaria/styles.css" rel="stylesheet">
        <?php }?>
         <?php if( isset($current) && $current === 'grespanaria' ){?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-grespanaria.css" rel="stylesheet">
        <?php }?>
         <?php if( isset($current) && $current === 'presentations' ){?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-presentations.css" rel="stylesheet">
        <?php }?>
         <?php if( isset($current) && $current === 'news' ){?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-news.css" rel="stylesheet">
        <?php }?>
         <?php if( isset($current) && $current === 'certification' ){?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-certification.css" rel="stylesheet">
        <?php }?>
        <?php if( isset($current) && $current === 'contactus' ){?>
        <link href="<?php echo base_url() ?>assets/grespanaria/css/styles-contactus.css" rel="stylesheet">
        <?php }?>
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
                    disableDefaultUI: true,
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
                <div class="lang">
                    <p class="language">LANGUAGE</p>
                    <div class="btn-group">
                        <!-- Language Button -->
                        <button type="button" class="btn button">PT</button>
                        <button type="button" class="btn button button-select" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <!-- Dropdown -->
                        <ul class="dropdown-menu dropdown" role="menu">
                            <li><a href="#">PT</a></li>
                            <li><a href="#">EN</a></li>
                            <li><a href="#">FR</a></li>
                            <li><a href="#">ES</a></li>
                            <li><a href="#">DE</a></li>
                            <li><a href="#">PY</a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <!-- Logo -->
                    <a href="/"><img class="inner" src="<?php echo base_url() ?>assets/grespanaria/img/logo.png" title="GRES PANARIA" /></a>
                    <!-- Menu -->
                    <nav class="navbar navbar-default menu visible-xs">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Menu</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a <?php echo ( isset($current) && $current === 'home' ) ? 'class="active"' : ''?> href="<?php echo site_url('home')?>">&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></li>
                                <li><a <?php echo ( isset($current) && $current === 'grespanaria' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/grespanaria')?>">&nbsp;&nbsp;GRES PANARIA&nbsp;&nbsp;</a></li>
                                <li><a <?php echo ( isset($current) && $current === 'presentations' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/presentations')?>">&nbsp;&nbsp;PRESENTATIONS&nbsp;&nbsp;</a></li>
                                <li><a <?php echo ( isset($current) && $current === 'news' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/news')?>">&nbsp;&nbsp;NEWS&nbsp;&nbsp;</a></li>
                                <li><a <?php echo ( isset($current) && $current === 'certification' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/certification')?>">&nbsp;&nbsp;CERTIFICATION&nbsp;&nbsp;</a></li>
                                <li><a <?php echo ( isset($current) && $current === 'contactus' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/contactus')?>.html">&nbsp;&nbsp;CONTACT US&nbsp;&nbsp;</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="hidden-xs menu">
                        <ul class="nav masthead-nav">
                            <li><a <?php echo ( isset($current) && $current === 'home' ) ? 'class="active"' : ''?> href="<?php echo site_url('home')?>">&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></li>
                            <li><a <?php echo ( isset($current) && $current === 'grespanaria' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/grespanaria')?>">&nbsp;&nbsp;GRES PANARIA&nbsp;&nbsp;</a></li>
                            <li><a <?php echo ( isset($current) && $current === 'presentations' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/presentations')?>">&nbsp;&nbsp;PRESENTATIONS&nbsp;&nbsp;</a></li>
                            <li><a <?php echo ( isset($current) && $current === 'news' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/news')?>">&nbsp;&nbsp;NEWS&nbsp;&nbsp;</a></li>
                            <li><a <?php echo ( isset($current) && $current === 'certification' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/certification')?>">&nbsp;&nbsp;CERTIFICATION&nbsp;&nbsp;</a></li>
                            <li><a <?php echo ( isset($current) && $current === 'contactus' ) ? 'class="active"' : ''?> href="<?php echo site_url('pages/contactus')?>">&nbsp;&nbsp;CONTACT US&nbsp;&nbsp;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>