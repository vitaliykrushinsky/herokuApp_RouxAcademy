<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roux Academy 2013 --Home</title>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyle.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home">
  	<section class="container">
  		<div class="content row">
        <?php include "_/components/php/header.php"; ?>
        <?php include "_/components/php/snippet-carousel.php"; ?>
  			<section class="main col-sm-8">
          <?php include "_/components/php/article-intro.php"; ?>
          <?php include "_/components/php/article-abouttheartists.php"; ?>
          <?php include "_/components/php/article-aboutthevenue.php"; ?>
  			</section><!--end main-->
  			<section class="sidebar col-sm-4">
  				<?php include "_/components/php/aside-register.php"; ?>
          <?php include "_/components/php/aside-lastyear.php"; ?>
          <?php include "_/components/php/aside-accordion.php"; ?>
  			</section><!--end sidebar-->

  
  		</div><!--end content-->
  		<?php include "_/components/php/footer.php"; ?>
  	</section><!--end container-->
    


    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>