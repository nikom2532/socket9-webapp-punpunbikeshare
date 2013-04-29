<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
    
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon">
    
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?php bloginfo( 'template_url' ); ?>/fonts/thsarabunnew.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_url' ); ?>/Styles/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_url' ); ?>/Styles/Style.css" rel="stylesheet" type="text/css"  />
    <link href="<?php bloginfo( 'template_url' ); ?>/Styles/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_url' ); ?>/Styles/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_url' ); ?>/Styles/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />

 <script src="<?php bloginfo( 'template_url' ); ?>/Scripts/jquery.js" type="text/javascript"></script>	
	<?php wp_head(); ?>	


    <script type="text/javascript">
		 /* var _gaq = _gaq || [];
 		 _gaq.push(['_setAccount', 'UA-35918318-1']);
 		 _gaq.push(['_trackPageview']);

  		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 		 })();*/
 	</script>

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
    <div class=" ">
        <div class="row-fluid">
	        <!--head -->
    <div class="header jumbotron subhead" id="overview">
        <div class="wrapper_home" style="clear: both; overflow: hidden;">
            <h1 class="span5">
                <img class="imglogo" src="<?php bloginfo( 'template_url' ); ?>/images/nav/logoPunpunHome.png" /></h1>
            <span class="span7 headright">
                <!--<img src="<?php bloginfo( 'template_url' ); ?>/images/nav/cityOutLine.png" />
                <span class="span3 headb">
                	<span class="span12 clslang"><span class="flaglang th"></span><span class="txtflag">TH</span></span>
                	<span class="span12 thumbnails clsonoff"><span class="on"></span></span>
                </span>-->
            </span>
        </div>
    </div>
    <!-- Navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner  navi">
            <div class="wrapper_home">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
                    </span>
                </button>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="<?php if(is_home()){echo "active";}?>"> <a class="home" href="<?php bloginfo( 'siteurl' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/menuHome.png" alt="menuHome" width="28" height="28" /></a></li>
                        <li class="<?php if(is_page('about')){echo "active";}?>"><a href="<?php bloginfo( 'siteurl' ); ?>/?page_id=4">เกี่ยวกับปั่นปั่น</a></li>
                        <li class="<?php if(is_page('service')){echo "active";}?>"><a href="<?php bloginfo( 'siteurl' ); ?>/?page_id=27">การใช้บริการ</a></li>
                        <li class="<?php if(is_page('area')){echo "active";}?>"><a href="<?php bloginfo( 'siteurl' ); ?>/?page_id=98">ขอบเขตการให้บริการ</a></li>
                        <li class="<?php if(is_page('news')|| is_single() && in_category('2')){echo "active";}?>"><a href="<?php bloginfo( 'siteurl' ); ?>/?page_id=41">ข่าวสารปั่นปั่น</a></li>
                        <li class="<?php if(is_page('faq')){echo "active";}?>"><a href="<?php bloginfo( 'siteurl' ); ?>/?page_id=107">คำถามที่พบบ่อย</a></li>
                    </ul>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end navbar-inner-->
		
    </div>
    <!--end navbar-->
		
    </div>
    <!--end row-fluid-->