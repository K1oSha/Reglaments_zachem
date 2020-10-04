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
    <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6"><h3>Комментарии прокуратуры</h3></div>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h5> <?= $form->field($model, 'f11')->textInput(['maxlength' => true])->textarea() ?></h5>
        </div>
        <div  class="col-lg-6 panel panel-primary">
            <div class="panel-body">
            <h5 ><?= $model->f11_comment_proc?></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h5><?= $form->field($model, 'f12')->textInput(['maxlength' => true])->textarea() ?></h5>
        </div>
        <div class="col-lg-6 panel panel-primary">
            <div class="panel-body">
            <h5><?= $model->f12_comment_proc ?></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h5><?= $form->field($model, 'f131')->textInput(['maxlength' => true])->textarea() ?></h5>
        </div>
        <div class="col-lg-6 panel panel-primary">
            <div class="panel-body">
            <h5><?= $model->f131_comment_proc ?></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h5><?= $form->field($model, 'f132')->textInput(['maxlength' => true])->textarea() ?></h5>
        </div>
        <div class="col-lg-6 panel panel-primary">
            <div class="panel-body">
            <h5><?= $model->f132_comment_proc ?></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h5><?= $form->field($model, 'f21')->textInput(['maxlength' => true])->textarea() ?></h5>
        </div>
        <div class="col-lg-6 panel panel-primary">
            <div class="panel-body">
            <h5><?= $model->f21_comment_proc ?></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h5><?= $form->field($model, 'f22')->textInput(['maxlength' => true])->textarea() ?></h5>
        </div>
        <div class="col-lg-6 panel panel-primary">
            <div class="panel-body">
            <h5><?= $model->f22_comment_proc?></h5>
            </div>
        </div>
    </div>






    <div class="form-group">
        <span class="btn pull-left"><?= Html::a( 'Назад', ('/reglaments/index'),
                ['class'=>'btn btn-danger']) ?></span>
        <span class="btn pull-right"><?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
