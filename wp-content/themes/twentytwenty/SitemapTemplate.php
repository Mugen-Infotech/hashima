<?php

/**
 * Template Name: Sitemap Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<main class="l-main-content !pt-10">
    <section class="flex flex-col items-center w-full py-8 md:py-16 bg-white">
        <div class="w-full px-4 md:px-0 max-w-[980px] pb-20">
            <h2
                class="text-[50px] md:text-[80px] lg:text-[102px] justify-center mb-2 leading-none l-main-content__space-title-en js-title">
                <span>S</span>
                <span>I</span>
                <span>T</span>
                <span>E</span>
                <span>M</span>
                <span>A</span>
                <span>P</span>
            </h2>
        </div>
        <div class="w-full flex flex-col items-center bg-white pb-20 px-10 md:px-16 lg:px-[80px] xl:px-[100px]">
            <ul class="w-full divide-y divide-dotted divide-gray-300">
                <?php
                $pages = get_pages();
                $first = true;
                foreach ($pages as $page) {
                    if (strtoupper($page->post_title) === 'CONTACT DETAILS') {
                        continue;
                    }
                    $borderClass = $first ? 'border-t border-dotted border-gray-300' : '';
                    echo '<li class="flex items-start lg:items-center py-3 px-2 ' . $borderClass . '">
                            <span class="inline-block w-5 h-5 lg:w-3 lg:h-3 border border-gray-400 mr-4 rounded-sm mt-[8px] lg:mt-0 flex-shrink-0"></span>
                            <a href="' . get_permalink($page->ID) . '" class="text-[16px] text-gray-800 uppercase">' . esc_html($page->post_title) . '</a>
                        </li>';
                        $first = false;
                }
                ?>
            </ul>

            <ul class="w-full divide-y divide-dotted divide-gray-300">
                <?php
                $posts = get_posts(['numberposts' => -1]);
                foreach ($posts as $post) {
                    echo '<li class="flex items-start lg:items-center py-3 px-2">
                            <span class="inline-block w-5 h-5 lg:w-3 lg:h-3 border border-gray-400 mr-4 rounded-sm mt-[8px] lg:mt-0 flex-shrink-0"></span>
                            <a href="' . get_permalink($post) . '" class="text-[16px] text-gray-800">' . esc_html($post->post_title) . '</a>
                        </li>';
                }
                ?>
            </ul>
        </div>
    </section>
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
            <a class="p-contact__button" href="<?php echo home_url('contact') ?>">CONTACT</a>
        </div>
    </div>
</main>

<?php
get_footer();
