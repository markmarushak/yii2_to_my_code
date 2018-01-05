<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="news-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h4><?= Html::a(Html::encode($model->caption),['post','id' => $model->id]) ?></h4>
                    </div>
                    <div class="col-md-6">
<!--                        <p>--><?//= Html::encode($model->description)?><!--</p>-->
                            <p><?= substr($model->description,0,200)?>...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
