<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>


<main>
    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
        <div class="container-fluid">
            <div class="page-header-content">
                <h1 class="page-header-title">
                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                    <span><?= $this->title ?></span>
                </h1>
                <div class="page-header-subtitle">Example dashboard overview and content summary</div>
            </div>
        </div>
    </div>
    <?= $content ?>
</main>