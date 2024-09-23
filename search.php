<?php get_header(); ?>

<?php
get_template_part('tp-breadcrumbs');
?>





<section id="ori-cart" class="ori-cart-section position-relative">
    <div class="container">
        <div class="ori-single-comment-form pera-content">



            <?php

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $search_query = get_search_query();

            $args = array(
                'post_type' => 'post',
                /* 'posts_per_page' => 5, */
                'paged' => $paged,
                's' => $search_query
            );

            // Создает новый объект WP_Query с заданными параметрами
            $query = new WP_Query($args);


            ?>

            <div class="search-results">
                <!-- <h1>Результаты поиска для: <?php echo esc_html($search_query); ?></h1> -->

                <?php
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $title = get_the_title();
                        $excerpt = get_the_excerpt();

                        // Подсвечиваем совпадения в заголовке и отрывке
                        $title_highlighted = preg_replace('/(' . preg_quote($search_query, '/') . ')/iu', '<span class="highlight">$1</span>', $title);
                        $excerpt_highlighted = preg_replace('/(' . preg_quote($search_query, '/') . ')/iu', '<span class="highlight">$1</span>', $excerpt);
                ?>
                        <div class="search-result-item">
                            <h2><a href="<?php the_permalink(); ?>"><?php echo $title_highlighted; ?></a></h2>
                            <p><?php echo $excerpt_highlighted; ?></p>
                        </div>
                <?php
                    endwhile;

                    // Вывод постраничной навигации
                    echo '<div class="pagination">';
                    echo paginate_links(array(
                        'total' => $query->max_num_pages,
                        'current' => $paged,
                        'format' => '?paged=%#%',
                        'show_all' => false,
                        'end_size' => 1,
                        'mid_size' => 2,
                        'prev_next' => true,
                        'prev_text' => __('Предыдущая'),
                        'next_text' => __('Следующая'),
                        'type' => 'plain',
                    ));
                    echo '</div>';

                else :
                    // Сообщение об отсутствии результатов
                    echo '<p>Извините, ничего не найдено.</p>';
                endif;

                // Сбрасываем глобальную переменную $post после кастомного запроса WP_Query
                wp_reset_postdata();

                ?>

            </div>
        </div>
</section>



<style>
    /* Стиль для подсветки совпадений */
    .highlight {
        background-color: #535353;
        margin-left: 0;
        padding: 0 7px;
        border-radius: 2px;
    }

    /* Стили для постраничной навигации */
    .pagination {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .pagination a,
    .pagination span {
        margin: 0 5px;
        padding: 8px 12px;
        background: #f4f4f4;
        color: #000;
        border-radius: 4px;
        text-decoration: none;
    }

    .pagination .current {
        font-weight: bold;
        background: #333;
        color: #fff;
    }

    .search-result-item {

        margin-bottom: 35px;
    }
</style>




<?php get_footer(); ?>