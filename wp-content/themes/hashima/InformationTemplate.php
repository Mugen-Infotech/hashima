<?php

/**
 * Template Name: Information Template
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
        <!-- Blog/Event/News Grid Section -->
        <div class="w-full flex flex-col items-center bg-white pb-20">
            <div class="flex gap-6 mb-20">
                <button
                    class="filter-btn px-8 pt-[2px] !border border-black bg-black text-white text-[24px] tracking-widest title__font-family"
                    data-filter="all">
                    ALL
                </button>
                <button
                    class="filter-btn px-4 pt-[2px] !border border-black bg-white text-black text-[24px] tracking-widest title__font-family"
                    data-filter="event">
                    EVENT
                </button>
                <button
                    class="filter-btn px-5 pt-[2px] !border border-black bg-white text-black text-[24px] tracking-widest title__font-family"
                    data-filter="news">
                    NEWS
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full px-7 md:px-12" id="postGrid">
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
                            $image_url = get_template_directory_uri() . '/assets/images/p-plan/blog1.png';
                        }

                        $post_date = get_the_date('Y.m.d');
                        $title = get_the_title();
                        $permalink = get_permalink();
                ?>

                        <div class="flex flex-col" data-category="<?php echo esc_attr($category_slug); ?>">
                            <a href="<?php echo esc_url($permalink); ?>">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-[200px] md:h-[200px] xl:h-[300px] object-cover bg-white border border-gray-200" />
                            </a>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="border-2 border-black text-black text-[12px] md:text-[14px] xl:text-[16px] px-3 pt-1 md:pt-[2px] !leading-[20px] tracking-wider title__font-family"><?php echo esc_html(strtoupper($category_name)); ?></span>
                                <span class="text-[12px] md:text-[14px] xl:text-[16px] pt-1 md:pt-[2px] text-[#A9A9AA] title__font-family"><?php echo esc_html($post_date); ?></span>
                            </div>
                            <a href="<?php echo esc_url($permalink); ?>" class="mt-6 lg:mt-3 text-[14px] xl:text-[18px] hover:underline block"><?php echo esc_html($title); ?></a>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="flex items-center gap-4 mt-24 text-[16px]" id="pagination">
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
                        echo '<div class="w-16 h-16 flex items-center justify-center rounded-full cursor-pointer bg-gray-200 text-black hover:bg-black hover:text-white transition">';
                        echo $link;
                        echo '</div>';
                    }
                }
                ?>
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

            // Update button states
            filterButtons.forEach(b => {
                b.classList.remove("bg-black", "text-white", "bg-white", "text-black");
                b.classList.add("bg-white", "text-black"); // Reset to default
            });

            btn.classList.remove("bg-white", "text-black");
            btn.classList.add("bg-black", "text-white"); // Active state
        });
    });
</script>


<?php
get_footer();
