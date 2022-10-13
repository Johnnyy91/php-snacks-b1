<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.
-->

<?php 

    $text = 
    ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
    Ullam placeat voluptatibus, repellendus error possimus veniam fugiat et.
    laborum eaque esse incidunt voluptas alias ratione mollitia unde illum.
    tempore, blanditiis qui.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Repudiandae consectetur veritatis sapiente quidem eius provident quis amet nulla blanditiis odio placeat vel facilis similique.
    nemo veniam asperiores atque sit.';

    $TextChange=str_replace('.', '<br>', $text);

    ?>

    <p><?= $text ?></p>

    <?php

    echo $TextChange;

?>

