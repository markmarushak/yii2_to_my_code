<div class="inner-geowidget"></div>

<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;


echo $this->registerJsFile('js/geo-widget.js', ['depends'=> [\yii\web\JqueryAsset::className()]]);

?>
<div class="form-group field required form-inline">
    <?= Html::dropDownList('Post[country]',null, ArrayHelper::map($country,'country_id','name'),[
        'id' => 'post-searchcountry',
        'class' => 'form-control',
        'prompt' => 'Выберите Страну',
    ])?>

    <?= Html::dropDownList('Post[region]',null,[],[
        'id' => 'post-searchregion',
        'class' => 'form-control',
        'prompt' => 'Выберите Область',
    ])?>

    <?= Html::dropDownList('Post[city]',null,[],[
        'id' => 'post-searchcity',
        'class' => 'form-control',
        'prompt' => 'Выберите Город',
    ])?>
</div>




