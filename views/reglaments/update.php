<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reglaments */

$this->title = 'Изменение в административном регламенте: ' . $model->message;
$this->params['breadcrumbs'][] = ['label' => 'Reglaments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reglaments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?
    $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
    ?>
    <? if(array_key_exists('economics',$roles)){?>
        <?= $this->render('_form_economics', [
            'model' => $model,
        ]) ?>
    <?}?>
    <? if(array_key_exists('experts',$roles)){?>
        <?= $this->render('_form_expert', [
            'model' => $model,
        ]) ?>
    <?}?>
    <? if(array_key_exists('government',$roles)){?>
        <?= $this->render('_form_gov', [
            'model' => $model,
        ]) ?>
    <?}?>
    <? if(array_key_exists('prokuratura',$roles)){?>
        <?= $this->render('_form_prok', [
            'model' => $model,
        ]) ?>
    <?}?>
    <? if(array_key_exists('secretary',$roles)){?>
        <?= $this->render('_form_secretary', [
            'model' => $model,
        ]) ?>
    <?}?>
    <? if(array_key_exists('upoln',$roles)){?>
        <?= $this->render('_form_upoln', [
            'model' => $model,
        ]) ?>
    <?}?>

</div>
