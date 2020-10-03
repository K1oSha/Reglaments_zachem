<? use yii\helpers\Html;
use app\models\AuthAssignment;
?>
<div class='site-index'>
    <?php if(yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message');?>
        </div>
    <?php endif;?>
    <span style="margin-bottom: 50px"><?= Html::a('Создать роль', ('create'),
            ['class'=>'btn btn-success'])?>
    </span>
    <span style="margin-bottom: 50px"><?= Html::a( 'Посмотреть присвоение ролей', ('view_assignments'),
            ['class'=>'btn btn-primary'])?>
    </span>
    <span style="margin-bottom: 50px"><?= Html::a('Посмотреть наследствия', ('view_inheritances'),
            ['class'=>'btn btn-primary'])?>
    </span>
    <div class='body-content'>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col"><?= 'Имя' ?></th>
                <th scope="col"><?= 'Описание' ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($roles) > 0):  //эту проверку надо ставить раньше того как выводится HEAD таблицы иначе получается не оч?>
                <?php foreach ($roles as $role):?>
                    <tr class="table-active">
                        <th scope="row"><?php echo $role->name; ?></th>
                        <td><?php echo $role->description; ?></td>

                        <div class="row">
                            <td>
                                <div class="col-sm-12" ><span><?= Html::a( 'Удалить',['delete','name' => $role->name],
                                            ['class'=>'label label-danger']) ?></span></div>
                            </td>
                        </div>
                    </tr>
                <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td>No Record Found!</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>