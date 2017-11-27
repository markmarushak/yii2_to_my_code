<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php debug($model);?>

<?php $form = ActiveForm::begin([]) ?>
<ul>
    <?php

    foreach ($model as $k=>$value) {
        echo Html::encode($value).'<br>';
    }
    ?>
</ul>

<div class="form-group">
    <?= Html::submitButton('Сохранить введеные данные ', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end();?>



