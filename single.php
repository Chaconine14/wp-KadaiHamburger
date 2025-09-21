<?php get_header(); ?> 
    <!-- まずは投稿があるかチェック -->
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>


        <main class="p-single-visual">

            <picture>

                <?php
                $thumbnail_id = get_post_thumbnail_id( get_the_ID() );// アイキャッチ画像のIDを取得
                $alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );// 代替テキスト（alt属性）を取得
                $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );// アイキャッチ画像のURLを取得（フルサイズで！）
                ?>

                <?php if ( $thumbnail_url ) : ?>
                    <img class="p-single-visual__img" 
                    src="<?php echo esc_url( $thumbnail_url ); ?>" 
                    alt="<?php echo esc_attr( $alt ); ?>">
                <?php else: ?>
                    <img class="p-archive__card-area__img" src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="no imageという文字">
                <?php endif; ?>

            </picture>

            <!-- 投稿タイトルを表示 -->
            <p class="p-single-visual__text font-mplus-700">h1 <?php the_title();?></p>  

        </main>

        <div class="wp-single">
            <?php the_content(); ?>
        </div>




<!-- 
        <div class="p-single__h-area">
                <h2 class="p-single__h-area__h2 font-mplus-700">見出しh2</h2>
                <p class="p-single__h-area__p font-mplus-400">
                    Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                </p>
                <h3 class="p-single__h-area__h3 font-mplus-700">見出しh3</h3>
                <h4 class="p-single__h-area__h4 font-mplus-700">見出しh4</h4>
                <h5 class="p-single__h-area__h5 font-mplus-700">見出しh5</h5>
                <h6 class="p-single__h-area__h6 font-mplus-700">見出しh6</h6>
        </div>

        <div class="p-single__bq-area">
            <blockquote class="p-single__bq-area__bq font-mplus-400">Blockquote
                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                <p class="p-single__bq-area__bq__p">出典元：
                    <a href="#" class="p-single__bq-area__bq__a">○○○○○○○○○○○○</a>
                </p>
            </blockquote>
        </div>

        <div class="p-single__cap-area">
            <img class="p-single__cap-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potato.png" alt="ハンバーガーとポテトフライ">

            <figure class="p-single__cap-area__fig">
                <picture>
                    <img class="p-single__cap-area__fig__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potato-small.png"
                        alt="ハンバーガーとポテトフライの小さい画像">
                </picture>
                <figcaption>
                    <p class="p-single__cap-area__fig__p font-mplus-400">
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります </p>
                </figcaption>
            </figure>

            <figure class="p-single__cap-area__fig">
                <figcaption>
                    <p class="p-single__cap-area__fig__p font-mplus-400">
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります </p>
                </figcaption>
                <picture>
                    <img class="p-single__cap-area__fig__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potato-small.png"
                        alt="ハンバーガーとポテトフライの小さい画像">
                </picture>
            </figure>
        </div>

        <div class="p-single__img-area">

            <picture>
                <img class="p-single__img-area__top" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potato-small.png" alt="ハンバーガーとポテトフライの小さい画像">
            </picture>

            <div class="p-single__img-area__img-wrap">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
                <img class="p-single__img-area__img" src="<?php echo get_template_directory_uri(); ?>/img/ham-and-potatp-repeat.png" alt="ハンバーガーとポテトフライ">
            </div>
        </div>


        <div class="p-single__list-area">
            <div class="p-single__list-area__ol">
                <ol class="font-mplus-400">
                    <div class="p-single__list-area__wrap">
                        <li class="p-single__list-area__li">リストリストリスト</li>
                        <li class="p-single__list-area__li">リストリストリスト</li>
                    </div>
                    <li>
                        <ol class="p-single__list-area__wrap">
                            <li class="p-single__list-area__ol-li">リスト2リスト2リスト2 </li>
                            <li class="p-single__list-area__ol-li">リスト2リスト2リスト2</li>
                        </ol>
                    </li>
                </ol>
                <ol class="font-mplus-400 p-single__list-area__wrap">
                    <li class="p-single__list-area__li">リストリストリスト</li>
                    <li class="p-single__list-area__li">リストリストリスト</li>
                </ol>
            </div>

            <ul class="font-mplus-400">
                <div class="p-single__list-area__wrap">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </div>
                <li>
                    <ul class="p-single__list-area__wrap">
                        <li class="p-single__list-area__ul-li">リスト2リスト2リスト2 </li>
                        <li class="p-single__list-area__ul-li">リスト2リスト2リスト2</li>
                    </ul>
            </ul>
            <ul class="p-single__list-area__wrap font-mplus-400">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
        </div>

        <div class="p-single__code-area">
            <pre class="p-single__code-area__pre">
                <code class="p-single__code-area__code font-mplus-400">
&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;</code>
            </pre>
        </div>

        <div class="p-single__table-area">
            <table class="p-single__table-area__table font-mplus-400">
                <tr>
                    <td class="p-single__table-area__td p-single__table-area__td-left">テーブル </td>
                    <td class="p-single__table-area__td p-single__table-area__td-right">テーブル </td>
                </tr>
                <tr>
                    <td class="p-single__table-area__td p-single__table-area__td-left">テーブル </td>
                    <td class="p-single__table-area__td p-single__table-area__td-right">テーブル </td>
                </tr>
                <tr>
                    <td class="p-single__table-area__td p-single__table-area__td-left">テーブル </td>
                    <td class="p-single__table-area__td p-single__table-area__td-right">テーブル </td>
                </tr>
                <tr>
                    <td class="p-single__table-area__td p-single__table-area__td-left">テーブル </td>
                    <td class="p-single__table-area__td p-single__table-area__td-right">テーブル </td>
                </tr>
                <tr>
                    <td class="p-single__table-area__td p-single__table-area__td-left">テーブル </td>
                    <td class="p-single__table-area__td p-single__table-area__td-right">テーブル </td>
                </tr>
            </table>
        </div>

        <div class="p-single__btn-area">
            <button class="p-single__btn-area__btn font-mplus-700">ボタン</button>
        </div>

        <b class="p-single__b font-mplus-700">boldboldboldboldboldboldbold</b>
 -->
    </div>
    </div>
    </div>
    </div>


    <?php endwhile; ?>

    <?php else: ?>

        <p>記事が見つかりません</p>

    <?php endif; ?>


            



           

<?php get_footer(); ?>