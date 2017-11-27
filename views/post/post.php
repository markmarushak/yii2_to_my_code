<div class="box">
    <h1><?= $post->caption?></h1>
    <b>
        <ul>
            <li><?= $post->searchCountry?></li>
            <li><?= $post->fotoDescr ?></li>
        </ul>
    </b>
</div>
<?php
    foreach ($post as $key=>$value){
        echo $value.'<br>';
    }
?>

