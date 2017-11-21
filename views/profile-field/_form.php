<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfileField */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-field-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'string' => 'String', 'name' => 'Name', 'text' => 'Text', 'number' => 'Number', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'required')->checkbox(['value'=> boolean]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
