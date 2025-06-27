<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no,email=no" />
  <title>HASHIMA BASE</title>
  <meta name="description" content="HASHIMA BASEの紹介ページ" />
  <link rel="canonical" href="https://hoge.com" />

  <!-- Favicon -->
  <link rel="icon" href="#" />

  <!-- apple-touch-icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="#" />

  <!-- Open Graph Protocol -->
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:url" content="https://hoge.com" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="HASHIMA BASE" />
  <meta property="og:description" content="HASHIMA BASEの紹介ページ" />
  <meta property="og:site_name" content="HASHIMA BASE" />
  <meta property="og:image" content="/og-image.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@hashimabase" />
  <meta name="twitter:title" content="HASHIMA BASE" />
  <meta name="twitter:description" content="HASHIMA BASEの紹介ページ" />
  <meta name="twitter:image" content="/twitter-image.jpg" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@500&display=swap"
    rel="stylesheet" />

  <!-- FONTPLUS -->
  <script
    defer=""
    src="https://webfont.fontplus.jp/accessor/script/fontplus.js?4SOBObYu78U%3D&box=9RpT-y2Pask%3D&aa=1&ab=2"></script>

  <!-- Fontawesome -->
  <script
    src="https://kit.fontawesome.com/234d4cc762.js"
    crossorigin="anonymous"
    defer></script>
  <script type="module" crossorigin src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/main.js"></script>
  <script type="module" crossorigin src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/gsap.js"></script>
  <link rel="stylesheet" crossorigin href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css" />
  <?php if (!is_front_page() && !is_home()) : ?>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  <?php endif; ?>
</head>

<body class="l-body" id="lenis-root">
  <header class="l-header">
    <p class="l-header__name text-[44px]">
      <a href="<?php echo home_url() ?>">HASHIMA BASE</a>
    </p>
    <nav class="l-header__nav">
      <ul class="l-header__list">
        <li class="l-header__item">
          <a class="l-header__link" href="<?php echo home_url('about') ?>"> ABOUT </a>
        </li>
        <li class="l-header__item">
          <a class="l-header__link" href="<?php echo home_url('bike') ?>">
            RENTAL BIKE GARAGE
          </a>
        </li>
        <li class="l-header__item">
          <a class="l-header__link" href="<?php echo home_url('space') ?>">
            RENTAL SPACE
          </a>
        </li>
        <li class="l-header__item">
          <a class="l-header__link" href="<?php echo home_url('trailer') ?>">
            RENTAL KITCHEN TRAILER
          </a>
        </li>
        <li class="l-header__item">
          <a class="l-header__link" href="<?php echo home_url('information') ?>">
            INFORMATION
          </a>
        </li>
        <li class="l-header__item">
          <a class="l-header__link" href="<?php echo home_url('contact') ?>"> CONTACT </a>
        </li>
      </ul>
      <div class="l-header__sns">
        <a class="l-header__sns-link" target="__blank" href="https://www.instagram.com/hashimabase39/?hl=ja">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a class="l-header__sns-link" target="__blank" href="https://www.facebook.com/profile.php?id=100095356001962">
          <i class="fa-brands fa-facebook"></i>
        </a>
      </div>
    </nav>
    <div class="l-header__follow">
      <a class="l-header__follow-link" href="<?php echo home_url('contact') ?>">CONTACT</a>
      <a class="l-header__follow-link" href="#">TEL</a>
    </div>
  </header>
  <button
    class="l-global-menu-button js-global-menu-button"
    type="button"
    aria-controls="global-menu"
    aria-expanded="false"
    aria-label="メニューを開く">
    <span
      class="l-global-menu-button__bar l-global-menu-button__bar--top"></span>
    <span
      class="l-global-menu-button__bar l-global-menu-button__bar--bottom"></span>
  </button>

  <div
    id="global-menu"
    class="l-global-menu js-global-menu"
    aria-hidden="true">
    <div class="l-global-menu__inner">
      <div class="l-global-menu__sns">
        <a class="l-global-menu__sns-link" target="__blank" href="https://www.instagram.com/hashimabase39/?hl=ja">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a class="l-global-menu__sns-link" target="__blank" href="https://www.facebook.com/profile.php?id=100095356001962">
          <i class="fa-brands fa-facebook"></i>
        </a>
      </div>
      <ul class="l-global-menu__list">
        <li class="l-global-menu__item">
          <a class="l-global-menu__link" href="<?php echo home_url('about') ?>"> ABOUT </a>
        </li>
        <li class="l-global-menu__item">
          <a class="l-global-menu__link" href="<?php echo home_url('bike') ?>">
            RENTAL BIKE GARAGE
          </a>
        </li>
        <li class="l-global-menu__item">
          <a class="l-global-menu__link" href="<?php echo home_url('space') ?>">
            RENTAL SPACE
          </a>
        </li>
        <li class="l-global-menu__item">
          <a class="l-global-menu__link" href="<?php echo home_url('trailer') ?>">
            RENTAL KITCHEN TRAILER
          </a>
        </li>
        <li class="l-global-menu__item">
          <a class="l-global-menu__link" href="<?php echo home_url('information') ?>">
            INFORMATION
          </a>
        </li>
        <li class="l-global-menu__item">
          <a class="l-global-menu__link" href="<?php echo home_url('contact') ?>">
            CONTACT
          </a>
        </li>
      </ul>

      <div class="l-global-menu__group">
        <a href="<?php echo home_url() ?>">
          <img
            class="l-global-menu__logo"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg"
            width="236"
            height="220"
            decoding="async"
            alt="ロゴ" />
        </a>
        <p class="l-global-menu__name">HASHIMA<br />BASE</p>
      </div>
    </div>
  </div>