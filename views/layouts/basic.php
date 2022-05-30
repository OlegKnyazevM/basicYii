<?php
/** @var yii\web\View $this */
/** @var string $content */
use app\assets\AppAsset;
use yii\helpers\Html;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!doctype html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
<div class="wrap">
        <div class="container">
             <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" <?= Html::a('Главная', '/index.php?r=/site/') ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" <?= Html::a('Статьи', '/index.php?r=post%2Ftest') ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" <?= Html::a('Статья', '/index.php?r=post%2Fshow') ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>

    </div>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
    <!--    --><?php //if (isset($this->blocks['Block1']));?>
    <!--    --><?php //echo $this->blocks['Block1']?>
    <?= $content ?>
    </div>
</main>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>