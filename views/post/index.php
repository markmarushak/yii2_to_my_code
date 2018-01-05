<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ListView;


$this->title = $category->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <div class="button">
    <?php
        if (Yii::$app->user->identity) {
            echo Html::a('Добавить пост',Url::to(['post/add', 'categoryId'=> $category->id]), ['class' => 'btn btn-primary']);
        }
    ?>
    </div>
    <?php
//        echo $category->id;
    ?>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_list',
    ]) ?>
</div>

