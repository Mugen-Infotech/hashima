<?php

/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="p-main-visual">
  <span class="p-main-visual__background js-main-visual-background"></span>
  <div class="p-main-visual__title">
    <img
      class="p-main-visual__title-logo"
      src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg"
      width="200"
      height="185"
      decoding="async"
      alt="ロゴ" />
    <h1 class="p-main-visual__title-text">HASHIMA <br />BASE</h1>
    <div id="intro-overlay">
      <h1 id="intro-title" class="p-main-visual__title-text-desktop">
        <span>H</span>
        <span>A</span>
        <span>S</span>
        <span>H</span>
        <span>I</span>
        <span>M</span>
        <span>A</span>
        <span>&nbsp;</span>
        <span>B</span>
        <span>A</span>
        <span>S</span>
        <span>E</span>
      </h1>
    </div>
  </div>
  <div class="p-main-visual__carousel">
    <div class="p-main-visual__slide active">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/main-visual.webp">
        <img
          class="p-main-visual__image"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/banner-1.webp"
          alt="Responsive Slide 1" />
      </picture>
      <div class="p-main-visual__catch">
        <p>愛車と過ごす</p>
        <p>レンタルバイクガレージ。</p>
      </div>
    </div>
    <div class="p-main-visual__slide">
      <img
        class="p-main-visual__image lg-hidden"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo07.jpg"
        alt="Slide 2" />
      <img
        class="p-main-visual__image pc-hidden"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/d_photo07.jpg"
        alt="Slide 2" />
      <div class="p-main-visual__catch">
        <p>愛車と過ごす</p>
        <p>レンタルバイクガレージ。</p>
      </div>
    </div>
    <div class="p-main-visual__slide">
      <img
        class="p-main-visual__image lg-hidden"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo08.jpg"
        alt="Slide 3" />
      <img
        class="p-main-visual__image pc-hidden"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/d_photo08.jpg"
        alt="Slide 3" />
      <div class="p-main-visual__catch">
        <p>愛車と過ごす</p>
        <p>レンタルバイクガレージ。</p>
      </div>
    </div>
  </div>
</div>

<main class="l-main-content">
  <section class="l-main-content__section p-concept">
    <div class="p-concept__text-group">
      <p class="p-concept__paragraph">
        <span>自分のための隠れ家で</span>
        <span>個性を磨く。</span>
        <span>愛車と過ごす</span>
        <span>レンタルバイクガレージ！</span>
      </p>
    </div>
    <img
      class="p-concept__img"
      src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-concept/photo.webp"
      width="480"
      height="670"
      decoding="async"
      alt="バイク" />
  </section>

  <section class="l-main-content__section p-facility-intro">
    <div class="p-facility-intro__wrapper js-facility-wrapper">
      <img
        class="p-facility-intro__img p-facility-intro__img--signboard"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo01.webp"
        width="610"
        height="480"
        decoding="async"
        alt="" />
      <img
        class="p-facility-intro__img p-facility-intro__img--chair"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo02.webp"
        width="360"
        height="260"
        decoding="async"
        alt="" />
      <img
        class="p-facility-intro__img p-facility-intro__img--stop"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo03.webp"
        width="256"
        height="186"
        decoding="async"
        alt="" />
      <p class="p-facility-intro__paragraph">
        <span>HASHIMA BASEは、</span>
        <span>大切な愛車を安心安全に保管できる</span>
        <span>コンテナ製のレンタルバイクガレージを18棟備えた施設です。</span>
        <span>その他、レンタルスペース、レンタルキッチントレーラーも備え、</span>
        <span>豊かなライフスタイルを加速させるための魅力的な空間です。</span>
        <span>いつも安心できて、いつでも乗り出せる利便性はもちろん、</span>
        <span>隠れ家のようなお気に入りの空間で過ごす時間こそが</span>
        <span>自分らしさを育むはずです。</span>
        <span>愛車を大切にする時間は、</span>
        <span>自分自身を大切にする時間と言えます。</span>
        <span>同じ趣味を持つ仲間が集まるHASHIMA BASEでは、</span>
        <span>新たなコミュニティも生まれています。</span>
        <span>ぜひ一度、お気軽にご来場のうえ施設内をご見学ください。</span>
      </p>
    </div>
    <div class="p-facility-intro__gallery">
      <img
        class="p-facility-intro__img-two p-facility-intro__img--flag"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo04.webp"
        width="260"
        height="200"
        decoding="async"
        alt="" />
      <img
        class="p-facility-intro__img-two p-facility-intro__img--appearance"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo05.webp"
        width="620"
        height="468"
        decoding="async"
        alt="" />
      <img
        class="p-facility-intro__img-two p-facility-intro__img--shop"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-facility-intro/photo06.webp"
        width="320"
        height="230"
        decoding="async"
        alt="" />
    </div>
  </section>

  <section class="l-main-content__section p-plan">
    <span class="p-plan__background"></span>
    <div class="p-plan__inner">
      <div class="p-plan__main">
        <picture class="p-plan__main-img">
          <source
            srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/garage-sp.webp"
            media="(max-width: 750px)"
            width="695"
            height="320"
            type="image/jpeg" />
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/garage.webp"
            width="1120"
            height="400"
            decoding="async"
            alt="" />
        </picture>
        <hgroup class="p-plan__main-title">
          <h2 class="p-plan__main-title-en js-title">
            <span>R</span>
            <span>E</span>
            <span>N</span>
            <span>T</span>
            <span>A</span>
            <span>L</span>
            <span>&nbsp;</span>
            <span>B</span>
            <span>I</span>
            <span>K</span>
            <span>E</span>
            <span>&nbsp;</span>
            <span>G</span>
            <span>A</span>
            <span>R</span>
            <span>A</span>
            <span>G</span>
            <span>E</span>
          </h2>
          <p class="p-plan__main-title-ja">レンタルバイクガレージ</p>
        </hgroup>
        <p class="p-plan__main-price">
          月額／<span class="p-plan__main-price-number">39,000</span><span class="p-plan__main-price-unit">YEN</span>～
        </p>
        <div class="plan__main-description">
          <p class="p-plan__main-description">
            バイク好きのための夢のスペースで、
            新たな楽しみ方を見つけませんか?こ
            のガレージは、駐車場でのご利用はもちろん、
            バイクのメンテナンスやカス タマイズ、
            DIYもできるプライベートな空間です。 仲間とシェアして借りれば、
            バイクを囲みながら語り合う時間もつくれます。
            「バイクを大切にしたい」 「作業する場所が欲しい」
            という思いを実現する場所、 それがHASHIMA
            BASEのバイクガレージです。
          </p>
          <a class="p-plan__main-button" href="<?php echo home_url('bike') ?>">View more</a>
        </div>
      </div>
      <div class="p-plan__grid">
        <div class="p-plan__sub">
          <picture class="p-plan__sub-img">
            <source
              srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/space-sp.webp"
              media="(max-width: 750px)"
              width="695"
              height="320"
              type="image/jpeg" />
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/space_old.webp"
              width="520"
              height="320"
              decoding="async"
              alt="" />
          </picture>
          <hgroup class="p-plan__sub-title">
            <h2 class="p-plan__sub-title-en js-title">
              <span>RENTAL <br class="line-break-lg" />
                SPACE</span>
            </h2>
            <p class="p-plan__sub-title-ja">レンタルスペース</p>
          </hgroup>
          <p class="p-plan__sub-price">
            1時間／<span class="p-plan__sub-price-number">2,500</span><span class="p-plan__sub-price-unit">YEN</span>～
          </p>
          <p class="p-plan__sub-description">
            自由度満点のお洒落でオープンな空間です。
            バイク仲間とのイベントやミー
            ティング、さらには期間限定のポップアップショップや展示会など、多彩な用
            途でご利用いただけます。
            室内外どちらでも快適に過ごせるよう、レイアウト も自由自在。
            ツーリング仲間や、バイク仲間との交流を深める場として、ま
            た、あなたの夢やアイデアをカタチにする拠点として、このスペースをぜひ有
            効にご活用ください。
          </p>
          <a class="p-plan__sub-button" href="<?php echo home_url('space') ?>">View more</a>
        </div>
        <div class="p-plan__sub">
          <picture class="p-plan__sub-img">
            <source
              srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer-sp.webp"
              media="(max-width: 750px)"
              width="695"
              height="320"
              type="image/jpeg" />
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer.webp"
              width="520"
              height="320"
              decoding="async"
              alt="" />
          </picture>
          <hgroup class="p-plan__sub-title">
            <h2 class="p-plan__sub-title-en js-title">
              <span>RENTAL <br />
                KITCHEN TRAILER</span>
            </h2>
            <p class="p-plan__sub-title-ja">レンタルキッチントレーラー</p>
          </hgroup>
          <p class="p-plan__sub-price2">
            1日／<span class="p-plan__sub-price-number">5,000</span><span class="p-plan__sub-price-unit">YEN</span>～
          </p>
          <p class="p-plan__sub-description">
            カフェや飲食店の夢を叶える第一歩に、レンタルキッチントレーラーをご利
            用いただけます。 副業や週末限定でカフェをはじめたい方や、
            キッチンカー 事業の導入を検討中の方にぴったりです。
            必要な設備が揃った本格仕様で
            すので、この場所でイベント期間中の限定カフェ運営で参加者に美味しい
            フードを提供したり、既存の飲食店メニューの試験販売、
            新メニューのプロ モーションにもお使いいただけます。
          </p>
          <a class="p-plan__sub-button" href="<?php echo home_url('trailer') ?>">View more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="l-main-content__section p-map">
    <h2 class="p-map__title js-title">
      <span>H</span>
      <span>A</span>
      <span>S</span>
      <span>H</span>
      <span>I</span>
      <span>M</span>
      <span>A</span>
      <span>&nbsp;</span>
      <span>B</span>
      <span>A</span>
      <span>S</span>
      <span>E</span>
      <span class="map__title_size">M</span>
      <span class="map__title_size">A</span>
      <span class="map__title_size">P</span>
    </h2>
    <a class="p-map__button garage-link"
      data-mobile-target="garage-availability-mobile"
      data-desktop-target="garage-availability-section"
      href="<?php echo home_url('bike'); ?>#garage-availability-section">View more</a>
    <img
      class="p-map__map"
      src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-map/map.webp"
      width="664"
      height="965"
      decoding="async"
      alt="マップイメージ" />
  </section>

  <section class="l-main-content__section p-information">
    <div class="p-information__group">
      <h2 class="p-information__title js-title">
        <span>I</span>
        <span>N</span>
        <span>F</span>
        <span>O</span>
        <span>R</span>
        <span>M</span>
        <span>A</span>
        <span>T</span>
        <span>I</span>
        <span>O</span>
        <span>N</span>
      </h2>
      <a class="p-information__button" href="<?php echo home_url('information') ?>">View more</a>
      <picture class="p-information__object">
        <source
          srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-information/bike-sp.webp"
          media="(max-width: 750px)"
          width="299"
          height="247"
          type="image/jpeg" />
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-information/bike.webp"
          width="302"
          height="230"
          decoding="async"
          alt="" />
      </picture>
    </div>
    <ul class="p-information__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
      );

      $the_query = new WP_Query($args);

      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
          $post_date = get_the_date('Y.m.d');
          $post_title = get_the_title();
          $permalink = get_permalink();
      ?>
          <li class="p-information__item">
            <p class="p-information__date"><?php echo esc_html($post_date); ?></p>
            <a class="p-information__link" href="<?php echo esc_url($permalink); ?>">
              <p class="p-information__news"><?php echo esc_html($post_title); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
  </section>

  <iframe
    class="l-main-content__googlemap"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.1389878189616!2d136.72609717639037!3d35.35219687269537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003af8316cc1043%3A0x54f03bee162d2d89!2zSEFTSElNQSBCQVNF77yI57695bO25Z-65Zyw77yJ!5e0!3m2!1sja!2sjp!4v1747690215124!5m2!1sja!2sjp"
    width="600"
    height="450"
    style="border: 0"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    title="羽島基地"></iframe>

  <div class="p-contact">
    <hgroup class="p-contact__title">
      <h2 class="p-contact__title-en js-title leading-line-h">
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
      </h2>
      <p class="p-contact__title-ja">
        お問い合わせ／内覧お申込み／お申込み
      </p>
    </hgroup>
    <div class="p-contact__group">
      <div class="flex-col-items-end">
        <div class="p-contact__info">
          <p class="p-contact__tel">TEL 090-4153-3258</p>
          <p class="p-contact__time">営業時間 8:00〜18:00</p>
        </div>
        <a class="p-contact__button" href="<?php echo home_url('contact') ?>">CONTACT</a>
      </div>
    </div>
  </div>
</main>

<?php // get_template_part( 'template-parts/footer-menus-widgets' ); 
?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const intro = document.getElementById("intro-overlay");
    const title = document.getElementById("intro-title");

    title.classList.add("is-visible");

    setTimeout(() => {
      title.classList.add("move-up");
    }, 1200);

    setTimeout(() => {
      intro.classList.add("hide");
    }, 2000);
  });

  document.addEventListener("DOMContentLoaded", function() {
    const garageLink = document.querySelector(".garage-link");

    if (!garageLink) return;

    const isMobile = window.innerWidth <= 768;
    const baseUrl = garageLink.href.split("#")[0]; // Remove current anchor

    const targetId = isMobile ?
      garageLink.dataset.mobileTarget :
      garageLink.dataset.desktopTarget;

    garageLink.href = `${baseUrl}#${targetId}`;
  });

  function applyPaddingIfMobile() {
    const header = document.querySelector(".l-header__name");

    if (header) {
      if (window.innerWidth < 751) {
        header.style.padding = "25.5px";
      } else {
        header.style.padding = ""; // Remove padding on larger screens
      }
    }
  }

  // Run once on page load
  document.addEventListener("DOMContentLoaded", applyPaddingIfMobile);

  // Re-check on scroll and resize
  window.addEventListener("scroll", applyPaddingIfMobile);
  window.addEventListener("resize", applyPaddingIfMobile);
</script>



<?php
get_footer();
