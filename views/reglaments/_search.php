<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReglamentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reglaments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'message') ?>

    <?= $form->field($model, 'state') ?>

    <?= $form->field($model, 'state_upr') ?>

    <?= $form->field($model, 'comment_upr') ?>

    <?php // echo $form->field($model, 'state_gov') ?>

    <?php // echo $form->field($model, 'comment_gov') ?>

    <?php // echo $form->field($model, 'state_expert') ?>

    <?php // echo $form->field($model, 'comment_expert') ?>

    <?php // echo $form->field($model, 'state_prok') ?>

    <?php // echo $form->field($model, 'comment_prok') ?>

    <?php // echo $form->field($model, 'state_economics') ?>

    <?php // echo $form->field($model, 'comment_economics') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
