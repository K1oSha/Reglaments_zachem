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
            ['attribute'=>'state','value'=>'StateName_for_reglament',],
            ['attribute'=>'state_upr','value'=>'StateName_for_check_upr',],
            ['attribute'=>'comment_upr'],
            ['attribute'=>'state_gov','value'=>'StateName_for_check_gov'],
            ['attribute'=> 'comment_gov'],
            ['attribute'=> 'state_expert','value'=>'StateName_for_check_expert'],
            ['attribute'=>'comment_expert'],
            ['attribute'=>'state_prok','value'=>'StateName_for_check_prok'],
            ['attribute'=>'comment_prok'],
            ['attribute'=>'state_economics', 'value'=>'StateName_for_check_economics'],
            ['attribute'=> 'comment_economics'],
        ],
    ]) ?>
    <span class="btn pull-left"> <?= Html::a('На главную', ('/reglaments/index'),
            ['class'=>'btn btn-danger',]) ?>
    </span>
    <span class="btn pull-right">  <?= Html::a( 'Изменить',
            ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </span>
</div>
