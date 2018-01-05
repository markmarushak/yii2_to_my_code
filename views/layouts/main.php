<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandLabel' => 'Форум | найди свою ситуацию из жизни',
//        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [
        ['label' => 'Home', 'url' => ['/']],
        ['label' => 'About', 'url' => ['/about']],
        ['label' => 'Поиск свидетелей', 'url' => ['/post', 'categoryId' => 1]],
        ['label' => 'Стал свидетелем', 'url' => ['/post', 'categoryId' => 2]],
        ['label' => 'Готовится преступление', 'url' => ['/post', 'categoryId' => 3]],
//        ['label' => 'Post', 'url' => ['/post']],
    ];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    $menuItems[] =
        '<li class="nav_search slide-hidden">'
        .Html::beginForm('/site/search','post')
        .Html::textInput('PostSearch[description]',null,['class' => 'form-control' ])
        .Html::endForm()
        .'<span class="block-glob">'.Html::a('Расширенный поиск',Url::to('/site/search-global'),['class' => 'global-search']).'</span>'
        .'</li>';
    $menuItems[] =
        '<li class="open-search">'
        .'<a href="#" id="toggle-search"><span class="glyphicon glyphicon-search"></span></a>'
        .'</li>';

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>

<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
<?php $this->endPage() ?>
