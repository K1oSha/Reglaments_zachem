<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reglaments */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reglaments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reglaments-view">


    <?= DetailView::widget([
        'model' => $model,
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' =>  '(Не задано)'],
        'attributes' => [
            'message',
            ['attribute'=>'state','value'=>function($model){ return $model->StateName_for_reglament;}],
//            ['attribute'=>'state_upr','value'=>function($model){ return $model->StateName_for_check_upr;}],
//            ['attribute'=>'comment_upr'],
//            ['attribute'=>'state_gov','value'=>function($model){ return $model->StateName_for_check_gov;}],
//            ['attribute'=> 'comment_gov'],
//            ['attribute'=> 'state_expert','value'=>function($model){ return $model->StateName_for_check_expert;}],
//            ['attribute'=>'comment_expert'],
            ['attribute'=>'state_prok','value'=>function($model){ return $model->StateName_for_check_prok;}],
            'date'
//            ['attribute'=>'comment_prok'],
//            ['attribute'=>'state_economics', 'value'=>function($model){ return $model->StateName_for_check_economics;}],
//            ['attribute'=> 'comment_economics'],
        ],
    ]) ?>
    <span class="btn pull-left"> <?= Html::a('Посмотреть историю изменений',
            ['history','id'=>$model->id],
            ['class'=>'btn btn-default',]) ?>
    </span>

             <span class="btn pull-left"> <?= Html::a('Скачать PDF',
            ['pdf','id'=>$model->id],
            ['class'=>'btn btn-success',]) ?>
    </span>
    <br>
    <br>
    <br>
    <div class="row">
        <h4>1.1 предмет регулирования регламента</h4>
        <div class="col-lg-6">
            <h5><?= $model->f11 ?></h5>
        </div>
        <div class="col-lg-6">
            <h5>Комментарий прокуратуры:</h5>
            <?= $model->f11_comment_proc  ?>
        </div>
    </div>
    <div class="row">
        <h4>1.2 круг заявителей</h4>
        <div class="col-lg-6">
            <h5><?= $model->f12 ?></h5>
        </div>
        <div class="col-lg-6">
            <h5>Комментарий прокуратуры:</h5>
            <?= $model->f12_comment_proc ?>
        </div>
    </div>
    <div class="row">
        <h4>1.3.1 порядок получения информации заявителями по вопросам предоставления</h4>
        <div class="col-lg-6">
            <h5><?= $model->f131 ?></h5>
        </div>
        <div class="col-lg-6">
            <h5>Комментарий прокуратуры:</h5>
            <?= $model->f131_comment_proc  ?>
        </div>
    </div>
    <div class="row">
        <h4>1.3.2 порядок, форма, место размещения и способы получения справочной информации</h4>
        <div class="col-lg-6">
            <h5><?= $model->f132 ?></h5>
        </div>
        <div class="col-lg-6">
            <h5>Комментарий прокуратуры:</h5>
            <?= $model->f132_comment_proc ?>
        </div>
    </div>
    <div class="row">
        <h4>2.1 наименование государственной услуги:</h4>
        <div class="col-lg-6">
            <h5><?= $model->f21 ?></h5>
        </div>
        <div class="col-lg-6">
            <h5>Комментарий прокуратуры:</h5>
            <?= $model->f21_comment_proc  ?>
        </div>
    </div>
    <div class="row">
        <h4>2.2 наименование органа, предоставляющего государственную услугу</h4>
        <div class="col-lg-6">
            <h5><?= $model->f22 ?></h5>
        </div>
        <div class="col-lg-6">
            <h5>Комментарий прокуратуры:</h5>
            <?= $model->f22_comment_proc ?>
        </div>
    </div>

    <span class="btn pull-left"> <?= Html::a('На главную', ('/reglaments/index'),
            ['class'=>'btn btn-danger',]) ?>
    </span>
    <span class="btn pull-right">  <?= Html::a( 'Изменить',
            ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </span>
</div>
