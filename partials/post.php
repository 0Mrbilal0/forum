<article>
    <header>
        <h2><?= $title; ?></h2>
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