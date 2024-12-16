<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>
<body>
    <!-- 頂部導航 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="d-flex vh-100 navbar-expand-lg">
        <!-- 左側導覽列 -->
        <nav id="navbarNav" class="collapse navbar-collapse nav flex-column navbar-dark bg-dark p-3" style="min-width: 250px;max-width: 250px;">
            <?= Nav::widget([
                'options' => ['class' => 'nav flex-column'],
                'items' => [
                    [
                        'label' => '<i class="fas fa-home"></i> <span class="ms-2">Section 1</span>',
                        'url' => '#section1',
                        'encode' => false,
                        'linkOptions' => ['class' => 'nav-link text-white fs-5']
                    ],
                    [
                        'label' => '<i class="fas fa-user"></i> <span class="ms-2">Section 2</span>',
                        'url' => '#section2',
                        'encode' => false,
                        'linkOptions' => ['class' => 'nav-link text-white fs-5']
                    ],
                    [
                        'label' => '<i class="fas fa-cog"></i> <span class="ms-2">Section 3</span>',
                        'url' => '#section3',
                        'encode' => false,
                        'linkOptions' => ['class' => 'nav-link text-white fs-5']
                    ],
                    [
                        'label' => '<i class="fas fa-envelope"></i> <span class="ms-2">Section 4</span>',
                        'url' => '#section4',
                        'encode' => false,
                        'linkOptions' => ['class' => 'nav-link text-white fs-5']
                    ],
                ],
            ]); ?>
        </nav>

        <!-- 主內容區 -->
        <div class="main-content flex-grow-1 p-4">
            <?= $content?>
        </div>
    </div>

    <?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage() ?>
