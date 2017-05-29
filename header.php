<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta property="og:title" content="Juliette Cezzar / Design" />
  <meta property="og:url" content="http://juliettecezzar.com" />
  <meta property="og:site_name" content="Juliette Cezzar" />
  <meta property="og:description" content="Juliette Cezzar is designer, author, and educator based in New York City." />
  <meta property="og:image" content="<?php echo $site_url; ?>assets/img/juliette-cezzar.png"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="assets/css/main.css?=new" type="text/css" media="screen" title="no title" charset="utf-8">

  <title>Juliette Cezzar / Design</title>
</head>

<body>

  <!-- $request_uri = <?php echo $request_uri; ?> -->
  <!-- $basename = <?php echo $basename; ?> -->
  <!-- $base = <?php echo $base; ?> -->
  <div class="video-background">
    <div class="video-overlay"></div>
    <div class="video-foreground">https://youtu.be/I-VC-LWAy5U
      <iframe src="https://www.youtube.com/embed/I-VC-LWAy5U?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=I-VC-LWAy5U" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php if ($base !== 'home') { ?>
      <div class="color-overlay"></div>
    <?php } ?>
  </div>


