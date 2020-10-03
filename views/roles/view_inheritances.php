<? use yii\helpers\Html;
use app\models\AuthAssignment;
?>
<div class='site-index'>
    <?php  if(yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message');?>
        </div>
    <?php endif;?>
    <span style="margin-bottom: 50px"><?= Html::a('Create', ('create_inheritance'),
            ['class'=>'btn btn-success'])?>
    </span>
    <span><?= Html::a('Back to View', ('/roles/view'),
            ['class'=>'btn btn-danger']) ?></span>
    <div class='body-content'>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col"><?=  'parent' ?></th>
                <th scope="col"><?= 'childs' ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($inheritances) > 0):  //эту проверку надо ставить раньше того как выводится HEAD таблицы иначе получается не оч?>
                <?php foreach ($inheritances as $parent => $child_roles):?>
                    

                    <tr class="table-active">
                        <th scope="row"><?php echo $parent; ?></th>
                        <td>
                            <?php foreach ($child_roles as $role): ?>
                                <?if ($role->name != $parent):?>
                                    <?php echo $role->name; ?>
                                    <div>
                                    <span>
                                    <?= Html::a( 'Удалить',['delete_inheritance','parent' => $parent, 'child'=>$role->name],
                                            ['class'=>'label label-danger']) ?>
                                    </span>
                                    </div>
                                <?endif?> 
                            <?php endforeach; ?> 
                        </td>


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