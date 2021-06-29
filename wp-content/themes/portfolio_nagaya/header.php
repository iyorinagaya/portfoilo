<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/sanitize.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="headerWrapper">
      <nav>
        <?php wp_nav_menu(
          array(
            'theme_location' => 'global',
            'container' => false,
            'menu_class' => 'navList',
          )
        );
        ?>
      </nav>
      <div class="toggleBtn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="mask"></div>
  </header>