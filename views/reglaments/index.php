<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ReglamentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Административные регламенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reglaments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?
        $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
        ?>
        <? if(array_key_exists('secretary',$roles)){?>
            <?= Html::a('Создать регламент', ['create'], ['class' => 'btn btn-success']) ?>
        <?}?>
    </p>
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#bad_reglament"><?='Регламенты на согласовнии'?></a>
        </li>
        <li >
            <a data-toggle="tab" href="#good_reglament"><?= 'Согласованные регламенты'?></a>
        </li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="bad_reglament">
            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider_bad,
                'filterModel' => $searchModel_bad,
                'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' =>  '(Не задано)'],
                'summary' =>"Показаны записи {begin} - {end} из {totalCount} ",
                'emptyText' => 'Записи не найдены',
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'message',
//                    ['attribute'=>'state','value'=>'StateName_for_reglament','filter'=>\app\models\Reglaments::getStateList_for_reglament()],
//                    ['attribute'=>'state_upr','value'=>'StateName_for_check_upr','filter'=>\app\models\Reglaments:: getStateList_for_check()],
//            'comment_upr',
                    //'state_gov',
                    //'comment_gov',
                    //'state_expert',
                    //'comment_expert',
                    //'state_prok',
                    //'comment_prok',
                    //'state_economics',
                    //'comment_economics',

                    ['class' => 'yii\grid\ActionColumn',
                        'template' => ' {update} &nbsp&nbsp {view}  ',
                    ],
                ],
            ]); ?>

            <?php Pjax::end(); ?>
        </div>
        <div class="tab-pane" id="good_reglament">
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
            'message',
//                    ['attribute'=>'state','value'=>'StateName_for_reglament','filter'=>\app\models\Reglaments::getStateList_for_reglament()],
//                    ['attribute'=>'state_upr','value'=>'StateName_for_check_upr','filter'=>\app\models\Reglaments:: getStateList_for_check()],
//            'comment_upr',
                    //'state_gov',
                    //'comment_gov',
                    //'state_expert',
                    //'comment_expert',
                    //'state_prok',
                    //'comment_prok',
                    //'state_economics',
                    //'comment_economics',

                    ['class' => 'yii\grid\ActionColumn',
                        'template' => ' {update} &nbsp&nbsp {view}  ',],
                ],
            ]); ?>

            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
