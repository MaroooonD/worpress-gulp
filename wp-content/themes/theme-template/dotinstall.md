# ドットインストールメモ
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>はじめてのWordPress</title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.9.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="header" class="container">
            <h1><a href="">はじめてのWordPress</a></h1>
            <ul class="menu">
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
            </ul>
        </div><!-- /header -->
        <div id="main" class="container">
            <div id="posts">
                <div id="post">
                    <div class="post-header">
                        <h2>
                            <a href="">タイトル</a>
                        </h2>
                        <div class="post-meta">
                            2013年4月3日 【カテゴリ】
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <img src="img/noimage.png" width="100" height="100">
                        </div>
                        <div class="post-body">
                            <p>本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。<p>
                        </div>
                    </div>
                </div><!-- /post -->
            </div><!-- /posts -->
            <div id="sidebar">
                sidebar
            </div><!-- /sidebar -->
        </div><!-- /main -->
        <div id="footer" class="container">
            footer
        </div><!-- /footer -->
    </body>
</html>

## lesson11
sidebarにウィジェットを制作
```
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>はじめてのWordPress</title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.9.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="header" class="container">
            <h1><a href="">はじめてのWordPress</a></h1>
            <ul class="menu">
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
            </ul>
        </div><!-- /header -->
        <div id="main" class="container">
            <div id="posts">
                <div class="post">
                    <div class="post-header">
                        <h2>
                            <a href="">タイトル</a>
                        </h2>
                        <div class="post-meta">
                            2013年4月3日 【カテゴリ】
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <img src="img/noimage.png" width="100" height="100">
                        </div>
                        <div class="post-body">
                            <p>本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。<p>
                        </div>
                    </div>
                </div><!-- /post -->
            </div><!-- /posts -->
            <div id="sidebar">
                <div class="widget">
                    <h3>カテゴリー</h3>
                    <ul>
                        <li><a href="">item</a></li>
                        <li><a href="">item</a></li>
                        <li><a href="">item</a></li>
                    </ul>
                </div>
            </div><!-- /sidebar -->
        </div><!-- /main -->
        <div id="footer" class="container">
            footer
        </div><!-- /footer -->
    </body>
</html>
```

## lesson13
ナビゲーションとフッターの完成
```
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>はじめてのWordPress</title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.9.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="header" class="container">
            <h1><a href="">はじめてのWordPress</a></h1>
            <ul class="menu">
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
            </ul>
        </div><!-- /header -->
        <div id="main" class="container">
            <div id="posts">
                <div class="post">
                    <div class="post-header">
                        <h2>
                            <a href="">タイトル</a>
                        </h2>
                        <div class="post-meta">
                            2013年4月3日 【カテゴリ】
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <img src="img/noimage.png" width="100" height="100">
                        </div>
                        <div class="post-body">
                            <p>本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。本文。<p>
                        </div>
                    </div>
                </div><!-- /post -->
                <div class="navigation">
                    <div class="prev">prev</div>
                    <div class="next">next</div>
                </div>
            </div><!-- /posts -->
            <div id="sidebar">
                <div class="widget">
                    <h3>カテゴリー</h3>
                    <ul>
                        <li><a href="">item</a></li>
                        <li><a href="">item</a></li>
                        <li><a href="">item</a></li>
                    </ul>
                </div>
            </div><!-- /sidebar -->
        </div><!-- /main -->
        <div id="footer" class="container">
            footer
        </div><!-- /footer -->
    </body>
</html>
```

## 今回からwordpressテーマに変換する
- wp-contentの中にフォルダを生成する
- index.html -> index.php
- style.css wordpress codex でstyle.cssに専用cssを入れる(Tagとかはいらない)
- ファイルを分割する
  - header.php
  - footer.php
  - sidebar.php
  - function.php

## lesson15 & lesson16 & lesson17
ファイル分割していこう

- index.php
  - `<?php get_header(); ?>`
  - `<?php get_sideder(); ?>`
  - `<?php get_footer(); ?>`
  - `<?php wp_nav_menu(); ?> -> 管理画面で設定したナビメニューを表示できる`


- header.php
  - `<title><?php wp_title('|'. true. 'right'); bloginfo('name'); ?></title>`
  - `<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">`
  - `<h1><a href="<?php echo home_url('/'); ?>"<?php bloginfo('name'); ?></a></h1>`
  - <?php wp_head(); ?> → head内に書く

- function.php
  - 管理画面からメニューのカスタマイズができる
    - <?php add_theme_support('menus');
  - sidebarをウィジェットに対応させる
    - ```
      <?php register_ sidebar( 
        array(
            'before_widget' => '<div class="widget">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3>',
        )
      ?>
      ```


- sidebar.php
  - <?php dynamic_sidebar(); ?> → function.phpで設定した管理画面からのウィジェットを表示できる

## lesson18
ちょっと上がややこしくなってきたので新規セクションを
postのループを表示させよう

- index.php
```
<?php  
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>

|
|
|


<?php
  endwhile;
else:
?>

<p>記事はありません！</p>


<?php
endif;
?>

```

### post内のテンプレートタグ
- タイトル
```
<h2>
// 個別記事へのリンク
<a href="<?php the_permalink() ?>"

// 記事タイトル
<?php the_title(); ?>

// 日付表示
<?php echo get_the_date(); ?>

// カテゴリ
<?php the_category(', '); ?>

// 本文抜粋を表示
<?php the_excerpt(); ?>

```

## lesson19
アイキャッチ画像を表示させよう

- function.php
<?php
add_theme_support('post-thumnails');
?>

- index.php
```
<?php if (has_post_thumbnail()) : ?>
<?php the_post_thumnail(array(100,100)); ?>
<?php else: ?>
<img src="<php echo get_templete_dictionary_uri(); ?>/img/noimage.png" width="100" height="100">
<?php endif; ?>

```

## lesson20
index.phpを完成させよう



```
<div class="navigation">
  <div class="prev">
    <?php previous_posts_link(); ?>
  </div>
  <div class="next">
    <?php next_posts_link(); ?>
  </div>
</div>
```

※気をつけていただきたいのは、previous_posts_link() は記事のループの外でしか使うことができないので、endwhile でループが終わった後に使うようにしてください。

- footer.php
```
copyright 2012<?php if (date("Y")!=2012) echo date("-Y"); ?> All rights
<?php the_footer(); ?>
</body>
```

## lesson21
single.phpを完成させよう

- single.php
  - ほぼindex.phpと同じなのでコピペ
  - ナビゲーションに関してですが、single.php に関しては「previous_posts_link()」「next_posts_link()」ではなくて「previous_post_link()」「next_post_link()」にして、今度はループの中に入れる必要があるので、それだけ気をつけてください。
  - テンプレート階層という仕組みがあり、アーカイブとかカテゴリーが見つからなければindex.phpを参照するといった仕組みがあるので、無理してcategori.phpとかをつくらなくてもよい

## lesson 22
page.phpを完成させよう

- page.php
  - ほぼindex.php
　- コピペして消すだけ

## lesson23
ショートコードを作ってみよう

- function .php
```
function shortcode tw() {
  return '<a href="htto://twitter.com/hogehoge">@taguchi</a>をフォローしてね＠';
}
add_shortcode('tw','shortcode_tw');
```

[tw]

と打つだけで呼び出すことをできるようになる

---
WordPressの便利なショートコードについては以下のサイトも参考にしてみてください。
http://kachibito.net/wordpress/useful-shortcode.html
