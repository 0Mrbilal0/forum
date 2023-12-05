<article>
    <header>
        <a href="./article.php?id=<?= $id-1; ?>"><h2><?= $title; ?></h2></a>
    </header>
    <p>
        <?= substr($content, 0, 100) . '...'; ?>
    </p>
    <footer>
        <nav>
            <ul>
                <li>Publié par <strong><?= $author; ?></strong></li>
            </ul>
            <ul>
                <li><?= $commentCount; ?> commentaires</li>
            </ul>
        </nav>
    </footer>
</article>