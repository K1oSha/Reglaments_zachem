<?

use app\models\Auth_item;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class='site-index'>
    <h1>CREATE ASSIGNMENT </h1>

    <div class="body-content">
        <?php
        $form = ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($role,'item_name')->dropDownList(Auth_item::getList())->label('Роль'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($role,'user_id')->dropDownList($users)->label('Имя пользователя')?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
                           <span><?= Html::submitButton('Присвоить роль',
                                   ['class'=>'btn btn-success']) ?></span>

            <span><?= Html::a('Back to View', ('/roles/view_assignments'),
                    ['class'=>'btn btn-danger']) ?></span>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>

