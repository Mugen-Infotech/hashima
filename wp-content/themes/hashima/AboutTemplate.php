<?php

/**
 * Template Name: About Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="l-main-content pt-10">
  <section class="py-12 md:py-10 pb-20">
    <div class="flex flex-col lg:flex-row min-h-screen max-w-7xl mx-auto px-7 sm:px-6 lg:px-8">
      <div class="lg:hidden">
        <div class="top-4 w-full flex justify-center">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg" class="w-64 h-auto" />
        </div>
      </div>
      <div class="lg:w-1/3 relative lg:h-[1430px] xl:h-[1492px] 2xl:h-[1366px] hidden lg:block">
        <div id="logo-wrapper" class="w-full flex justify-center">
          <img
            id="logo"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg"
            class="w-64 lg:w-64 h-auto"
            style="position: relative;"
          />
        </div>
      </div>

      <div class="lg:w-2/3">
        <h1
          class="text-9xl lg:text-[102px] lg:text-left lg:leading-loose title__font-family mb-6 lg:mb-0 p-about__title js-title md:flex md:justify-center lg:justify-start">
          <span>A</span>
          <span>B</span>
          <span>O</span>
          <span>U</span>
          <span>T</span>
        </h1>
        <h2
          class="text-[18px] md:text-[24px] lg:text-[34px] font-bold pb-2 mb-4 sm:mb-6 content__font-family text-center lg:text-left">
          夢をカタチにした、大人の秘密基地 ― HASHIMA BASE
        </h2>

        <div
          class="text-[14px] md:text-[16px] lg:text-[20px] leading-[24px] sm:leading-[2.2] lg:leading-[2.5] text-black content__font-family about-content space-y-4 sm:space-y-5 lg:space-y-6">
          <p>
            40代も半ばになり、長年の憧れだったハーレーをようやく手に入れました。
            仲間たちと風を切って走るツーリングは、気づけば人生に新たな彩りを与えてくれる大切な時間に。
            サービスエリアや駐車場で交わす何気ない会話も、いつの間にか心の癒しになっていました。
            <br />
            <span>
              「もっと自由に、もっと気軽に仲間と集まれる場所があったらいいな」
              そんな想いが、少しずつ、でも確かに大きくなっていったのです。
            </span>
            <br />
            <span>
              アメリカ・ラスベガスで感じた、あの開放感。
              映画で見たようなオールドアメリカンの空気。
              日本ではなかなか味わえないその世界観を、岐阜というこの土地に再現したい――
              そんな“夢みたいな話”を、本気でカタチにしてみました。
            </span>
            <br />
            <span>
              米軍基地を思わせる無骨なコンテナに、バイク好きが集まるガレージ。
              年齢を重ねても、心はあの頃のまま。
              バイクを囲んで笑い合い、語り合い、過ごす時間が何よりも大切な「宝物」になるような場所。
            </span>
            <br />
            <span>
              それが、「HASHIMA BASE」です。
            </span>
            <br />
            <span>
              この場所は、ひとりの小さな夢から始まりました。
              でもいつか、ここが誰かの“新しい夢のはじまり”になれたら、とても嬉しく思います。
            </span>
          </p>
        </div>

        <div
          class="flex justify-end items-center gap-10 mt-20 mb-4 sm:mb-6 text-right text-black">
          <span class="text-xl lg:text-[18px] leading-[2]">
            HASHIMA BASE<span
              class="text-xl lg:text-[18px] leading-[2]">　　代表　　</span></span>
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/signature.png"
            alt="Signature"
            class="h-10 lg:h-12" />
        </div>

        <div class="w-full mt-20 pt-7 lg:pt-18 mb-4 sm:mb-6">
          <dl
            class="text-2xl sm:text-lg content__font-family text-black">
            <div
              class="flex justify-between border-b border-black pb-6 lg:pb-2">
              <dt
                class="text-3xl lg:text-[22px] mb-4 font-bold content__font-family">
                会社概要
              </dt>
            </div>
            <div
              class="text-2xl lg:text-[18px] flex border-b border-black px-8 leading-[50px] py-3">
              <dt class="w-1/4">運営会社</dt>
              <dd>株式会社BKクローバー</dd>
            </div>

            <div
              class="text-2xl lg:text-[18px] flex border-b border-black px-8 leading-[50px] py-3">
              <dt class="w-1/4">所在地</dt>
              <dd>〒500-8385 岐阜県岐阜市下奈良3丁目6-6</dd>
            </div>

            <div
              class="text-2xl lg:text-[18px] flex border-b border-black px-8 leading-[50px] py-3">
              <dt class="w-1/4">設立</dt>
              <dd>平成25年7月1日</dd>
            </div>

            <div
              class="text-2xl lg:text-[18px] flex border-b border-black px-8 leading-[50px] py-3">
              <dt class="w-1/4">代表者</dt>
              <dd>代表取締役 近本智美（施設管理者:近本仁）</dd>
            </div>

            <div
              class="text-2xl lg:text-[18px] flex border-b border-black px-8 leading-[50px] py-3">
              <dt class="w-1/4">電話</dt>
              <dd>090-4153-3258</dd>
            </div>

            <div
              class="text-2xl lg:text-[18px] flex border-b border-black px-8 leading-[50px] py-3">
              <dt class="w-1/4">MAIL</dt>
              <dd>hashimabase39@gmail.com</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
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
      <h2 class="p-contact__title-en js-title leading-[1.11]">
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
      <div class="flex flex-col items-end">
        <div class="flex flex-col items-left p-contact__info">
          <p class="p-contact__tel">TEL 090-4153-3258</p>
          <p class="p-contact__time">営業時間 8:00〜18:00</p>
        </div>
        <a class="p-contact__button" href="<?php echo home_url('contact') ?>">CONTACT</a>
      </div>
    </div>
  </div>
</main>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const logo = document.getElementById("logo");
    const logoWrapper = document.getElementById("logo-wrapper");

    let offsetTop;
    if (window.innerWidth >= 1536) {
      // 2xl (≥1536px)
      offsetTop = 125;
    } else if (window.innerWidth >= 1280) {
      // xl (≥1280px)
      offsetTop = 140;
    } else if (window.innerWidth >= 1024) {
      // lg (≥1024px)
      offsetTop = 135;
    } else {
      // sm or smaller
      offsetTop = 120;
    }

    let maxScroll;
    if (window.innerWidth >= 1536) {
      // 2xl
      maxScroll = 1131;
    } else if (window.innerWidth >= 1280) {
      // xl
      maxScroll = 1252;
    } else if (window.innerWidth >= 1024) {
      // lg
      maxScroll = 1451;
    } else {
      // sm or smaller
      maxScroll = 800;
    }

    function updateLogoPosition() {
      const scrollY = window.scrollY;

      if (scrollY < logoWrapper.offsetTop - offsetTop) {
        logo.style.position = "relative";
        logo.style.top = "100px";
      } else if (scrollY < maxScroll) {
        logo.style.position = "fixed";
        logo.style.top = offsetTop + "px";
      } else {
        logo.style.position = "absolute";
        logo.style.top = (maxScroll - logoWrapper.offsetTop) + "px";
      }
    }

    window.addEventListener("scroll", updateLogoPosition);
    window.addEventListener("resize", updateLogoPosition);
    updateLogoPosition();
  });
</script>


<?php
get_footer();
