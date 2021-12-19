<?php
require_once('./helpers.php');
require_once('./data.php');


$page_content = include_template('main.php', ['posts' => $posts]);
$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'user_name' => $user_name,
    'title' => 'readme: популярное'
]);

print($layout_content);
