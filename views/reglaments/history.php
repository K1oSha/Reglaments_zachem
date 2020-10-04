<?php

use yii\helpers\Html;

?>
    <h1>История изменений административного регламента: <?= $model->message?></h1>


<?foreach ($all_versions as $all_version):?>
<div class="row">
    <div class="col-lg-6">
        <h2>Было</h2>
        <h3>Дата версии <?= $all_version->date_was?></h3>
    </div>
    <div class="col-lg-6">
        <h2>Стало</h2>
        <h3>Дата версии <?= $all_version->date_became?></h3>
    </div>
</div>
<div class="row">
    <h4>1.1 предмет регулирования регламента</h4>
    <?php if ($all_version->f11_was!=$all_version->f11_became):?>
    <div class="col-lg-6">

        <h5 style="color:red "><?= $all_version->f11_was ?></h5>
    </div>
    <div class="col-lg-6">
        <h5 style="color:green "> <?= $all_version->f11_became  ?></h5>
    </div>
    <?php else:?>
    <div class="col-lg-6">

        <h5><?= $all_version->f11_was ?></h5>
    </div>
    <div class="col-lg-6">
        <?= $all_version->f11_became  ?>
    </div>
    <?php endif; ?>
</div>
<div class="row">
    <h4>1.2 круг заявителей</h4>
    <?php if ($all_version->f12_was!=$all_version->f12_became):?>
        <div class="col-lg-6">

            <h5 style="color:red "><?= $all_version->f12_was ?></h5>
        </div>
        <div class="col-lg-6">
            <h5 style="color: green"> <?= $all_version->f12_became  ?></h5>
        </div>
    <?php else:?>
        <div class="col-lg-6">

            <h5><?= $all_version->f12_was ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $all_version->f12_became  ?>
        </div>
    <?php endif; ?>

</div>
<div class="row">
    <h4>1.3.1 порядок получения информации заявителями по вопросам предоставления</h4>
    <?php if ($all_version->f131_was!=$all_version->f131_became):?>
        <div class="col-lg-6">

            <h5 style="color:red "><?= $all_version->f131_was ?></h5>
        </div>
        <div class="col-lg-6">
            <h5 style="color:green "> <?= $all_version->f131_became  ?></h5>
        </div>
    <?php else:?>
        <div class="col-lg-6">

            <h5><?= $all_version->f131_was ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $all_version->f131_became  ?>
        </div>
    <?php endif; ?>
</div>
<div class="row">
    <h4>1.3.2 порядок, форма, место размещения и способы получения справочной информации</h4>
    <?php if ($all_version->f132_was!=$all_version->f132_became):?>
        <div class="col-lg-6">

            <h5 style="color:red "><?= $all_version->f132_was ?></h5>
        </div>
        <div class="col-lg-6">
            <h5 style="color:green "> <?= $all_version->f132_became  ?></h5>
        </div>
    <?php else:?>
        <div class="col-lg-6">

            <h5><?= $all_version->f132_was ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $all_version->f132_became  ?>
        </div>
    <?php endif; ?>
</div>
<div class="row">
    <h4>2.1 наименование государственной услуги</h4>
    <?php if ($all_version->f21_was!=$all_version->f21_became):?>
        <div class="col-lg-6">

            <h5 style="color:red "><?= $all_version->f21_was ?></h5>
        </div>
        <div class="col-lg-6">
            <h5 style="color:green "> <?= $all_version->f21_became  ?></h5>
        </div>
    <?php else:?>
        <div class="col-lg-6">

            <h5><?= $all_version->f21_was ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $all_version->f21_became  ?>
        </div>
    <?php endif; ?>
</div>
<div class="row">
    <h4>2.2 наименование органа, предоставляющего государственную услугу</h4>
    <?php if ($all_version->f22_was!=$all_version->f22_became):?>
        <div class="col-lg-6">

            <h5 style="color: red"><?= $all_version->f22_was ?></h5>
        </div>
        <div class="col-lg-6">
            <h5 style="color: green"> <?= $all_version->f22_became  ?></h5>
        </div>
    <?php else:?>
        <div class="col-lg-6">

            <h5><?= $all_version->f22_was ?></h5>
        </div>
        <div class="col-lg-6">
            <?= $all_version->f22_became  ?>
        </div>
    <?php endif; ?>
</div>
<?endforeach;?>
<span class="btn pull-left"><?= Html::a('Назад', ['reglaments/view',
        'id' => $id],
        ['class'=>'btn btn-danger',]) ?></span>
