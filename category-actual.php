<section itemprop="articleBody" id="ori-cart" class="ori-cart-section position-relative">
    <div class="container">
        <div class="ori-service-page-service-content">
            <div class="row">

                <div class="col-lg-12 col-md-12 description_category">

                    <h2 itemprop="name" style="display: none;">
                        <?php $title = wp_title('', false, '');
                        echo $title ?>
                    </h2>

                    <?php echo category_description(); ?>

                </div>
                <?php
                // Определение ID категории или slug'а
                $category_id = 7; // Замените на нужный ID категории
                //$category_slug = 'example-category'; // Возможно потребуется использовать slug категории

                // Постраничная разбивка (получаем номер текущей страницы)
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // Создание пользовательского запроса
                $args = array(
                    'cat' => $category_id, // Используйте 'category_name' => $category_slug, если работаете со slug'ом
                    'posts_per_page' => 2, // Количество постов на страницу
                    'paged' => $paged, // Номер текущей страницы
                );

                $query = new WP_Query($args);
                ?>


                <?php
                // Запуск цикла
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        // Ваш шаблон вывода поста
                ?>

                        <div class="col-lg-6 col-md-6">
                            <div class="ori-service-page-service-inner-item">
                                <div class="service-icon">

                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                                </div>
                                <!--
                                <div class="blog-meta text-uppercase">
                                    <a class="blog-cate" href="/aktualno" title="новости по золоту"><i class="fas fa-file"></i> Актуально</a>
                                    <a class="blog-author" href="/" title="скупка золота"><i class="fas fa-user"></i> Gold-RF</a>
                                    <a class="blog-date" href="/" title="скупка золота"><i class="fas fa-calendar-alt"></i> <?php the_date();  ?></a>

                                </div>
                                -->

                                <div class="service-text pera-content">

                                    <h3 class="name_news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>

                                </div>
                            </div>
                        </div>

                    <?php

                    endwhile;

                    // Вывод постраничной навигации
                    $big = 999999999; // Нужно для корректного формирования URL
                    $pagination_args = array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $query->max_num_pages,
                    );

                    ?>
                    <div class="ori-pagination-wrap ul-li">

                        <?php
                        echo paginate_links($pagination_args);
                        ?>

                    </div>
                <?php
                else :
                    echo '<p>Постов не найдено.</p>';
                endif;
                // Сброс запроса
                wp_reset_postdata();
                ?>

            </div>
        </div>


        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </div>
</section>