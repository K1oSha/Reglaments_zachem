<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

?>
<div class="password-reset">
    <p>Здравствуйте <?= Html::encode($context[]) ?>,</p>

    <p>Пройдите по ссылке ниже чтобы восстановить ваш пароль:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>