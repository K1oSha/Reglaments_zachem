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
            'state',
            'state_upr',
            'comment_upr',
            'state_gov',
            'comment_gov',
            'state_expert',
            'comment_expert',
            'state_prok',
            'comment_prok',
            'state_economics',
            'comment_economics',
        ],
    ]) ?>
    <span class="btn pull-left"> <?= Html::a('На главную', ('/reglaments/index'),
            ['class'=>'btn btn-danger',]) ?>
    </span>
    <span class="btn pull-right">  <?= Html::a( 'Изменить',
            ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </span>
</div>
