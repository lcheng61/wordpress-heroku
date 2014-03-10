  <head>
    <meta charset="utf-8">

    <title ><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/ico/favicon.png">

    <title>Beachstrap</title>

    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap/assets/js/html5shiv.js"></script>
      <script src="bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  </head>

  <body data-spy="scroll" data-target="#navigation">

	<div id="content">

	<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
				<h1 id="logo">Beachstrap</h1>
			</div><!-- end 2 -->
			<div class="col-sm-2 col-xs-3 visible-sm text-right visible-xs">
				<a href="#" title="nav" class="mini-nav"><i class="fa fa-reorder"></i></a>
			</div>

			<div class="col-lg-6 col-lg-offset-3 col-md-7 col-md-offset-2 col-sm-12 col-xs-12">
				<nav id="navigation">
						<ul class="nav">
							<li class="active"><a href="#main" title="Home">Home</a></li>
							<li><a href="#work" title="Work">Work</a></li>
							<li><a href="#our-team" title="Our Team">Our Team</a></li>
							<li><a href="#contact" title="Contact">Contact</a></li>
							<li><a href="#blog" title="Blog">Blog</a></li>
						</ul>
				</nav>
			</div><!-- end 12 -->
		</div><!-- end row -->
	</div><!-- end container -->
	</header>
