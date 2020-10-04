<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

?>
<div class="password-reset">
    <p>Здравствуйте %sample_name% <?= Html::encode($context['username']) ?>,</p>

    <p>Была получен вердикт в регламенте: %sample text%<? echo $context['message']; ?></p>
    <p>Зайдите на сайт чтобы посмотреть комментарии от ведомства </p>
</div>