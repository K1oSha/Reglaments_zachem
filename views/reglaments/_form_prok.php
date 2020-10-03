<?php

use app\models\Reglaments;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reglaments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reglaments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'state_prok')->dropDownList(Reglaments::getStateList_for_check()) ?>

    <?= $form->field($model, 'comment_prok')->textInput(['maxlength' => true])->textarea() ?>

    <div class="form-group">
        <span class="btn pull-left"><?= Html::a( 'Назад', ('/reglaments/index'),
                ['class'=>'btn btn-danger']) ?></span>
        <span class="btn pull-right"><?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
