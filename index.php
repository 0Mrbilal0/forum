<?php include 'partials/header.php'; 

$data = file_get_contents('data.json'); // Fetch du fichier JSON
$data = json_decode($data, true); // Convertion du JSON en tableau associatif

$users = $data['users']; // Assignation des données "users"
$posts = $data['posts']; // Assignation des données "posts"

// Boucle sur les posts
foreach ($posts as $item) {
    // Assignation des variables
    $title = $item['title'];
    $content = $item['content'];
    $author = $users[$item['user_id']]['username'];
    $commentCount = count($item['comments']);

    // Inclusion du template
    include 'partials/post.php';
    echo '<hr/>';
}

include 'partials/footer.php'; ?>