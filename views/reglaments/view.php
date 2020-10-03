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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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

</div>
