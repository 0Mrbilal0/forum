<?php

include "partials/header.php";
require_once "./data/Data.php";
$id = $posts;
$id = json_decode($id, true);

$title = $id['title'];
$author = $users[$id['user_id']]['username'];
$content = $id['content'];
$date = $id['created_at'];
$comments = $id['comments'];

// var_dump(
//     $title,
//     $author,
//     $content,
//     $date,
//     $comments
// );

include "partials/footer.php";

?>

<article>
    <header>
        <h2><?= $title; ?></h2>
        <p><?= $date; ?></p>
        <p>Publié par <strong><?= $author; ?></strong></p>
    </header>
    <p>
        <?= $content; ?>
    </p>
    <footer>
        <nav>
            <h6>Commentaires</h6>
            <ul>
                <li>Commentaires</li>
            </ul>
        </nav>
    </footer>
</article>