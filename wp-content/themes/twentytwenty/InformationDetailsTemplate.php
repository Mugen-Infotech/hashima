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
                class="text-[50px] md:text-[80px] lg:text-[130px] justify-center mb-2 leading-none l-main-content__space-title-en js-title">
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
        <!-- Blog/Event/News Details Section -->
        <!-- <div class="flex flex-col items-center w-full bg-white pb-24">
            <div class="mb-20 md:mb-20">
                <span
                    class="px-4 pt-[2px] border border-black bg-white text-black tracking-wider text-3xl title__font-family">EVENT</span>
            </div>
            <div class="w-full flex justify-center mb-6 md:mb-8">
                <img
                    src="/assets/images/p-plan/blog2.webp"
                    alt="Renewal OPEN!"
                    class="w-full max-w-[95vw] md:max-w-[880px] h-auto md:h-[550px] object-cover border border-gray-200 bg-white" />
            </div>
            <div class="w-full max-w-[95vw] md:max-w-[880px] px-2">
                <span
                    class="text-3xl md:text-xl font-medium text-gray-400 block mb-2 title__font-family">2025.04.00</span>
                <h1
                    class="text-5xl md:text-3xl font-medium mb-4 md:mb-8 content__font-family">
                    Renewal OPEN！
                </h1>
                <p
                    class="text-xl md:text-xl font-medium leading-relaxed text-black mb-32 md:mb-28">
                    コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。
                </p>
                <div class="flex justify-center">
                    <a
                        href="/pages/information.html"
                        class="relative flex items-center justify-center px-6 md:px-12 py-4 md:py-6 !border border-black rounded-full bg-white text-black font-medium text-3xl md:text-xl tracking-wide hover:bg-black hover:text-white transition-all duration-200 min-w-[272px] min-h[100px]">
                        一覧に戻る
                        <span
                            class="absolute right-6 top-13 -translate-y-1/2 text-3xl md:text-xl">&#9654;</span>
                    </a>
                </div>
            </div>
        </div> -->

        <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="flex flex-col items-center w-full bg-white pb-24">
            <div class="mb-20 md:mb-20">
                <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        $cat_name = strtoupper($categories[0]->name);
                    ?>
                <span
                    class="px-4 pt-[2px] border border-black bg-white text-black tracking-wider text-3xl title__font-family"><?php echo esc_html($cat_name); ?></span>
                    <?php endif; ?>
            </div>
            <div class="w-full flex justify-center mb-6 md:mb-8">
                <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'w-full max-w-[95vw] md:max-w-[880px] h-auto md:h-[550px] object-cover border border-gray-200 bg-white']); ?>
                    <?php else : ?>
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/p-plan/blog1.webp"
                    alt="Renewal OPEN!"
                    class="w-full max-w-[95vw] md:max-w-[880px] h-auto md:h-[550px] object-cover border border-gray-200 bg-white" />
                <?php endif; ?>
            </div>
            <div class="w-full max-w-[95vw] md:max-w-[880px] px-2">
                <span
                    class="text-3xl md:text-xl font-medium text-gray-400 block mb-2 title__font-family"><?php echo get_the_date('Y.m.d'); ?></span>
                <h1
                    class="text-5xl md:text-3xl font-medium mb-4 md:mb-8 content__font-family">
                    <?php the_title(); ?>
                </h1>
                <div
                    class="text-xl md:text-xl font-medium leading-relaxed text-black mb-32 md:mb-28">
                    <?php the_content(); ?>
                </div>
                <div class="flex justify-center">
                    <a
                        href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                        class="relative flex items-center justify-center px-6 md:px-12 py-4 md:py-6 !border border-black rounded-full bg-white text-black font-medium text-3xl md:text-xl tracking-wide hover:bg-black hover:text-white transition-all duration-200 min-w-[272px] min-h[100px]">
                        一覧に戻る
                        <span
                            class="absolute right-6 top-13 -translate-y-1/2 text-3xl md:text-xl">&#9654;</span>
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?> -->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="flex flex-col items-center w-full bg-white pb-24">
                <!-- Category -->
                <div class="mb-20 md:mb-20">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        $cat_name = strtoupper($categories[0]->name);
                    ?>
                        <span class="px-4 pt-[2px] border border-black bg-white text-black tracking-wider text-3xl title__font-family"><?php echo esc_html($cat_name); ?></span>
                    <?php endif; ?>
                </div>

                <!-- Featured Image -->
                <div class="w-full flex justify-center mb-6 md:mb-8">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'w-full max-w-[95vw] md:max-w-[880px] h-auto md:h-[550px] object-cover border border-gray-200 bg-white']); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-plan/blog1.webp" alt="Default" class="w-full max-w-[95vw] md:max-w-[880px] h-auto md:h-[550px] object-cover border border-gray-200 bg-white" />
                    <?php endif; ?>
                </div>

                <!-- Date, Title, Content -->
                <div class="w-full max-w-[95vw] md:max-w-[880px] px-2">
                    <span class="text-3xl md:text-xl font-medium text-gray-400 block mb-2 title__font-family"><?php echo get_the_date('Y.m.d'); ?></span>
                    <h1 class="text-5xl md:text-3xl font-medium mb-4 md:mb-8 content__font-family"><?php the_title(); ?></h1>
                    <div class="text-xl md:text-xl font-medium leading-relaxed text-black mb-32 md:mb-28">
                        <?php the_content(); ?>
                    </div>

                    <!-- Back Button -->
                    <div class="flex justify-center">
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="relative flex items-center justify-center px-6 md:px-12 py-4 md:py-6 !border border-black rounded-full bg-white text-black font-medium text-3xl md:text-xl tracking-wide hover:bg-black hover:text-white transition-all duration-200 min-w-[272px]">
                            一覧に戻る
                            <span class="absolute right-6 top-13 -translate-y-1/2 text-3xl md:text-xl">&#9654;</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
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
            <a class="p-contact__button" href="#">CONTACT</a>
        </div>
    </div>
</main>


<?php
get_footer();
