<?php

use yii\helpers\Html;
?>
<? debug($post->attributes) ?>
<ul>
    <?php foreach ($post as $key=> $value){
        echo Html::encode($key).'&nbsp; - &nbsp;';
        echo Html::encode($value).'<br>';
    } ?>
</ul>
