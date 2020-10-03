<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reglaments */

$this->title = 'Create Reglaments';
$this->params['breadcrumbs'][] = ['label' => 'Reglaments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reglaments-create">

    <h1><?= Html::encode($this->title) ?></h1>    
    <?yii::$app->session['test'] = $model?>
    <?= $this->render('_form_secretary', [
        'model' => $model,
    ]) ?>

</div>
