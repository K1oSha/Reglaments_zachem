<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reglaments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reglaments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'state')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'state_upr')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'comment_upr')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'state_gov')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'comment_gov')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'state_expert')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'comment_expert')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'state_prok')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'comment_prok')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'state_economics')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'comment_economics')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <span class="btn pull-left"><?= Html::a( 'Назад', ('/reglaments/index'),
                ['class'=>'btn btn-danger']) ?></span>
        <span class="btn pull-right"><?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
