<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&amp;family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="headr__title wrapper">
      <h1 class="headr__title-logo ">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="no-img"></a>
      </h1>
    </div>
    <div class="header__nav">
      <ul class="nav-list wrapper">
        <li class="nav-list-item"><a href="#">NEW</a></li>
        <li class="nav-list-item"><a href="#">COLUMN</a></li>
        <li class="nav-list-item"><a href="#">SERIES</a></li>
        <li class="nav-list-item"><a href="#">Q&A</a></li>
        <li class="nav-list-item"><a href="<?php echo home_url("contact"); ?>">CONTACT</a></li>
      </ul>
    </div>
  </header>