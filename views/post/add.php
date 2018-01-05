<?php

use app\components\GeoWidget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Добавить пост';
$this->params['breadcrumbs'][] = $this->title;

?>
<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>

    <?= $form->field($post,'caption')->label('Заголовок')?>

    <?= GeoWidget::widget()?>

    <?= $form->field($post,'event_id')->dropDownList(ArrayHelper::map($event,'id','name'))->label('Событие')?>
    <?= $form->field($post,'description')->textarea()?>
    <?= $form->field($post,'map')?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'id' => 'add_post']) ?>
</div>

<?php ActiveForm::end();?>

<br />
<?php

?>
<br />


