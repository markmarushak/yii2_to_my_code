<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProfileField */

$this->title = 'Create Profile Field';
$this->params['breadcrumbs'][] = ['label' => 'Profile Fields', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-field-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
