<?php

/**
 * Template Name: Information Details Template
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
                class="text-[50px] md:text-[80px] lg:text-[92px] justify-center mb-2 leading-none l-main-content__space-title-en js-title">
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
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="flex flex-col items-center w-full bg-white pb-24">
            <div class="mb-20 md:mb-20">
                <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            $cat_name = strtoupper($categories[0]->name);
                        ?>
                <span
                    class="px-4 pt-[2px] border border-black bg-white text-black tracking-wider text-[24px] title__font-family"><?php echo esc_html($cat_name); ?></span>
                    <?php endif; ?>
            </div>
            <div
                class="w-full flex justify-center mb-6 md:mb-8 px-0 md:px-4 lg:px-0">
                <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'w-full max-w-[95vw] md:max-w-[980px] h-auto md:h-[550px] object-cover border border-gray-200 bg-white']); ?>
                <?php else : ?>
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/p-plan/blog2.webp"
                    alt="Default"
                    class="w-full max-w-[95vw] md:max-w-[980px] h-auto md:h-[550px] object-cover border border-gray-200 bg-white" />
                    <?php endif; ?>
            </div>
            <div
                class="w-full max-w-[95vw] md:max-w-[980px] px-0 md:px-4 lg:px-0">
                <span
                    class="text-[16px] text-[#A9A9AA] block mb-2 title__font-family"><?php echo get_the_date('Y.m.d'); ?></span>
                <h1
                    class="text-[30px] font-medium mb-4 md:mb-8 content__font-family">
                    <?php the_title(); ?>
                </h1>
                <div
                    class="text-xl md:text-[18px] leading-[32px] text-black mb-32 md:mb-36">
                    <?php the_content(); ?>
                </div>
                <div class="flex justify-center">
                    <a
                        href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                        class="relative flex items-center justify-center px-6 md:px-12 2xl:px-0 py-4 md:py-6 !border border-black rounded-full bg-white text-black font-medium text-[20px] tracking-wide hover:bg-black hover:text-white transition-all duration-200 min-w-[230px] w-[230px] xl:min-w-[250px] xl:w-[250px] min-h[100px]">
                        一覧に戻る
                        <span
                            class="absolute right-[20px] top-[40px] md:top-[45px] lg:top-[50px] xl:top-[54px] 2xl:top-[62px] -translate-y-1/2 text-[20px]">&#9654;</span>
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile;
        endif; ?>
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
