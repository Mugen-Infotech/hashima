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

<main class="l-main-content !pt-10">
      <section class="bg-white py-12 md:py-10">
        <div class="max-w-7xl mx-auto !px-4 sm:!px-6 lg:!px-8">
          <div
            class="flex flex-col lg:flex-row items-start lg:items-center gap-8 lg:gap-12 mb-12 lg:mb-16"
          >
            <!-- Logo Section -->
            <div
              class="w-full lg:w-1/3 flex justify-center lg:justify-center lg:self-start"
            >
              <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg"
                alt="Site Logo"
                class="w-auto sm:w-48 md:w-52 lg:w-64 h-auto"
              />
            </div>

            <!-- Text Content -->
            <div class="w-full lg:w-2/3">
              <h1
                class="!text-9xl sm:!text-6xl md:text-7xl lg:text-8xl xl:!text-9xl lg:text-left lg:leading-loose title__font-family mb-6 lg:mb-0 p-about__title js-title md:flex md:justify-center lg:justify-start"
              >
                <span>A</span>
                <span>B</span>
                <span>O</span>
                <span>U</span>
                <span>T</span>
              </h1>

              <h2
                class="!text-3xl sm:!text-xl md:!text-2xl lg:!text-3xl !font-bold !pb-2 !mb-4 sm:!mb-6 content__font-family text-center lg:text-left"
              >
                HASHIMA BASEへの想い
              </h2>

              <div
                class="text-[14px] sm:text-base md:text-[16px] lg:text-[20px] !leading-[24px] sm:!leading-[2.2] lg:!leading-[2.5] text-black content__font-family about-content space-y-4 sm:space-y-5 lg:space-y-6"
              >
                <p>
                  40代半ばから夢のハーレーに乗り、仲間とツーリングへいろんな場所に行くようになり、集合場所・お店の駐車場・サービスエリアなど、どこにいても皆でバイクを眺めながらおしゃべりしていることが多く「みんなで集まりワイワイできる場所があるといいな」という思いが日に日に強くなりました。
                  <br />
                  <span
                    >ハーレーと言えばR66やオールドアメリカの雰囲気が良く、ラスベガスに行ったときに、当時はハーレーの食料店がホテルの前にあり、数日の旅行で毎日2回行き、日本には無い解放的な感じや昨日のアメリカ映画に憧れました。
                  </span>
                  <br />
                  <span>
                    しかし岐阜という土地柄、海がなく、自分が憧れている場所は誰かが作ってくれるのを待っていては一生できないのでは？と思い、一念発起して行動に移すことにしました。
                  </span>
                  <br />
                  <span>
                    米軍基地風の秘密基地は男の憧れだそうで、年齢重ねて白髪交じりになったけどみんなでバイク通して交流の場になるといいなと思い、夢や憧れを形にしました。
                  </span>
                  <br />
                  <span>
                    1人の夢から始まったHASHIMA
                    BASEが誰かの夢のヒントや勇気になればいいなと思っています。
                  </span>
                </p>
              </div>

              <!-- Signature Section -->
              <div
                class="flex justify-center md:justify-end items-center gap-10 !mt-6 sm:!mt-8 !mb-4 sm:!mb-6 text-center md:text-right text-black"
              >
                <span class="!text-2xl sm:text-base lg:text-lg !leading-[2]">
                  HASHIMA BASE代表　　</span
                >
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/signature.png"
                  alt="Signature"
                  class="h-8 sm:h-6 md:h-8 lg:h-10"
                />
                <!-- <span class="text-5xl sm:text-3xl lg:text-4xl mt-2 font-medium"
                  >近本智美</span
                > -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pb-12 md:pb-20">
        <div class="max-w-7xl mx-auto !px-4 sm:!px-6 lg:!px-8">
          <div
            class="flex flex-col lg:flex-row items-start lg:items-center gap-8 lg:gap-12 mb-12 lg:mb-16"
          >
            <!-- Logo Section (left column) -->
            <div
              class="w-full lg:w-1/3 flex justify-center lg:justify-center lg:self-start"
            >
              <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg"
                alt="HASHIMA BASE Logo"
                class="w-auto sm:w-48 md:w-52 lg:w-64 h-auto"
              />
            </div>

            <!-- Company Info Section (right column) -->
            <div class="w-full lg:w-2/3 !w-full lg:!w-2/3 pt-7 lg:!pt-18">
              <dl
                class="space-y-4 text-2xl sm:text-lg content__font-family text-black !space-y-6 !text-base sm:!text-lg !text-black"
              >
                <div
                  class="flex justify-between border-b border-black pb-2 !flex !justify-between !border-b !border-black !pb-2"
                >
                  <dt
                    class="text-3xl sm:text-2xl mb-4 font-bold content__font-family !text-3xl sm:!text-2xl !font-bold !mb-4"
                  >
                    会社概要
                  </dt>
                </div>
                <div
                  class="text-2xl lg:text-xl flex border-b border-black pb-2 !flex !border-b !border-black !pb-6 !px-8"
                >
                  <dt class="w-1/4">運営会社</dt>
                  <dd>株式会社BKクローバー</dd>
                </div>

                <div
                  class="text-2xl lg:text-xl flex border-b border-black pb-2 !flex !border-b !border-black !pb-6 !px-8"
                >
                  <dt class="w-1/4">所在地</dt>
                  <dd>〒500-8385 岐阜県岐阜市下奈良3丁目6-6</dd>
                </div>

                <div
                  class="text-2xl lg:text-xl flex border-b border-black pb-2 !flex !border-b !border-black !pb-6 !px-8"
                >
                  <dt class="w-1/4">設立</dt>
                  <dd>2023年00月00日</dd>
                </div>

                <div
                  class="text-2xl lg:text-xl flex border-b border-black pb-2 !flex !border-b !border-black !pb-6 !px-8"
                >
                  <dt class="w-1/4">代表者</dt>
                  <dd>代表取締役 近本智美（施設管理者:近本仁）</dd>
                </div>

                <div
                  class="text-2xl lg:text-xl flex border-b border-black pb-2 !flex !border-b !border-black !pb-6 !px-8"
                >
                  <dt class="w-1/4">電話</dt>
                  <dd>090-4153-3258</dd>
                </div>

                <div
                  class="text-2xl lg:text-xl flex border-b border-black pb-2 !flex !border-b !border-black !flex !pb-6 !px-8"
                >
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
        title="羽島基地"
      ></iframe>

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
          <p class="p-contact__tel">TEL 090-4153-3258</p>
          <p class="p-contact__time">営業時間 8:00〜18:00</p>
          <a class="p-contact__button" href="#">CONTACT</a>
        </div>
      </div>
    </main>

<?php
get_footer();
