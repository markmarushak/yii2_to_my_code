
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Profile Fields';

$this->params['breadcrumbs'][] = $this->title;
?>
<? debug($model::find()->all())?>
<?php $form = ActiveForm::begin(); ?>


    <?php

//    foreach ($model as $mod){
//         echo $form->field($model,'id')->label($mod->type);
//    }
//
//    ?>




    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>



