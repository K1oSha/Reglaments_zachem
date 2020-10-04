<?
use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'f11')->textInput(['maxlength' => true])->textarea() ?>
<?= $form->field($model, 'f12')->textInput(['maxlength' => true])->textarea() ?>
<?= $form->field($model, 'f131')->textInput(['maxlength' => true])->textarea() ?>
<?= $form->field($model, 'f132')->textInput(['maxlength' => true])->textarea() ?>
<?= $form->field($model, 'f21')->textInput(['maxlength' => true])->textarea() ?>
<?= $form->field($model, 'f22')->textInput(['maxlength' => true])->textarea() ?>







<div class="form-group">
        <span class="btn pull-left"><?= Html::a( 'Назад', ('/reglaments/index'),
                ['class'=>'btn btn-danger']) ?></span>
    <span class="btn pull-right"><?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
</div>

<?php ActiveForm::end(); ?>
