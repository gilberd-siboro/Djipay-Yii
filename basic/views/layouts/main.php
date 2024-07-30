<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;


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
    <?= Html::cssFile('@web/css/styles.css') ?>
</head>

<body class="h-full" data-new-gr-c-s-check-loaded="14.1184.0" data-gr-ext-installed>
    <?php $this->beginBody() ?>

    <div class="">
        <div class="bg-gray-100">
            <div x-data="{ open: false }" @keydown.window.escape="open = false">
                <?php if (Yii::$app->controller->route !== 'site/index') : ?>
                    <?= $this->render('sidebar') ?>
                <?php endif; ?>

                <div class="lg:pl-72">
                    <main class="">
                        <div class="px-4 sm:px-6 lg:px-8">
                            <!-- Konten Utama -->
                            <div class="">
                                <?= $content ?>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>