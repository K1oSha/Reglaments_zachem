<? use app\models\UserRecord;
use yii\helpers\Html;

?>
<div class='site-index'>
    <?php if(yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message');?>
        </div>
    <?php endif;?>
    <span style="margin-bottom: 50px"><?= Html::a( 'Create', ('create_assignment'),
            ['class'=>'btn btn-success'])?>
    </span>
    <span><?= Html::a('Back to View', ('/roles/view'),
            ['class'=>'btn btn-danger']) ?></span>
    <div class='body-content'>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col"><?= 'Name' ?></th>
                <th scope="col"><?= 'Email' ?></th>
                <th scope="col"><?= 'Name of role' ?></th>
                <th scope="col"><?= 'User_ID' ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($assignments) > 0):  //эту проверку надо ставить раньше того как выводится HEAD таблицы иначе получается не оч?>
                <?php foreach ($assignments as $assignment):?>
                    <tr class="table-active">
                        <td><?php echo UserRecord::findUserById($assignment->userId)->name; ?></td>
                        <td><?php echo UserRecord::findUserById($assignment->userId)->email; ?></td>
                        <th scope="row"><?php echo $assignment->roleName; ?></th>
                        <td><?php echo $assignment->userId; ?></td>

                        <div class="row">
                            <td>
                                <div class="col-sm-12" >
                                    <span>
                                        <?= Html::a( 'Удалить',['delete_assignment','role'=>$assignment->roleName,'id'=>$assignment->userId],
                                            ['class'=>'label label-danger']) ?>
                                    </span>
                                </div>
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