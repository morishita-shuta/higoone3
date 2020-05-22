  <?php get_header(); ?>
  <!-- ナビゲーション spのみ -->
  <?php if (is_mobile()): ?>
  <div class="nav-sp-area">
    <list class="nav-sp__list">
      <li class="nav-sp__item">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nav-sp-img.png" alt="">
        </a>
      </li>
      <li class="nav-sp__item">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nav-sp-img.png" alt="">
        </a>
      </li>
      <li class="nav-sp__item">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nav-sp-img.png" alt="">
        </a>
      </li>
    </list>
  </div>
  <?php endif; ?>
  <!-- ナビゲーション spのみここまで-->
  <!-- メインエリア -->
  <div class="main-area">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/main-img.png" alt="">
    </div>
  </div>
  <!-- メインエリアここまで -->
  <!-- リーズンエリア -->
  <?php 
  $items = [
    array(
      'number' => 1,
      'title-img' => 'reason-area__item-title-img1.png',
      'text' => '業界の中でも極めてリーズナブルな料金体系を採用しております。他社と比較してください。',
      'img' => 'reason-area__img1.jpg',
    ),
    array(
      'number' => 2,
      'title-img' => 'reason-area__item-title-img2.png',
      'text' => '業界の中でも極めてリーズナブルな料金体系を採用しております。他社と比較してください。',
      'img' => 'reason-area__img2.jpg',
    ),
    array(
      'number' => 3,
      'title-img' => 'reason-area__item-title-img3.png',
      'text' => '上場企業、未上場中堅企業、投資会社等から日々多くのM&Aニーズを直接聴取しており、金額条件と相性が最も合う相手先をご紹介いたします。',
      'img' => 'reason-area__img3.jpg',
    ),
    array(
      'number' => 4,
      'title-img' => 'reason-area__item-title-img4.png',
      'text' => 'M&Aに関わるあらゆるノウハウを蓄積しております。どこよりも早く、M&A戦略、企業価値のご提案や相手先企業のご紹介をし、3～6ヶ月でのM&A成立を目指します。',
      'img' => 'reason-area__img4.jpg',
    ),
  ]
  ?>
  <div class="reason-area">
    <div class="container">
      
      <h2 class="reason-area__title">治療院M＆A.<span>com</span>が選ばれる理由</h2>
      <div class="reasnon-area__list">
        <?php foreach ($items as $item): ?>
        <div class="reason-area__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $item['img']; ?>" alt="" class="reason-area__item-img">
          <div class="reason-area__item-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $item['title-img']; ?>" class="reason-area__item-title"></img>
            <p class="reason-area__item-text"><?php echo $item['text']; ?></p>
            <a href="" class="reason-area__item-link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/reason-area__item-button-img.png" alt="">
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <a href="" class="reason-area__link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/reason-area__button-img.png" alt=""> 
      </a>
    </div>
  </div>
  <!-- リーズンエリアここまで -->
  <!-- お問い合わせエリア -->
  <div class="contact-area">
    <div class="container">
      <h2 class="contact-area__title">お<span>問い合わ</span>せ</h2>
      <div class="contact-area__list">
        <div class="contact-area__item">
          <a href="" class="contact-area__item-link">
            <h3 class="contact-area__item-title">M&A無料相談・お問合せ</h3>
            <div class="contact-area__item-text-box">
              <p class="contact-area__item-text">会社、事業の譲渡または買収をご検討中の方は、お気軽にお問合せください。</p>
              <p class="contact-area__item-dial">無料相談ダイアル</p>
              <p class="contact-area__item-tel">0120-914-326</p>
              <p class="contact-area__item-reception">秘密厳守いたします。 受付：平日10時〜18時</p>
            </div>
          </a>
        </div>
        <div class="contact-area__item">
          <a href="" class="contact-area__item-link">
            <h3 class="contact-area__item-title">メール問い合せはこちら</h3>
            <div class="contact-area__item-text-box">
              <p class="contact-area__item-text">会社、事業の譲渡または買収をご検討中の方は、お気軽にお問合せください。</p>
              <p class="contact-area__item-dial">無料相談ダイアル</p>
              <p class="contact-area__item-reception">秘密厳守いたします。 受付：平日10時〜18時</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- お問い合わせエリアここまで -->
  <!-- メリットエリア -->
  <div class="merit-area">
    <h2 class="merit-area__title">完全成功報酬<span>制の圧倒</span>的なメリット</h2>
    <div class="container">
      <p class="merit-area__text">
        多くのM&A仲介会社は成功報酬制をうたっていますが、実際には着手金、中間金等のフィーがかかることがほとんどです。結果が出ていないのに払わされる着手金や中間金は、この業界の一番の問題点と考え、弊社創業時から、本当に成功報酬のみでM&Aを支援しています。完全成功報酬制には以下の様々なメリットがあります。
      </p>
      <?php if (!is_mobile()): ?>
      <p class="merit-area__note">
      中間金とは、買い手との基本合意時に、最終的な成功報酬額の1～2割程度を予め仲介会社に支払うものです。<br>
      基本合意の後にデューデリジェンスと最終契約の交渉を行いますが、基本合意から最終契約に至る確率は平均で70%～80%です。まだ1円の譲渡対価も得ておらず、20%～30%の確率でM&A成立に至らないにも関わらず、中間金は成功報酬の1～2割と多額になりますので、他の仲介会社に依頼する場合でも、中間金は無しにしてもらうよう要望すべきです。
      </p>
      <?php else: ?>
      <p class="merit-area__note">中間金とは</p>
      <?php endif; ?>
    </div>
  </div>
  <!-- メリットエリアここまで -->
  <!-- お問い合わせエリア -->
  <div class="contact-area">
    <div class="container">
      <h2 class="contact-area__title">お<span>問い合わ</span>せ</h2>
      <div class="contact-area__list">
        <div class="contact-area__item">
          <a href="" class="contact-area__item-link">
            <h3 class="contact-area__item-title">M&A無料相談・お問合せ</h3>
            <div class="contact-area__item-text-box">
              <p class="contact-area__item-text">会社、事業の譲渡または買収をご検討中の方は、お気軽にお問合せください。</p>
              <p class="contact-area__item-dial">無料相談ダイアル</p>
              <p class="contact-area__item-tel">0120-914-326</p>
              <p class="contact-area__item-reception">秘密厳守いたします。 受付：平日10時〜18時</p>
            </div>
          </a>
        </div>
        <div class="contact-area__item">
          <a href="" class="contact-area__item-link">
            <h3 class="contact-area__item-title">メール問い合せはこちら</h3>
            <div class="contact-area__item-text-box">
              <p class="contact-area__item-text">会社、事業の譲渡または買収をご検討中の方は、お気軽にお問合せください。</p>
              <p class="contact-area__item-dial">無料相談ダイアル</p>
              <p class="contact-area__item-reception">秘密厳守いたします。 受付：平日10時〜18時</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- お問い合わせエリアここまで -->
  <!-- マインドエリア -->
  <div class="mind-area">
    <div class="container">
      <h2 class="mind-area__title">我<span>々の思</span>い</h2>
      <p class="mind-area__text-box">
      弊社の社名インテグループ（Integroup）は、integrityとgroupを併せた造語です。<br>
      integrityとは、思考、言葉、行動が一致していること、裏表がないこと、そこから「誠実さ」を意味する言葉になります。<br>
      つまり、Integroupとは「誠実さを大切にする集団」という意味になります。<br>
      <br>
      ビジネスの世界では、どうしてもリスクを隠して取引して、安易に儲けたいという誘惑が存在します。<br>
      金融にまつわる詐欺事件も後を絶ちませんが、それはこのような誘惑に負けてしまった者が仕掛けて起こるものです。<br>
      M&Aの取引も決して例外ではありません。仲介者・アドバイザーには、成功報酬を得るためにリスクを語らずに成約を急かすというインセンティブが常に働いており、残念ながら実際にそのような仲介者・アドバイザーもいます。<br>
      <br>
      我々は、決して短期的な利益を追求することなく、お客様、社会と長期的な信頼関係を築き、常に言行一致の誠実な仕事をすることを肝に銘じるために、社名にintegrityという言葉を込め、2007年に創業いたしました。<br>
      <br>
      そして、社会的意義のあるM&Aを一つでも多く支援し、社会に良い影響、インパクトを与えていきたいと考えております。<br>
      我々は、M&Aの社会的意義は以下の３点にあると考えています。
      </p>
      <a href="" class="mind-area__link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mind-area__button-img.png" alt=""> 
      </a>
    </div>
  </div>
  <!-- マインドエリアここまで -->
  <!-- お問い合わせエリア -->
  <div class="contact-area">
    <div class="container">
      <h2 class="contact-area__title">お<span>問い合わ</span>せ</h2>
      <div class="contact-area__list">
        <div class="contact-area__item">
          <a href="" class="contact-area__item-link">
            <h3 class="contact-area__item-title">M&A無料相談・お問合せ</h3>
            <div class="contact-area__item-text-box">
              <p class="contact-area__item-text">会社、事業の譲渡または買収をご検討中の方は、お気軽にお問合せください。</p>
              <p class="contact-area__item-dial">無料相談ダイアル</p>
              <p class="contact-area__item-tel">0120-914-326</p>
              <p class="contact-area__item-reception">秘密厳守いたします。 受付：平日10時〜18時</p>
            </div>
          </a>
        </div>
        <div class="contact-area__item">
          <a href="" class="contact-area__item-link">
            <h3 class="contact-area__item-title">メール問い合せはこちら</h3>
            <div class="contact-area__item-text-box">
              <p class="contact-area__item-text">会社、事業の譲渡または買収をご検討中の方は、お気軽にお問合せください。</p>
              <p class="contact-area__item-dial">無料相談ダイアル</p>
              <p class="contact-area__item-reception">秘密厳守いたします。 受付：平日10時〜18時</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- お問い合わせエリアここまで -->
  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- フッターここまで -->
</body>
</html>