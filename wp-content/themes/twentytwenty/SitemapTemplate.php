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
        <div class="w-full flex flex-col items-center bg-white pb-20 px-10 md:px-16 lg:px-20">
            <ul class="w-full divide-y divide-dotted divide-gray-300">
                <?php
                $pages = get_pages();
                $first = true;
                foreach ($pages as $page) {
                    $borderClass = $first ? 'border-t border-dotted border-gray-300' : '';
                    echo '<li class="flex items-start lg:items-center py-3 px-2 ' . $borderClass . '">
                            <span class="inline-block w-5 h-5 lg:w-3 lg:h-3 border border-gray-400 mr-4 rounded-sm mt-[8px] lg:mt-0 flex-shrink-0"></span>
                            <a href="' . get_permalink($page->ID) . '" class="text-[16px] lg:text-[20px] text-gray-800 uppercase">' . esc_html($page->post_title) . '</a>
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
                            <a href="' . get_permalink($post) . '" class="text-[16px] lg:text-[20px] text-gray-800">' . esc_html($post->post_title) . '</a>
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
            <a class="p-contact__button" href="/pages/contact.html">CONTACT</a>
        </div>
    </div>
</main>

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
        <div class="w-full flex flex-col items-center bg-white pb-20">
            <div class="flex gap-6 mb-20">
                <button
                    class="filter-btn px-8 pt-[2px] !border border-black bg-black text-white text-3xl tracking-widest title__font-family"
                    data-filter="all">
                    ALL
                </button>
                <button
                    class="filter-btn px-4 pt-[2px] !border border-black text-3xl tracking-widest title__font-family"
                    data-filter="event">
                    EVENT
                </button>
                <button
                    class="filter-btn px-5 pt-[2px] !border border-black text-3xl tracking-widest title__font-family"
                    data-filter="news">
                    NEWS
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-[1200px] w-full px-4" id="postGrid">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'category_name' => 'event,news',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        $categories = get_the_category();
                        $show = false;
                        foreach ($categories as $cat) {
                            if (in_array($cat->slug, ['event', 'news'])) {
                                $category_slug = $cat->slug;
                                $category_name = $cat->name;
                                $show = true;
                                break;
                            }
                        }
                        if (!$show) continue;

                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        if (!$image_url) {
                            $image_url = get_template_directory_uri() . '/assets/images/p-plan/blog1.webp';
                        }

                        $post_date = get_the_date('Y.m.d');
                        $title = get_the_title();
                        $permalink = get_permalink();
                ?>
                        <div class="flex flex-col" data-category="<?php echo esc_attr($category_slug); ?>">
                            <a href="<?php echo esc_url($permalink); ?>">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-[200px] object-contain bg-white border border-gray-200" />
                            </a>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="border-2 border-black text-black text-[18px] md:text-xl px-3 pt-1 md:pt-[2px] !leading-[20px] tracking-wider title__font-family"><?php echo esc_html(strtoupper($category_name)); ?></span>
                                <span class="text-[18px] md:text-xl pt-1 md:pt-[2px] text-gray-500 title__font-family"><?php echo esc_html($post_date); ?></span>
                            </div>
                            <a href="<?php echo esc_url($permalink); ?>" class="mt-1 text-4xl md:text-lg font-medium hover:underline block"><?php echo esc_html($title); ?></a>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="flex items-center gap-2 mt-12" id="pagination">
                <?php
                $pagination_links = paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '&lt;',
                    'next_text' => '&gt;',
                    'type' => 'array',
                ));

                if (is_array($pagination_links)) {
                    foreach ($pagination_links as $link) {
                        echo '<div class="w-8 h-8 flex items-center justify-center rounded-full cursor-pointer bg-gray-200 text-black hover:bg-black hover:text-white transition">';
                        echo $link;
                        echo '</div>';
                    }
                }
                ?>
            </div>

    </section>
</main>

<script>
    const filterButtons = document.querySelectorAll(".filter-btn");
    const posts = document.querySelectorAll("#postGrid > div");

    filterButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const filter = btn.getAttribute("data-filter");

            posts.forEach(post => {
                if (filter === "all" || post.dataset.category === filter) {
                    post.style.display = "flex";
                } else {
                    post.style.display = "none";
                }
            });

            filterButtons.forEach(b => b.classList.remove("bg-black", "text-white"));
            btn.classList.add("bg-black", "text-white");
        });
    });
</script>


<?php
get_footer();
