<?php

require __DIR__ . '/header.php';

require __DIR__ . '/data.php';

?>

<article>
    <ul>
        <?php foreach ($teams as $teamName => $teamData): ?>
            <li>
                <img src="<?= $teamData['logo'] ?>" alt="The teams official logo">
                <h3> <?= $teamName ?> </h3>
                <p>
                    League: <?= $teamData['league'] ?> <br>
                    City: <?= $teamData['city'] ?> <br>
                    UEFA Coefficient Ranking: <?= $teamData['uefa-coefficient-ranking'] ?> <br>
                    Group:<?= $teamData['group'] ?> <br>
                    <a href="<?= $teamData['url'] ?>">Official Website</a>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</article>




<!-- Styles to be applied in CSS:
 For logo: 100px height and width
 For ul: list decoration: none
  -->