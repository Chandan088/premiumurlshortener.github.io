<?php

if(isset($page_var)) {
  $page_info['title']  = $site_config['website_name'] . ' - ' . $page_var['title'];
  $page_info['description'] = $page_var['description'];
  $page_info['url'] = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $page_info['image'] = $site_config['website_url'] . '/assets/img/' . $page_var['img'];
} else {
  $page_info['title']  = $site_config['default_title'];
  $page_info['description'] = $site_config['default_description'];
  $page_info['url'] = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $page_info['image'] = $site_config['website_url'] . '/assets/img/' . $site_config['default_image'];
}

 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_info['title']; ?></title>
    <meta name="description" content="<?php echo $page_info['description']; ?>">
    <!-- Opengraph Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $page_info['title']; ?>" />
    <meta property="og:description" content="<?php echo $page_info['description']; ?>" />
    <meta property="og:url" content="<?php echo $page_info['url']; ?>" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $page_info['title']; ?>" />
    <meta name="twitter:description" content="<?php echo $page_info['description']; ?>" />
    <meta property="twitter:url" content="<?php echo $page_info['url']; ?>" />
    <!-- Google Site Verification Tag -->
    <meta name="google-site-verification" content="<?php echo $google['webmaster_tools']; ?>" />
    <!-- Images -->
    <link rel="icon" href="<?php echo $site_config['website_url']; ?>/assets/img/favicon.png" />
    <!-- External CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo  $site_config['website_url']; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo  $site_config['website_url']; ?>/assets/css/ember.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- Google Analytics -->
<script
  src="https://code.jquery.com/jquery-3.2.0.min.js"
  integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
  crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-static-top mobile-hide">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo  $site_config['website_url']; ?>"><i class="fa fa-cube" aria-hidden="true"></i> <?php echo  $site_config['website_name']; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="bitcoin:<?php echo $btc['address']; ?>">Donate Bitcoin</a></li>
          </ul>
        </div>
      </div>
    </nav>
