<?php get_header(); ?>
<div class="c-loader-bg js-loader-bg">

</div>
<main>
    <div class="l-page__inner">

        <section class="l-page__heading l-page__heading-bgtexture">
            <div class="l-page__heading-inner">

                <h1 class="text-onebyone">
                    <span class="for-accessibility">Contents</span>
                    <span class="text-split-scroll">Contents</span>

                </h1>
            </div>

        </section>


        <section class="p-blog js-appear">
            <div class="p-blog__inner">
                <div class="p-blog__wrapper">
                    <ul class="p-blog__list-category">
                        <li class="p-blog__list-category-item current"><a href="<?php url('/contents'); ?>">新しい順</a></li>
                        <li class="p-blog__list-category-item"><a href="<?php url('/contents/popular'); ?>">人気順</a></li>
                    </ul>
                    <div class="p-blog__list p-pcards">
                        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                <a class="p-pcards__item" href="<?php the_permalink(); ?>">
                                    <picture class="p-pcards__img-wrapper">
                                 <?php if (has_post_thumbnail()) { ?>
    <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
<?php } else { ?>
    <img src="<?php echo esc_url(IMG . 'common/p-more-bg.png'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
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
                        <?php
                            endwhile;
                        endif;
                        ?>

                        <!-- cards-item 最後-->
                    </div>

                    <!-- ここまでがカードのリスト -->

                </div>
            </div>
        </section>

        <?php
        if (function_exists("pagination")) {
            pagination($wp_query->max_num_pages);
        }
        ?>
    </div>
</main>
<?php get_template_part('template/footer', 'more'); ?>
<?php get_template_part('template/footer', 'half'); ?>
<?php get_footer(); ?>