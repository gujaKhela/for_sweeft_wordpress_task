<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>
   <header>
   <nav class="navbar custom-navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo site_url(); ?>">Classic Books</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li <?php if(is_front_page()) echo "class='active'" ?> class="nav-item">
            <a class="nav-link" href="<?php echo site_url() ?>">მთავარი</a>
          </li>
          <li <?php if(is_page("about-us")) echo "class='active'" ?> class="nav-item">
            <a class="nav-link" href="<?php echo site_url("/about-us") ?>">ჩვენს შესახებ</a>
          </li>
          <li <?php if(is_page("contact")) echo "class='active'" ?> class="nav-item">
            <a class="nav-link" href="<?php echo site_url("/contact") ?>">კონტაქტი</a>
          </li>
        </ul>
      </div>
    </nav>
   </header>