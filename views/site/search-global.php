<?php
use yii\widgets\ListView;

?>
    <?= $this->render('_search', ['model' => $searchModel,'event' => $event,]); ?>


<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
]) ?>

