<?php
/**
* カスタムメニューの登録
*/
register_nav_menus();
/**
 * サイドバーの登録
 */
register_sidebar(
    array(
        'before_widget' => '<section class="widget">',
        'after_widget' => '</nav></section>',
        'sfter_title' => '</h2><nav>'
    )
    );
