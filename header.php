<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('the_title'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
  <?php wp_head(); ?>
</head>
<body>
<?php if (!is_mobile()): ?>
<div class="header">
  <div class="container">
    <div class="header__logo">
      <p class="header__catchcopy">完全成果報酬の治療院M＆A専門会社</p>
      <h1 class="header__blog-title">治療院M＆A.com</h1>
    </div>
    <nav class="header__nav">
      <ul class="header__nav-list">
        <li class="header__nav-item">
          <a href="" class="header__nav-link">地図・交通</a>
        </li>
        <li class="header__nav-item">
          <a href="" class="header__nav-link">よくあるご質問</a>
        </li>
      </ul>
    </nav>
    <div class="header__consul">
      <div class="header__consul-dial">無料相談ダイアル</div>
      <p class="header__consul-tel">0120-914-326</p>
      <div class="header__consul-reception">
        秘密厳守いたします。<br>受付：平日10時〜18時
      </div>
    </div>
    <div class="header__mail">
      <a href="" class="header__mail-link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header__mail-img.png" alt="">
        <p class="header__mail-text">お問合わせ<br>ご相談</p>
      </a>
    </div>
  </div>
</div>
<?php else: ?>
<div class="header-sp">
  <div class="container">
    <div class="header__logo-sp">
      <p class="header__catchcopy-sp">完全成果報酬の治療院M＆A専門会社</p>
      <h1 class="header__blog-title-sp">治療院M＆A.com</h1>
    </div>
    <div class="header__tell-sp">
      <a href="tel: 0120-914-326">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header__tel-sp-img.png" alt="">
      </a>
    </div>
    <div class="header__humb-sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header__humb-sp-img.png" alt="">
    </div>
  </div>
</div>
<?php endif; ?>
