<?php
include 'partials/header.php';
require_once './data/Data.php';

// Boucle sur les posts
foreach ($posts as $item) {
    // Assignation des variables
    $id = $item['id'];
    $title = $item['title'];
    $content = $item['content'];
    $author = $users[$item['user_id']]['username'];
    $commentCount = count($item['comments']);

    // Inclusion du template
    include 'partials/post.php';
    echo '<hr/>';
}

include 'partials/footer.php'; ?>