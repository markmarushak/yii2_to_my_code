<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model,'caption')->label('Заголовок')?>
    <?= $form->field($model,'searchCountry')->dropDownList(['russia'=>'Россия','ukraine'=>'Украина','kazahstan'=>'Казахстан'])->label('Страна')?>
    <?= $form->field($model,'searchRegion')->dropDownList(['moscow'=>'Moscow','kiev'=>'Kiev','piter'=>'Piter'])?>
    <?= $form->field($model,'searchCity')->dropDownList(['slavyansk'=>'Slavyansk','borovaja'=>'Borovaja','dobroplye'=>'dobroplye']) ?>
    <?= $form->field($model,'event')->dropDownList(['lostChild'=>'Потеряли ребенка','hitCar'=>'Сбила машина','eventStreet'=>'Происшествие на улице'])?>
    <?= $form->field($model,'description')->textarea()?>
    <?= $form->field($model,'fotoFile')->fileInput()?>
    <?= $form->field($model,'fotoDescr')->textInput()?>
    <?= $form->field($model,'videoFile')->fileInput()?>
    <?= $form->field($model,'videoDescr')->textInput()?>
    <?= $form->field($model,'map')?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end();?>


