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
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'f11','f12','f131','f132','f21','f22','f23','f241','f242','f243','f25','f261','f262','f263','f271','f272','f273','f28','f29','f210','f2111','f2112','f212','f213','f214','f215','f2161','f2162','f2163','f2164','f217','f31','f32','f33','f34','f351','f352','f353','f354','f355','f35611','f35612','f35613','f35614','f3562','f3563','f3564','f41','f42','f43','f44','f45','f46','f51','f52','f53','f54','f61','f62','f63','f64','f641','f642','f643','f644','f645','f646','f647','f648','f649','f6410'
        
    ],
]) ?>


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
