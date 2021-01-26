<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Website Title</title>
      <meta name="description" content="Website description">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
	  <link rel="stylesheet" href="animate.css" >
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="font-awesome.min.css">
	<?php wp_head();?>
</head>
<body>
<div class="header-div">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header logo-div bounceInLeft wow" data-wow-duration="2s">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">HTML Template</a>
    </div>
  
    <div class="collapse navbar-collapse top-right-menu-ul bounceInRight wow" id="bs-example-navbar-collapse-1" data-wow-duration="4s">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#features">Features</a></li>
        <li><a href="#Services">Services</a></li>
        <li><a href="#About">Projects</a></li>
        <li><a href="#Testimonial">Testimonial</a></li>
              </ul>
    </div>
  </div>
</nav>
<div class="container wow bounceInDown" data-wow-duration="5s">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 text-center slide-text">
			<h1>Simple HTML Layout</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
		</div>
	</div>
</div>


