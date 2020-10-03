<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class='site-index'>
    <h1>CREATE INHERITANCE </h1>

    <div class="body-content">
        <?php
        $form = ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($model,'parent')->label('Тот кто наследует(родитель)'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($model,'child')->label('У кого наследует(ребенок)')?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
                           <span><?= Html::submitButton('Создать наследсвание',
                                   ['class'=>'btn btn-success']) ?></span>

            <span><?= Html::a('Back to View', ('/roles/view_inheritances'),
                    ['class'=>'btn btn-danger']) ?></span>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>

