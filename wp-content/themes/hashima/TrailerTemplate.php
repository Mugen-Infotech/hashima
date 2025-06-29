<?php

/**
 * Template Name: Trailer Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<div class="bg-black text-white py-20">
  <div class="max-w-7xl mx-auto px-7 md:px-4">
    <div class="mb-8 border-b pb-2">
      <span class="text-[14px] md:text-[22px] font-bold">セットで借りるとお得！</span>
    </div>
    <div class="flex">
      <div class="text-center">
        <h2
          class="text-[21px] md:text-[57px] lg:text-[58px] xl:text-[62px] mb-4 title__font-family">
          <span>SET RENTAL</span>
          <span
            class="text-[12px] md:text-[21px] lg:text-[32px] xl:text-[36px] font-bold ml-[6px] align-middle content__font-family">レンタルスペース + レンタルキッチントレーラー</span>
        </h2>
      </div>
    </div>
    <div class="w-full flex flex-col lg:flex-row items-center gap-8">
      <div
        class="flex-1/2 flex flex-col lg:flex-row items-center gap-2">
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/setretail1.webp"
          alt="レンタルスペース"
          class="w-full mb-[-8px] md:mb-4" />
        <span class="text-8xl font-bold pr-8 md:pr-8">+</span>
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/setretail2.webp"
          alt="キッチントレーラー"
          class="w-full mb-4 md:mb-4" />
      </div>
      <!-- <div class="flex-1/5 flex flex-col items-start"> -->
      <div class="flex-1/5 flex flex-col items-start lg:items-center">
        <div class="flex flex-col gap-2">
          <!-- <div class="space-y-3 mb-4">
                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[0px] gap-x-[30px] md:gap-x-[34px] lg:gap-x-[40px] xl:gap-x-[61px] 2xl:gap-x-[60px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">1日限定／</span>
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">12,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>

                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[28px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">週末セット（4回）／</span>
                </div>
                <div
                  class="flex ml-[80px] md:ml-[116px] lg:ml-[127px] xl:ml-[175px] 2xl:ml-[174px]">
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">32,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>

                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[27px] gap-x-[8px] md:gap-x-[7px] lg:gap-x-[16px] xl:gap-x-[25px] 2xl:gap-x-[25px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">1ヶ月／</span>
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">50,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>
              </div> -->

          <div class="grid grid-cols-12 justify-center items-center gap-4 max-w-xl mx-auto mt-10">
            <div class="text-left text-[14px] md:text-[18px] xl:text-[28px] mr-1 font-bold content__font-family col-span-4">1日限定／</div>
            <div class="text-right col-span-8 pr-[70px]"><span class="text-[32px] md:text-[40px] xl:text-[52px] title__font-family">12,000</span><span class="text-[16px] md:text-[20px] xl:text-[30px] title__font-family"> YEN</span><span class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 font-normal content__font-family">（税別）</span></div>

            <div class="text-left text-[14px] md:text-[18px] xl:text-[28px] mr-1 font-bold content__font-family col-span-4 whitespace-nowrap">週末セット（4回）／</div>
            <div class="text-right col-span-8"></div>

            <div class="text-left col-span-4"></div>
            <div class="text-right col-span-8 pr-[70px]"><span class="text-[32px] md:text-[40px] xl:text-[52px] title__font-family">32,000</span><span class="text-[16px] md:text-[20px] xl:text-[30px] title__font-family"> YEN</span><span class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 font-normal content__font-family">（税別）</span></div>

            <div class="text-left text-[14px] md:text-[18px] xl:text-[28px] mr-1 font-bold content__font-family col-span-4">1ヶ月／</div>
            <div class="text-right col-span-8 pr-[70px]"><span class="text-[32px] md:text-[40px] xl:text-[52px] title__font-family">50,000</span><span class="text-[16px] md:text-[20px] xl:text-[30px] title__font-family"> YEN</span><span class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 font-normal content__font-family">（税別）</span></div>
          </div>
          <div class="flex items-baseline mt-[-17px]">
            <div class="text-[14px] md:text-[16px] text-white">
              ※2年目以降は60,000円。
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="p-main-visual md:pt-0">
  <div class="p-main-visual__group">
    <img
      class="w-full h-auto block"
      src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer_top.webp"
      width="1326"
      height="920"
      alt="" />
  </div>
</div>
<main class="pt-2">
  <!-- Trailer Area Start -->
  <section class="w-full bg-white">
    <div class="max-w-6xl mx-auto px-7">
      <h2
        class="text-[50px] md:text-[120px] lg:text-[158px] title__font-family leading-none text-center l-main-content__trailer-title-en js-title">
        <div class="flex flex-wrap justify-center tracking-11">
          <span>R</span>
          <span>E</span>
          <span>N</span>
          <span>T</span>
          <span>A</span>
          <span>L</span>
          <span>&nbsp;</span>
          <span>K</span>
          <span>I</span>
          <span>T</span>
          <span>C</span>
          <span>H</span>
          <span>E</span>
          <span>N</span>
        </div>
        <div
          class="flex flex-wrap justify-center md:-mt-[26px] lg:-mt-[32px]">
          <span>T</span>
          <span>R</span>
          <span>A</span>
          <span>I</span>
          <span>L</span>
          <span>E</span>
          <span>R</span>
        </div>
      </h2>
      <p
        class="text-center text-[18px] md:text-[30px] lg:text-[40px] font-bold mb-16">
        レンタルキッチントレーラー
      </p>
      <p
        class="max-w-3xl mx-auto font-normal pb-20 text-[15px] md:text-[16px] lg:text-[20px] leading-[24px] md:leading-[50px] xl:leading-[50px]">
        カフェや飲食店の夢を叶える第一歩に、
        レンタルキッチントレーラーをご利用い ただけます。
        カフェを始めたい方や、週末限定で営業を考えている方など、必要
        な設備が揃った本格仕様ですので、限定カフェ運営、メニューの試験販売など
        にもお使いいただけます。
      </p>
      <p
        class="text-center text-[18px] md:text-[20px] lg:text-[22px] font-bold mb-8">
        こんな方におすすめです!
      </p>
      <div class="flex flex-wrap justify-center gap-4 mb-24">
        <span
          class="flex items-center bg-[#EBECEC] rounded-full px-6 py-5 text-2xl font-medium">
          <span
            class="relative flex items-center justify-center w-8 h-8 rounded-full bg-white mr-3 overflow-visible">
            <i
              class="fa-solid fa-check text-black text-4xl md:text-4xl lg:text-4xl absolute -top-[3px] md:-top-[4px] lg:-top-[5px] 2xl:-top-[10px] left-[3px] 2xl:left-[5px]"></i>
          </span>
          <span class="text-[14px] md:text-[16px] lg:text-[23px]">副業や週末にカフェをはじめたい方</span>
        </span>
        <span
          class="flex items-center bg-[#EBECEC] rounded-full px-6 py-5 text-2xl font-medium">
          <span
            class="relative flex items-center justify-center w-8 h-8 rounded-full bg-white mr-3 overflow-visible">
            <i
              class="fa-solid fa-check text-black text-4xl md:text-4xl lg:text-4xl absolute -top-[3px] md:-top-[4px] lg:-top-[5px] 2xl:-top-[10px] left-[3px] 2xl:left-[5px]"></i>
          </span>
          <span class="text-[14px] md:text-[16px] lg:text-[23px]">HASHIMA BASEイベント開催時に利用したい方</span>
        </span>
        <span
          class="flex items-center bg-[#EBECEC] rounded-full px-6 py-5 text-2xl font-medium">
          <span
            class="relative flex items-center justify-center w-8 h-8 rounded-full bg-white mr-3 overflow-visible">
            <i
              class="fa-solid fa-check text-black text-4xl md:text-4xl lg:text-4xl absolute -top-[3px] md:-top-[4px] lg:-top-[5px] 2xl:-top-[10px] left-[3px] 2xl:left-[5px]"></i>
          </span>
          <span class="text-[14px] md:text-[16px] lg:text-[23px]">飲食店オーナーの方</span>
        </span>
        <span
          class="flex items-center bg-[#EBECEC] rounded-full px-6 py-5 text-2xl font-medium">
          <span
            class="relative flex items-center justify-center w-8 h-8 rounded-full bg-white mr-3 overflow-visible">
            <i
              class="fa-solid fa-check text-black text-4xl md:text-4xl lg:text-4xl absolute -top-[3px] md:-top-[4px] lg:-top-[5px] 2xl:-top-[10px] left-[3px] 2xl:left-[5px]"></i>
          </span>
          <span class="text-[14px] md:text-[16px] lg:text-[23px]">キッチンカー導入検討者</span>
        </span>
        <span
          class="flex items-center font-medium text-[14px] md:text-[16px] lg:text-[23px]">など</span>
      </div>
      <div class="flex justify-center">
        <div class="relative z-20 -mb-[74px]">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg"
            alt="HASHIMA BASE"
            class="object-contain" />
        </div>
      </div>
    </div>

    <div
      class="relative bg-black z-10 w-full flex items-center pt-44 pb-12">
      <div
        class="grid grid-cols-1 lg:grid-cols-12 gap-4 mx-auto px-7 lg:px-0">
        <div class="lg:col-span-6 xl:col-span-7">
          <div class="w-full flex justify-center mb-8 md:mb-0">
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer1.webp"
              alt="Rental Space"
              class="w-full h-auto object-cover max-w-full lg:max-w-full" />
          </div>
        </div>
        <div class="lg:col-span-6 xl:col-span-5">
          <div class="w-full flex flex-col justify-center px-0 lg:px-4 xl:px-8 2xl:px-10">
            <h2
              class="text-white title__font-family text-[42px] md:text-[52px] lg:text-[62px] mb-8 md:mb-8 leading-none">
              <span>RENTAL <br class="line-break-lg" />KITCHEN TRAILER</span>
            </h2>
            <div class="flex items-center mb-2">
              <div class="flex-shrink-0">
                <div
                  class="rounded-full border-2 border-white w-[45px] md:w-[60px] md:h-[60px] h-[45px] flex items-center justify-center">
                  <span
                    class="text-white text-[14px] md:text-[18px] lg:text-[20px] font-normal tracking-wide">貸料</span>
                </div>
              </div>
              <div class="ml-2">
                <p
                  class="text-[14px] md:text-[18px] lg:text-[20px] font-normal text-white mb-1">
                  (光熱費込)
                </p>
              </div>
            </div>
            <h3
              class="text-[20px] sm:text-[25px] md:text-[36px] font-bold mb-4 tracking-tight text-white">
              レンタルキッチントレーラー
            </h3>
            <div class="space-y-3 mb-4">
              <div
                class="flex justify-start items-baseline px-[8px] md:px-[28px] gap-x-[30px] md:gap-x-[34px] lg:gap-x-[40px] xl:gap-x-[61px] 2xl:gap-x-[60px]">
                <span
                  class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">平日／</span>
                <div class="text-right">
                  <span
                    class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">4,000</span>
                  <span
                    class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                  <span
                    class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                </div>
              </div>

              <div
                class="flex justify-start items-baseline px-[8px] md:px-[28px]">
                <span
                  class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">土曜・日曜・祝日／</span>
              </div>
              <div
                class="flex ml-[80px] md:ml-[116px] lg:ml-[127px] xl:ml-[175px] 2xl:ml-[174px]">
                <div class="text-right">
                  <span
                    class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">5,000</span>
                  <span
                    class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                  <span
                    class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                </div>
              </div>

              <div
                class="flex justify-start items-baseline px-[8px] md:px-[27px] gap-x-[8px] md:gap-x-[7px] lg:gap-x-[16px] xl:gap-x-[25px] 2xl:gap-x-[25px]">
                <span
                  class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">1ヶ月／</span>
                <div class="text-right">
                  <span
                    class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">20,000</span>
                  <span
                    class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                  <span
                    class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                </div>
              </div>
            </div>
            <p
              class="text-[13px] md:text-[16px] text-white font-normal leading-[24px]">
              ※その他別途相談 (購入希望の方もご相談ください) <br />
              ※営業許可付キッチントレーラーなので今すぐにでも <br />
              　借りて営業を始められます。
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black text-white py-20">
      <div class="max-w-7xl mx-auto px-7 md:px-4">
        <div class="mb-8 border-b pb-2">
          <span class="text-[14px] md:text-[22px] font-bold">セットで借りるとお得！</span>
        </div>
        <div class="flex">
          <div class="text-center">
            <h2
              class="text-[21px] md:text-[57px] lg:text-[58px] xl:text-[62px] mb-4 title__font-family">
              <span>SET RENTAL</span>
              <span
                class="text-[12px] md:text-[21px] lg:text-[32px] xl:text-[36px] font-bold ml-[6px] align-middle content__font-family">レンタルスペース + レンタルキッチントレーラー</span>
            </h2>
          </div>
        </div>
        <div class="w-full flex flex-col lg:flex-row items-center gap-8">
          <div
            class="flex-1/2 flex flex-col lg:flex-row items-center gap-2">
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/setretail1.webp"
              alt="レンタルスペース"
              class="w-full mb-[-8px] md:mb-4" />
            <span class="text-8xl font-bold pr-8 md:pr-8">+</span>
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/setretail2.webp"
              alt="キッチントレーラー"
              class="w-full mb-4 md:mb-4" />
          </div>
          <!-- <div class="flex-1/5 flex flex-col items-start"> -->
          <div class="flex-1/5 flex flex-col items-start lg:items-center">
            <div class="flex flex-col gap-2">
              <div class="space-y-3 mb-4">
                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[0px] gap-x-[30px] md:gap-x-[34px] lg:gap-x-[40px] xl:gap-x-[61px] 2xl:gap-x-[60px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">1日限定／</span>
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">12,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>

                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[28px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">週末セット（4回）／</span>
                </div>
                <div
                  class="flex ml-[80px] md:ml-[116px] lg:ml-[127px] xl:ml-[175px] 2xl:ml-[174px]">
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">32,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>

                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[27px] gap-x-[8px] md:gap-x-[7px] lg:gap-x-[16px] xl:gap-x-[25px] 2xl:gap-x-[25px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">1ヶ月／</span>
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">50,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>
              </div>

              <!-- <div class="flex items-baseline">
                <span
                  class="text-[14px] md:text-[18px] xl:text-[28px] mr-1 font-bold content__font-family">1日限定／</span>
                <span
                  class="text-[32px] md:text-[40px] xl:text-[52px] title__font-family">12,000</span>
                <span
                  class="text-[16px] md:text-[20px] xl:text-[30px] title__font-family ml-1">YEN</span>
                <span
                  class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 font-normal content__font-family">（税別）</span>
              </div>
              <div class="flex items-baseline">
                <span
                  class="text-[14px] md:text-[18px] xl:text-[28px] mr-4 font-bold content__font-family">週末セット（4回）／</span>
                <span
                  class="text-[40px] md:text-[52px] xl:text-[52px] title__font-family">32,000</span>
                <span class="text-[16px] md:text-[20px] xl:text-[30px] title__font-family ml-1">YEN</span>
                <span
                  class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 font-normal content__font-family">（税別）</span>
              </div>
              <div class="flex items-baseline">
                <span
                  class="text-[14px] md:text-[18px] xl:text-[28px] mr-2 font-bold content__font-family">1ヶ月／</span>
                <span
                  class="text-[32px] md:text-[40px] xl:text-[52px] title__font-family">50,000</span>
                <span
                  class="text-[16px] md:text-[20px] xl:text-[30px] title__font-family ml-1">YEN</span>
                <span
                  class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 font-normal content__font-family">（税別）</span>
              </div> -->
              <div class="flex items-baseline mt-[-17px]">
                <div class="text-[14px] md:text-[16px] text-white">
                  ※2年目以降は60,000円。
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black text-white py-20">
      <div class="max-w-7xl mx-auto px-7 md:px-4">
        <div class="mb-8 border-b pb-2">
          <span class="text-[14px] md:text-[22px] font-bold">セットで借りるとお得！</span>
        </div>
        <div class="flex">
          <div class="text-center">
            <h2
              class="text-[21px] md:text-[57px] lg:text-[58px] xl:text-[62px] mb-4 title__font-family">
              <span>SET RENTAL</span>
              <span
                class="text-[12px] md:text-[21px] lg:text-[32px] xl:text-[36px] font-bold ml-[6px] align-middle content__font-family">レンタルスペース + レンタルキッチントレーラー</span>
            </h2>
          </div>
        </div>
        <div class="w-full flex flex-col lg:flex-row items-center gap-8">
          <div
            class="flex-1/2 flex flex-col lg:flex-row items-center gap-2">
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/setretail1.webp"
              alt="レンタルスペース"
              class="w-full mb-[-8px] md:mb-4" />
            <span class="text-8xl font-bold pr-8 md:pr-8">+</span>
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/setretail2.webp"
              alt="キッチントレーラー"
              class="w-full mb-4 md:mb-4" />
          </div>
          <!-- <div class="flex-1/5 flex flex-col items-start"> -->
          <div class="flex-1/5 flex flex-col items-start lg:items-center">
            <div class="flex flex-col gap-2">
              <!-- <div class="space-y-3 mb-4">
                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[0px] gap-x-[30px] md:gap-x-[34px] lg:gap-x-[40px] xl:gap-x-[61px] 2xl:gap-x-[60px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">1日限定／</span>
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">12,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>

                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[28px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">週末セット（4回）／</span>
                </div>
                <div
                  class="flex ml-[80px] md:ml-[116px] lg:ml-[127px] xl:ml-[175px] 2xl:ml-[174px]">
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">32,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>

                <div
                  class="flex justify-start items-baseline px-[8px] md:px-[27px] gap-x-[8px] md:gap-x-[7px] lg:gap-x-[16px] xl:gap-x-[25px] 2xl:gap-x-[25px]">
                  <span
                    class="text-[14px] md:text-[18px] xl:text-[28px] text-white font-bold whitespace-nowrap">1ヶ月／</span>
                  <div class="text-right">
                    <span
                      class="text-[32px] md:text-[40px] lg:text-[52px] text-white title__font-family">50,000</span>
                    <span
                      class="text-[16px] md:text-[20px] xl:text-[30px] text-white title__font-family">yen</span>
                    <span
                      class="text-[14px] md:text-[16px] xl:text-[18px] ml-1 text-white font-normal">（税別）</span>
                  </div>
                </div>
              </div> -->

              <div class="grid grid-cols-2 gap-4 max-w-xl mx-auto mt-10">
                <div class="border p-4 text-center">1日限定／</div>
                <div class="border p-4 text-center">12,000 YEN（税別）</div>

                <div class="border p-4 text-center">週末セット（4回）／</div>
                <div class="border p-4 text-center"></div>

                <div class="border p-4 text-center"></div>
                <div class="border p-4 text-center">32,000 YEN（税別）</div>

                <div class="border p-4 text-center">1ヶ月／</div>
                <div class="border p-4 text-center">50,000 YEN（税別）</div>
              </div>
              <div class="flex items-baseline mt-[-17px]">
                <div class="text-[14px] md:text-[16px] text-white">
                  ※2年目以降は60,000円。
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-8xl mx-auto bg-black pb-0 py-20">
      <div class="grid grid-cols-5 grid-rows-2 gap-2">
        <div class="col-span-2 row-span-1">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer2.webp"
            alt="Gallery 1"
            class="w-full h-full object-inherit" />
        </div>
        <div class="col-span-2 row-span-1">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer3.webp"
            alt="Gallery 2"
            class="w-full h-full object-inherit" />
        </div>
        <div class="col-span-1 row-span-1">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer4.webp"
            alt="Gallery 3"
            class="w-full h-full object-inherit" />
        </div>
        <div class="col-span-1 row-span-1">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer5.webp"
            alt="Gallery 5"
            class="w-full h-full object-inherit" />
        </div>
        <div class="col-span-2 row-span-1">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer6.webp"
            alt="Gallery 6"
            class="w-full h-full object-inherit" />
        </div>
        <div class="col-span-2 row-span-1">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p-plan/trailer7.webp"
            alt="Gallery 7"
            class="w-full h-full object-inherit" />
        </div>
      </div>
    </div>

    <div class="max-w-[1090px] mx-auto px-7 md:px-4 py-16 !pt-30 pb-40">
      <div class="mb-20">
        <div class="text-4xl md:text-[22px] mb-2 md:mb-6 lg:mb-2 font-bold">
          駐車場
        </div>
        <div
          class="bg-[#EBECEC] px-4 py-4 mb-2 text-2xl md:text-[16px] lg:text-[18px]">
          駐車14台スペースあり<span class="text-2xl md:text-[16px]">（コンテナ利用者共用駐車場）</span>
        </div>
      </div>
      <div>
        <div
          class="font-black border-b border-black text-4xl md:text-[20px] lg:text-[22px] pb-1 mb-8 md:pb-6 lg:pb-1">
          使用についての注意事項
        </div>
        <ul class="space-y-3 text-2xl md:text-[16px] lg:text-[20px]">
          <li class="flex items-start gap-1">
            <div
              class="relative w-[16px] h-[10px] sm:w-4 sm:h-4 md:w-5 md:h-5 lg:w-4 lg:h-4 mt-2 md:mt-2">
              <div
                class="absolute inset-0 border border-black rounded-full"></div>
              <div
                class="absolute top-1 left-1 right-1 md:right-[3px] xl:right-1 bottom-1 border border-black rounded-full"></div>
            </div>
            利用目的と時間の厳守 <br />
            調理・販売目的に限り使用可。利用時間は申込時間内厳守で、準備や片付けも時間に含まれます。
          </li>

          <li class="flex items-start gap-1">
            <div
              class="relative w-[16px] h-[10px] sm:w-4 sm:h-4 md:w-5 md:h-5 lg:w-4 lg:h-4 mt-2 md:mt-2">
              <div
                class="absolute inset-0 border border-black rounded-full"></div>
              <div
                class="absolute top-1 left-1 right-1 md:right-[3px] xl:right-1 bottom-1 border border-black rounded-full"></div>
            </div>
            施設・設備の保全と原状回復 <br />
            利用後は原状回復が必須。破損・汚損・紛失時は賠償。ゴミや残材は持ち帰りが原則です。
          </li>

          <li class="flex items-start gap-1">
            <div
              class="relative w-[16px] h-[10px] sm:w-4 sm:h-4 md:w-5 md:h-5 lg:w-4 lg:h-4 mt-2 md:mt-2">
              <div
                class="absolute inset-0 border border-black rounded-full"></div>
              <div
                class="absolute top-1 left-1 right-1 md:right-[3px] xl:right-1 bottom-1 border border-black rounded-full"></div>
            </div>
            禁止行為と利用停止の条件 <br />
            無断譲渡や危険行為、強い臭いの調理、大音量は禁止。違反時は利用停止や以降の利用不可。
          </li>

          <li class="flex items-start gap-1">
            <div
              class="relative w-[16px] h-[10px] sm:w-4 sm:h-4 md:w-5 md:h-5 lg:w-4 lg:h-4 mt-2 md:mt-2">
              <div
                class="absolute inset-0 border border-black rounded-full"></div>
              <div
                class="absolute top-1 left-1 right-1 md:right-[3px] xl:right-1 bottom-1 border border-black rounded-full"></div>
            </div>
            安全・衛生管理の徹底 <br />
            責任者の常駐が必要。危険物持込不可、ペット入場禁止。防災・防犯にも配慮してください。
          </li>

          <li class="flex items-start gap-1">
            <div
              class="relative w-[16px] h-[10px] sm:w-4 sm:h-4 md:w-5 md:h-5 lg:w-4 lg:h-4 mt-2 md:mt-2">
              <div
                class="absolute inset-0 border border-black rounded-full"></div>
              <div
                class="absolute top-1 left-1 right-1 md:right-[3px] xl:right-1 bottom-1 border border-black rounded-full"></div>
            </div>
            支払・キャンセルについて <br />
            支払は利用後に現金または振込。当日キャンセルは100％のキャンセル料が発生。
            利用目的と時間の厳守
          </li>

          <li class="flex items-start gap-1">
            <div
              class="relative w-[13px] h-[10px] sm:w-4 sm:h-4 md:w-4 md:h-4 mt-2 md:mt-2">
              <div
                class="absolute inset-0 border border-black rounded-full"></div>
              <div
                class="absolute top-1 left-1 right-1 md:right-[3px] xl:right-1 bottom-1 border border-black rounded-full"></div>
            </div>
            <span>
              HASHIMA BASEでの撮影をご希望の方へ<br />
              HASHIMA BASEでは、撮影場所としてスペースの貸し出しを行っております。<br />
              施設全体のご利用が可能で、貸し出し時間は【1時間から】承っております。<br />
              ご希望の方は、お気軽に[<a href="<?php echo home_url('contact') ?>" class="underline text-blue-600 hover:text-blue-800">CONTACT</a>]ページよりお問い合わせください。
            </span>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Trailer Area End -->

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

<?php
get_footer();
