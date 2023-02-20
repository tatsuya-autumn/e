 <section class="p-related">
     <div class="p-related__inner">
         <div class="p-related__wrapper">
             <h2 class="p-related__title">関連記事</h2>
             <div class="cards__related p-blog__list p-pcards">
                 <?php
                    // if (has_category()) {
                    //     $categories = get_the_category();
                    //     $cat_id = array();

                    //     foreach ($categories as $category) {
                    //         $cat_id[] = $category->term_id;
                    //     }
                    // }

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '3',
                        'post__not_in' => array($post->ID),
                        'category__in' => $cat_id,
                        'orderby' => 'rand'
                    );
                    $my_query = new WP_Query($args);
                    ?>

                 <?php if ($my_query->have_posts()) : ?>
                     <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                         <a class="p-pcards__item" href="<?php the_permalink(); ?>">
                             <picture class="p-pcards__img-wrapper">
                                 <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('large');
                                    } else { ?>
                                     <img src="<?php echo esc_url(IMG . 'common/p-more-bg.png'); ?>" alt="<?php the_title(); ?>">
                                 <?php } ?>

                             </picture>
                             <div class="p-pcards__posts">
                                 <span class="p-pcards__label">
                                     <?php
                                        // カテゴリーのデータを取得
                                        $cat = get_the_category();
                                        $cat = $cat[0];

                                        // カテゴリー名（どちらでもok）
                                        echo $cat->name;


                                        ?>
                                 </span>
                                 <time class="p-pcards__time"><?php the_time('Y.m.d'); ?></time>
                             </div>
                             <div class="p-pcards__title"><?php the_title(); ?></div>
                             <div class="p-pcards__text"><?php the_excerpt(); ?></div>
                         </a>

                         <?php endwhile; ?><?php endif; ?>
                         <?php wp_reset_postdata(); ?>


             </div>
         </div>
     </div>
 </section>