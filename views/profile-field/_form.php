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

    <?= $form->field($model, 'type')->dropDownList([ 'text' => 'Text', 'data' => 'Data', 'button' => 'Button', 'file' => 'File', 'email' => 'Email', 'radio' => 'Radio', 'reset' => 'Reset', 'submit' => 'Submit', 'image' => 'Image', 'hidden' => 'Hidden', 'checkbox' => 'Checkbox', 'select' => 'Select', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
