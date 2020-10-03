<?
use yii\helpers\Html;
use app\models\AuthAssignment;
use yii\widgets\ActiveForm;

?>
<div class='site-index'>
    <h1>CREATE ROLE </h1>

    <div class="body-content">
        <?php
        $form = ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($model,'name'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($model,'description')?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
                           <span><?= Html::submitButton('Создать роль',
                                   ['class'=>'btn btn-success']) ?></span>

            <span><?= Html::a('Назад', ('/roles/view'),
                    ['class'=>'btn btn-danger']) ?></span>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>

