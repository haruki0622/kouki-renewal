<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/scss/css/style.css" />
    <title>株式会社光輝建設_リニューアル</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?> >
    <div class="container">
      <div class="loader js-loader">
        <div class="loader-fade js-loader-fade">
          <img class="loader-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/loading-2.svg" />
        </div>
      </div>
      <header class="header">
        <div class="header-inner">
          <h1>
            <a class="header-tit" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img
                class="header-logo"
                src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg"
                alt="光輝建設株式会社"
              />
            </a>
          </h1>
          <nav class="gnav js-gnav _pc">
            <ul class="gnav-list">
              <li class="gnav-item "><a class="gnav-txt" href="/">TOP</a></li>
              <li class="gnav-item">
                <a class="gnav-txt" href="/company">会社案内</a>
              </li>
              <li class="gnav-item">
                <a class="gnav-txt" href="">施工事例</a>
              </li>
              <li class="gnav-item">
                <a class="gnav-txt" href="">アクセス</a>
              </li>
              <li class="gnav-item">
                <a class="gnav-txt" href="">ブログ</a>
              </li>
              <li class="gnav-item">
                <a class="gnav-txt" href="">お問い合わせ</a>
              </li>
            </ul>
          </nav>
          <div class="header-btn js-header-btn _sp">
            <span class="header-bar js-header-bar"></span>
            <span class="header-bar js-header-bar"></span>
          </div>
        </div>
      </header>