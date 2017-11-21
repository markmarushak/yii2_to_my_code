<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfileFieldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profile Fields';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-field-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profile Field', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'type',
            'required',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
