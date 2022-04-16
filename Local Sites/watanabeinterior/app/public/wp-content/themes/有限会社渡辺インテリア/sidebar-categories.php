<aside class="archive">
    <h1 class="archive_title">カテゴリ 一覧</h1>
    <ul class="archive_list">
        <?php
        $args = array(
            'title_li' => '', //見出しを削除
        );
        wp_list_categories($args);
        ?>
    </ul>
</aside>