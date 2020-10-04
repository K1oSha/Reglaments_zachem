<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

?>
<div class="password-reset">
    <p>Здравствуйте <?= Html::encode($context['username']) ?>,</p>

    <p>Были внесены изменения в регламент <? echo $context['message']; ?></p>
    <p>Зайдите на сайт чтобы посмотреть изменения и дать свою оценку </p>
</div>