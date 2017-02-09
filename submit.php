<?php

if (isset($_POST['userCopy']) && $_POST['userCopy'] == 'copy')
{
	$userName = $_POST['userName'];
	$userEmail = $_POST['userEmail'];
	$userMessage = $_POST['userMessage'];

	$to = $userEmail;
	$subject = 'Site Contact Form';
	$content =
		'Name: '.$userName.'<br/>
		E-mail: '.$userEmail.'<br/>
		<br/>
		Message: '.$userMessage.'<br/>';

	mail($to, $subject,$content, "Content-type:text/html");
}

$submit = $_POST['userSubmit'];

if ($submit == 'submit'){
	$userName = $_POST['userName'];
	$userEmail = $_POST['userEmail'];
	$userMessage = $_POST['userMessage'];

	$to = 'dinabedenko@hotmail.com';
	$subject = 'Site Contact Form';
	$content =
		'Name: '.$userName.'<br/>
		E-mail: '.$userEmail.'<br/>
		<br/>
		Message: '.$userMessage.'<br/>';

	mail($to, $subject, $content, "Content-type:text/html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Energia Ent. | Thank You</title>
  <meta name="author" content="Randy Q Reyes">
  <meta name="description" content="Spanning across visual and performing arts, we are an entertainment production company that features live multimedia showcases.">
  <meta name="keywords" content="carnival, samba, burlesque, dance, music">
  <link rel="canonical" href="http://www.mm214.com/rreyes/submit.php">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Font
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

  <!-- Icons
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <!-- Adtile Fixed Nav
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="adtile-fixed-nav/css/styles.css">
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="adtile-fixed-nav/css/ie.css">
  <![endif]-->
  <script src="adtile-fixed-nav/js/responsive-nav.js"></script>

  <!-- Skeleton CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="skeleton.2.0/css/normalize.css">
  <link rel="stylesheet" href="skeleton.2.0/css/skeleton.css">

  <!-- Personal CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="icons/favicon.png" />

</head>
<body>

  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header>
    <a href="index.html#home" class="logo" data-scroll>
      <div class="energia">Energia</div>
      <div class="ent">Entertainment</div>
    </a>
    <nav class="nav-collapse">
      <ul>
        <li class="menu-item"><a href="index.html#home" data-scroll>Home</a></li>
        <li class="menu-item"><a href="index.html#about" data-scroll>About</a></li>
        <li class="menu-item"><a href="index.html#events" data-scroll>Events</a></li>
        <li class="menu-item"><a href="index.html#contact" data-scroll>Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Header Background
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="bg-header invert"></div>

  <!-- Thank You
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section>
  	<h2>Thank you! We'll be in touch soon.</h2>
  </section>

  <!-- Footer
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <footer class="invert">
    <div class="container">
      <div class="row">
        <div class="six columns">
          <div class="h4 text-left">
            <strong class="fa fa-sitemap"></strong>
            Energia
          </div>
          <ul>
            <li><a href="index.html#home">Home</a></li>
            <li><a href="index.html#about">About</a>
              <ul>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="artists.html">Artists</a></li>
              </ul>
            </li>
            <li><a href="index.html#events">Events</a></li>
            <li><a href="index.html#contact">Contact</a></li>
          </ul>
        </div>
        <div class="six columns">
          <div class="h4 text-left">
            <strong class="fa fa-comments-o"></strong>
            Networks
          </div>
          <ul>
            <li><a href="https://www.facebook.com/EnergiaEntertainment" target="_blank">Facebook</a></li>
            <li><a href="https://twitter.com/energiadancers" target="_blank">Twitter</a></li>
            <li><a href="https://www.youtube.com/channel/UC8SPFdQRROmcnb6BIxRuxwg" target="_blank">YouTube</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Copyright
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="six columns">
          <p>&copy; 2014 Energia Entertainment</p>
        </div>
        <div class="six columns">
          <a href="#home" class="button u-pull-right" data-scroll>
            <strong class="fa fa-angle-up"></strong>
            Back To Top
            <strong class="fa fa-angle-up"></strong>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Adtile Fixed Nav
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="adtile-fixed-nav/js/fastclick.js"></script>
  <script src="adtile-fixed-nav/js/scroll.js"></script>
  <script src="adtile-fixed-nav/js/fixed-responsive-nav.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>