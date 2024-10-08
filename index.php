<?php

require __DIR__ . "/header.php";

require __DIR__ . "/data.php";

?>

<article class="some-teams-article">
    <?php foreach ($teams as $teamName => $teamData): ?>
        <div class="team-div">
            <img src="<?= $teamData['logo'] ?>" alt="Official logo of <?= $teamName ?>" class="team-logo">
            <h3 id="team-name"> <?= $teamName ?> </h3>
            League: <?= $teamData['league'] ?> <br>
            City: <?= $teamData['city'] ?> <br>
            UEFA Coefficient Ranking: <?= $teamData['uefa-coefficient-ranking'] ?> <br>
            Group: <?= $teamData['group'] ?> <br>
            <a href="<?= $teamData['url'] ?>" target="_blank">Official Website</a>
        </div>
    <?php endforeach; ?>
</article>

<?php

require __DIR__ . "/footer.php";
