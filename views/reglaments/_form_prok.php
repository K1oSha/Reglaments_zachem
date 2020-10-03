<?php

use app\models\Reglaments;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Reglaments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reglaments-form">
<?//= DetailView::widget([
//    'model' => $model,
//    'attributes' => [
//        'f11',
//        'f12',
//        'f131',
//        'f132',
//        'f21',
//        'f22'
//        //,'f23','f241','f242','f243','f25','f261','f262','f263','f271','f272','f273','f28','f29','f210','f2111','f2112','f212','f213','f214','f215','f2161','f2162','f2163','f2164','f217','f31','f32','f33','f34','f351','f352','f353','f354','f355','f35611','f35612','f35613','f35614','f3562','f3563','f3564','f41','f42','f43','f44','f45','f46','f51','f52','f53','f54','f61','f62','f63','f64','f641','f642','f643','f644','f645','f646','f647','f648','f649','f6410'
//
//    ],
//]) ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <h4>1.1 предмет регулирования регламента</h4>
        <div class="col-lg-6">
           <h5><?= $model->f11 ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'f11_comment_proc')->textInput(['maxlength' => true])->textarea() ?>
        </div>
    </div>
    <div class="row">
        <h4>1.2 круг заявителей</h4>
        <div class="col-lg-6">
           <h5><?= $model->f12 ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'f12_comment_proc')->textInput(['maxlength' => true])->textarea() ?>
        </div>
    </div>
    <div class="row">
        <h4>1.3.1 порядок получения информации заявителями по вопросам предоставления</h4>
        <div class="col-lg-6">
            <h5><?= $model->f131 ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'f131_comment_proc')->textInput(['maxlength' => true])->textarea() ?>
        </div>
    </div>
    <div class="row">
        <h4>1.3.2 порядок, форма, место размещения и способы получения справочной информации</h4>
        <div class="col-lg-6">
            <h5><?= $model->f132 ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'f132_comment_proc')->textInput(['maxlength' => true])->textarea() ?>
        </div>
    </div>
    <div class="row">
        <h4>2.1 наименование государственной услуги</h4>
        <div class="col-lg-6">
            <h5><?= $model->f21 ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'f21_comment_proc')->textInput(['maxlength' => true])->textarea() ?>
        </div>
    </div>
    <div class="row">
        <h4>2.2 наименование органа, предоставляющего государственную услугу</h4>
        <div class="col-lg-6">
            <h5><?= $model->f22 ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'f22_comment_proc')->textInput(['maxlength' => true])->textarea() ?>
        </div>
    </div>




    <?= $form->field($model, 'state_prok')->dropDownList(Reglaments::getStateList_for_check()) ?>

<!--    --><?//= $form->field($model, 'comment_prok')->textInput(['maxlength' => true])->textarea() ?>

    <div class="form-group">
        <span class="btn pull-left"><?= Html::a( 'Назад', ('/reglaments/index'),
                ['class'=>'btn btn-danger']) ?></span>
        <span class="btn pull-right"><?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
