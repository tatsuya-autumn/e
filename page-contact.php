<?php get_header(); ?>
<div class="c-loader-bg js-loader-bg">

</div>
<section class="l-page__heading">
        <div class="l-page__heading-inner">
                <h1 class="text-onebyone">
                        <span class="for-accessibility">Contact</span>
                        <span class="text-split">Contact</span>
                        <p><?php the_title(); ?></p>
                </h1>

        </div>

</section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="p-pcontact">

                        <div class="p-pcontact__inner">
                                <div class="p-contact-top">
                                        <a href="https://lin.ee/5ddZfLl" target="_blank" rel="noopener noreferrer" class="p-contact-top__img">
                                                <div>
                                                        <img src="<?php echo esc_url(IMG . 'top/footer-line.png'); ?>" alt="LINE">
                                                </div>
                                        </a>
                                        <div class="p-contact-top__body">
                                                お問い合わせはLINEでも受け付けております。<br>
                                                左のLINEアイコンから友だち登録を行い、メッセージをお送りください。
                                        </div>
                                </div>
                                <?php the_content(); ?>
                        </div>
                </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>