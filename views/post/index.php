<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="container">
    <ul>
        <?php
        foreach ($model as $m) {
            echo '<li><a href="/index.php?r=post/post&id='.$m->id.'">'.$m->caption.'</a></li>'.'<br>';
        }
        ?>
    </ul>
    <div class="button">
        <?= Html::a('Добавить пост','/index.php?r=post/add', ['class' => 'btn btn-primary'])?>
    </div>
</div>

