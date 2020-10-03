<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ReglamentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reglaments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reglaments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reglaments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' =>  '(Не задано)'],
        'summary' =>"Показаны записи {begin} - {end} из {totalCount} ",
        'emptyText' => 'Записи не найдены',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'message',
            'state',
            'state_upr',
            'comment_upr',
            //'state_gov',
            //'comment_gov',
            //'state_expert',
            //'comment_expert',
            //'state_prok',
            //'comment_prok',
            //'state_economics',
            //'comment_economics',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
