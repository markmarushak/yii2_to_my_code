<?php

use yii\helpers\Html;
?>
<? debug($model->attributes) ?>
<ul>
    <?php foreach ($model as $key=>$value){
        echo Html::encode($key).'&nbsp; - &nbsp;';
        echo Html::encode($value).'<br>';
    } ?>
</ul>
