<?php

require __DIR__ . '/header.php';

require __DIR__ . '/data.php';

?>

<article>
    <?php foreach ($teams as $teamName => $teamData): ?>
        <div class="team-div">
            <img src="<?= $teamData['logo'] ?>" alt="The teams official logo" class="team-logo">
            <h3> <?= $teamName ?> </h3>
            League: <?= $teamData['league'] ?> <br>
            City: <?= $teamData['city'] ?> <br>
            UEFA Coefficient Ranking: <?= $teamData['uefa-coefficient-ranking'] ?> <br>
            Group:<?= $teamData['group'] ?> <br>
            <a href="<?= $teamData['url'] ?>">Official Website</a>
        </div>
    <?php endforeach; ?>
</article>

<?php

require __DIR__ . '/footer.php';
