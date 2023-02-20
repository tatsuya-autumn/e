<?php get_header(); ?>
<div class="c-loader-bg js-loader-bg">

</div>
<section class="p-t-hero">
    <div class="p-t-hero-slider-wrapper">
        <div class="swiper js-top-slider">
            <!-- 必要に応じたwrapper -->
            <div class="swiper-wrapper">
                <!-- スライド -->
                <div class="swiper-slide">
                    <picture class="slide-img">
                        <source srcset="<?php echo esc_url(IMG . 'top/main-visual01.png'); ?>" media="(min-width: 767px)" alt="4x4triggers" /><!-- 幅500px以上なら表示 -->

                        <img src="<?php echo esc_url(IMG . 'top/main-sp-01.png'); ?>" alt="4x4triggers">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class="slide-img">
                        <source srcset="<?php echo esc_url(IMG . 'top/main-visual01.png'); ?>" media="(min-width: 767px)" alt="4x4triggers" /><!-- 幅500px以上なら表示 -->

                        <img src="<?php echo esc_url(IMG . 'top/main-sp-01.png'); ?>" alt="4x4triggers">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class="slide-img">
                        <source srcset="<?php echo esc_url(IMG . 'top/main-visual01.png'); ?>" media="(min-width: 767px)" alt="4x4triggers" /><!-- 幅500px以上なら表示 -->

                        <img src="<?php echo esc_url(IMG . 'top/main-sp-01.png'); ?>" alt="4x4triggers">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <!-- <a href="#about"></a> -->

    <div class="p-t-hero__body">
        <h2 class="text-onebyone p-t-hero__title">
            <span class="for-accessibility">乗るの、その先へ</span>
            <span class="text-split">乗るの、その先へ</span>
        </h2>


        <div class="p-t-hero__text js-mv_title-lead">
            <span>街乗りだけじゃない。</span><span>キャンプやオフロードもフィールドだ。</span>
            <span>四駆はもっと楽しくなる。</span>
        </div>


        <p class="p-t-hero__scroll js-header-scroll">scroll</p>
    </div>
</section>
<div class="p-backtext">
    <picture>
        <img src="<?php echo esc_url(IMG . 'top/chance.svg'); ?>" alt="Chance To Enjoy 4WD">
    </picture>
</div>

<seciton class="p-t-about cover-slide hover-darken" id="about">
    <div class="p-t-about__inner">
        <h2 class="p-t-about__title p-top__title js-heading">
            About
        </h2>

        <p class="p-t-about__text js-heading">4×4TRIGGERSは四駆好きが集まる会社です。<br>
            社員全員が四駆やキャンプ好きです。<br>
            「カスタムやアクティビティを通して、もっと四駆を楽しむ機会を生み出したい！」そんな思いを胸に、ユーザー目線で欲しいパーツを製造、販売しています。</p>
        <a href="<?php url('/about/'); ?>" class="p-t-about__button js-heading">詳しく見る</a>
    </div>
</seciton>

<seciton class="p-t-service">
    <div class="p-t-service__inner">
        <div class="p-t-service__heading js-heading">
            <h2 class="p-t-service__title p-top__title">Service</h2>
            <p class="p-t-service__text ">4×4TRIGGERSでは、オリジナルの四駆のカスタムパーツと四駆でアウトドアを主体とした製品を販売しています。</p>
        </div>
        <div class="p-t-service__group">
            <!-- <div class="p-t-service__group-item">

            </div> -->
            <div class="p-t-service__group-item">
                <figure class="p-t-service__group-item-img-wrapper cover-slide hover-darken">
                    <img class="p-t-service__group-item-img img-zoom" alt="01 Parts Sales" src="<?php echo esc_url(IMG . 'top/service01.png'); ?>">
                </figure>
                <div class="p-t-service__group-item-body fadeIn">
                    <h3 class="p-t-service__group-item-title">
                        <p class="p-t-service__group-item-number">01<span>Parts Sales</span></p>
                        パーツ販売
                    </h3>
                    <p class="p-t-service__group-item-text">
                        4×4TRIGGERSでは、made inJapanのオリジナルパーツ販売から大手四駆パーツメーカーまで、四駆のカスタムパーツと四駆でアウトドアを主体とした製品を販売しています。
                    </p>
                </div>

            </div>
            <div class="p-t-service__group-item">
                <figure class="p-t-service__group-item-img-wrapper cover-slide hover-darken">
                    <img class="p-t-service__group-item-img img-zoom" alt="車両整備" src="<?php echo esc_url(IMG . 'top/service02.png'); ?>">
                </figure>
                <div class="p-t-service__group-item-body fadeInRight fadeIn">
                    <h3 class="p-t-service__group-item-title">
                        <p class="p-t-service__group-item-number">02<span>Vehicle Maintenance</span></p>
                        車両整備
                    </h3>
                    <p class="p-t-service__group-item-text">
                        4×4TRIGGERSでは四駆の経験豊富なプロの整備士が<br>お客様のお車をカスタム＆整備をさせて頂きます。
                    </p>
                </div>

            </div>
        </div>
        <a href="<?php url('/service/'); ?>" class="p-t-service__button c-button--black">詳しく見る</a>
    </div>
</seciton>
<section class="p-visual cover-slide hover-darken"></section>
<!-- 記事のループ処理開始 -->

<section class="p-t-content">
    <div class="p-t-content__inner">
        <div class="js-heading">
            <h2 class="p-t-content__title p-top__title">Contents</h2>
            <p class="p-t-content__text">4×4TRIGGERSは四駆のカスタムやキャンプなどの情報を発信しています。「パーツの取り付け方法」や「四駆キャンプのおすすめギア」などが気になる方はこちらへ</p>
        </div>
        <div class="p-t-contents-group">
            <section class="p-t-contents-group-left">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'offset' => 0,
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>

                    <div class="p-cards p-t-content__item-wrapper">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>" class="p-t-contents-group-left__item" style="width:100%;">
                                <picture class="p-card__img-wrapper cover-slide hover-darken">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                    <?php } else { ?>
                                        <img src="<?php echo esc_url(IMG . 'top/content01.png'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                    <?php } ?>
                                </picture>
                                <div class="p-card__body">
                                    <div class="p-card-list__date">
                                        <div class="p-card-list-release__date">

                                            <p class="p-card-list__category">
                                                <?php
                                                // カテゴリーのデータを取得
                                                $cat = get_the_category();
                                                $cat = $cat[0];

                                                // カテゴリー名（どちらでもok）
                                                echo $cat->name;


                                                ?>
                                            </p><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                        </div>

                                    </div>
                                    <h3 class="p-card-list__title"><?php the_title(); ?></h3>
                                    <p class="p-card-list__text">
                                        <?php
                                        if (mb_strlen($post->post_content, 'UTF-8') > 63) {
                                            $content = mb_substr(strip_tags($post->post_content), 0, 63, 'UTF-8');
                                            echo $content . '…';
                                        } else {
                                            echo strip_tags($post->post_content);
                                        }
                                        ?></p>
                                </div>
                            </a>

                        <?php endwhile; ?>

                    </div>
                <?php else : ?>
                    <p>まだ投稿がありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </section>


            <div class="p-t-contents-group-right p-card-list__item-wrapper">
                <div class="p-t-contents-group-right-inner">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'offset' => 1,
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>

                        <div>

                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <!-- ▽ ループ開始 ▽ -->


                                <a href="<?php echo get_permalink(); ?>" class="p-card-list__item">
                                    <picture class="p-card-list__item-img cover-slide hover-darken">

                                        <?php if (has_post_thumbnail()) { ?>
                                            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                        <?php } else { ?>
                                            <img src="<?php echo esc_url(IMG . 'top/content01.png'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                        <?php } ?>
                                    </picture>
                                    <div class="p-card-list__body">

                                        <div class="p-card-list__date">
                                            <div class="p-card-list-release__date">
                                                <p class="p-card-list__category">
                                                    <?php
                                                    // カテゴリーのデータを取得
                                                    $cat = get_the_category();
                                                    $cat = $cat[0];

                                                    // カテゴリー名（どちらでもok）
                                                    echo $cat->name;


                                                    ?>
                                                </p>
                                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                            </div>

                                        </div>
                                        <h3 class="p-card-list__title"><?php the_title(); ?></h3>
                                        <p class="p-card-list__text">
                                            <?php
                                            if (mb_strlen($post->post_content, 'UTF-8') > 63) {
                                                $content = mb_substr(strip_tags($post->post_content), 0, 63, 'UTF-8');
                                                echo $content . '…';
                                            } else {
                                                echo strip_tags($post->post_content);
                                            }
                                            ?></p>

                                    </div>
                                </a>

                                <!-- △ ループ終了 △ -->


                            <?php endwhile; ?>

                        </div>
                    <?php else : ?>
                        <p>まだ投稿がありません。</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <a href="<?php url('/content/'); ?>" class="p-t-content__button c-button--black">詳しく見る</a>
            </div>
        </div>


    </div>
</section>
<section class="p-t-sns" id="sns">
    <div class="p-t-sns__inner">
        <div class="js-heading">
            <h2 class="p-t-sns__title p-top__title">SNS・Youtube</h2>
            <div class="p-t-sns-top">
                <p class="p-t-sns-top__text">4×4TRIGGERSでは、社員がYouTubeやInstagramで四駆の情報や魅力をお届け中。カスタムや四駆で遊ぶ楽しさが詰まっています。</p>
                <div class="p-t-sns-top__button-inner">
                    <a href="https://www.instagram.com/will.compass/" class="p-t-sns-top__button" target="_blank" rel="noopener noreferrer">
                        <figure><img src="<?php echo esc_url(IMG . 'top/insta-icon.png'); ?>" alt="instagram"></figure>
                    </a>
                    <a href="https://www.youtube.com/@papatsume" class="p-t-sns-top__button" target="_blank" rel="noopener noreferrer">
                        <figure><img src="<?php echo esc_url(IMG . 'top/YouTube-icon.png'); ?>" alt="youtube"></figure>
                    </a>
                </div>
            </div>
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>

        </div>

    </div>
</section>

<section class="p-t-news">
    <div class="p-t-news__inner">
        <div class="js-heading">
            <h2 class="p-t-news__title p-top__title">News</h2>
            <p class="p-t-news__text">4x4 TRIGGERSからのお知らせ、ニュースを配信します。弊社最新情報を知りたい方はこちらへ</p>
        </div>
        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
        ];
        $my_query = new WP_Query($args); ?>

        <?php if ($my_query->have_posts()) : // 投稿がある場合 
        ?>

            <div class="p-cards p-t-content__item-wrapper">

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="p-cards__item p-card">
                        <picture class="p-card__img-wrapper cover-slide hover-darken">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                            <?php } else { ?>
                                <img src="<?php echo esc_url(IMG . 'top/content01.png'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php } ?>
                        </picture>
                        <div class="p-card__body">
                            <div class="p-card__date">
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </div>
                            <p class="p-card__title"><?php the_title(); ?></p>
                        </div>
                    </a>

                <?php endwhile; ?>

            </div>

        <?php else : // 投稿がない場合
        ?>

            <p>まだ投稿がありません。</p>

        <?php endif;
        wp_reset_postdata(); ?>

        <a href="<?php url('/news/'); ?>" class="p-t-news__button c-button--black">詳しく見る</a>
    </div>
</section>

<section class="p-top-check">
    <div class="p-top-check__inner l-inner">
        <h2 class="p-top-check__heading c-heading"><span>＼</span>その他のページもチェック<span>／</span></h2>
        <div class="p-top-check__content">
            <div class="p-top-check__content-item">
                <figure>
                    <img src="<?php echo esc_url(IMG . 'top/check-icon01.png'); ?>" alt="">
                </figure>
                <p>施工の流れ</p>
            </div>
            <div class="p-top-check__content-item">
                <figure>
                    <img src="<?php echo esc_url(IMG . 'top/check-icon02.png'); ?>" alt="">
                </figure>
                <p>会社概要</p>
            </div>
            <div class="p-top-check__content-item">
                <figure>
                    <img src="<?php echo esc_url(IMG . 'top/check-icon03.png'); ?>" alt="">
                </figure>
                <p>代表挨拶</p>
            </div>
            <div class="p-top-check__content-item">
                <figure>
                    <img src="<?php echo esc_url(IMG . 'top/check-icon04.png'); ?>" alt="">
                </figure>
                <p>アクセス</p>
            </div>
        </div>
    </div>
</section>
<section class="p-top-faq">
    <div class="p-top-faq__inner l-inner">
        <h2 class="p-top-faq__heading c-heading" data-number="Q&A">よくあるご質問</h2>
        <dl class="p-top-faq__content">
            <dt class="p-top-faq__row p-top-faq__row--question">
                <span class="p-top-faq__icon p-top-faq__icon--question">Q</span>
                <span class="p-top-faq__question-text">リフォームに興味はあるのですが、どのような家にしたいかまだわかりません。そのような場合でも大丈夫ですか？</span>
            </dt>
            <dd class="p-top-faq__row p-top-faq__row--answer">
                <span class="p-top-faq__icon p-top-faq__icon--answer">A</span>
                <div class="p-top-faq__answer-body">
                    <p class="p-top-faq__answer-text">
                        もちろん大丈夫です。１からお客様の状況をお伺いし、最適なご提案を行いますので、お安心ください。
                    </p>
                </div>
                <!-- /.p-top-faq__answer-body -->
            </dd>
        </dl>
        <dl class="p-top-faq__content">
            <dt class="p-top-faq__row p-top-faq__row--question">
                <span class="p-top-faq__icon p-top-faq__icon--question">Q</span>
                <span class="p-top-faq__question-text p-top-faq__contents-text">本当にお見積りや相談は無料なのですか？</span>
            </dt>
            <dd class="p-top-faq__row p-top-faq__row--answer">
                <span class="p-top-faq__icon p-top-faq__icon--answer">A</span>
                <div class="p-top-faq__answer-body">
                    <p class="p-top-faq__answer-text p-top-faq__contents-text">
                        はい、無料です。追加費用もいただきません。お見積りにも、今後かかる費用等は詳しく明記をさせていただきますので、ご安心ください。
                    </p>
                </div>
                <!-- /.p-top-faq__answer-body -->
            </dd>
        </dl>
        <dl class="p-top-faq__content">
            <dt class="p-top-faq__row p-top-faq__row--question">
                <span class="p-top-faq__icon p-top-faq__icon--question">Q</span>
                <span class="p-top-faq__question-text">補助金を活用してリフォームをすることは可能でしょうか？また申請の代行なども行っていますか？</span>
            </dt>
            <dd class="p-top-faq__row p-top-faq__row--answer">
                <span class="p-top-faq__icon p-top-faq__icon--answer">A</span>
                <div class="p-top-faq__answer-body">
                    <p class="p-top-faq__answer-text">
                        可能です。ですが補助金にもいろいろな種類がありますので、まずは無料相談でお気軽にご相談ください。
                    </p>
                </div>
                <!-- /.p-top-faq__answer-body -->
            </dd>
        </dl>
    </div>
</section>
<?php get_template_part('template/footer-talk', 'talk'); ?>

<?php get_footer(); ?>