<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reglaments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reglaments-form">

    <?php $form = ActiveForm::begin(); ?>
    <?yii::$app->session['test2'] = $model?>
    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'f11')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f12')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f131')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f132')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f21')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f22')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f23')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f241')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f242')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f243')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f25')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f261')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f262')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f263')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f271')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f272')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f273')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f28')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f29')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f210')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f2111')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f2112')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f212')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f213')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f214')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f215')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f2161')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f2162')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f2163')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f2164')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f217')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f31')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f32')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f33')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f34')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f351')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f352')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f353')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f354')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f355')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f35611')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f35612')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f35613')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f35614')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f3562')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f3563')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f3564')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f41')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f42')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f43')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f44')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f45')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f46')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f51')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f52')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f53')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f54')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f61')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f62')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f63')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f64')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f641')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f642')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f643')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f644')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f645')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f646')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f647')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f648')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f649')->textInput(['maxlength' => true]) ?>
    <?=1// $form->field($model, 'f6410')->textInput(['maxlength' => true]) ?>

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
