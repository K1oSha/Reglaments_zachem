<?php


namespace app\controllers;

//use function GuzzleHttp\Promise\all;
use app\models\Auth_assignment;
use app\models\UserIdentity;
use app\models\UserRecord;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii;
use yii\web\HttpException;
use yii\base\DynamicModel;
use yii\rbac\Assignment;
use yii\db\Query;

class RolesController extends Controller
{
    public function getAllAssignments()
    {
        $query = (new Query())
            ->from('{{%auth_assignment}}');

        $assignments = [];
        foreach ($query->all() as $row) { //$this->db
            $assignments[$row['user_id']] = new Assignment([
                'userId' => $row['user_id'],
                'roleName' => $row['item_name'],
                'createdAt' => $row['created_at'],
            ]);
        }
        return $assignments;
    }

    public function remove_assignment($role,$id)
    {
        if (
        Yii::$app->db->createCommand()
            ->delete('{{%auth_assignment}}', ['item_name' => $role, 'user_id' => $id])
            ->execute())
            return true;
        return false;
    }

    public function remove_inheritance($parent,$child)
    {
        if (
        Yii::$app->db->createCommand()
            ->delete('{{%auth_item_child}}', ['parent' => $parent, 'child' => $child])
            ->execute())
            return true;
        return false;
    }


    public function actionView_inheritances()
    {
        $roles = Yii::$app->authManager->getRoles(); //получаем список всех ролей
        $inheritances = []; //создаем массив наследований
        foreach($roles as $role) //для каждой роли
        {
            $children = Yii::$app->authManager->getChildRoles($role->name); //находим детей. метод возвращает список всех детей ( роль является ребёнком самой себя)
            if (count($children) > 1) //поскольку каждая роль ребёнок самой себя, роль по настоящему имеет наследование только если записей больше одной
            {
                
                $inheritances[$role->name] = $children; // вставляем в массив данные
            }
        }
        return $this->render('view_inheritances', ['inheritances'=>$inheritances]);
    }
    public function actionCreate_inheritance()
    {
        $model = new \yii\base\DynamicModel(['parent','child']); //создание динамической модели для работы с формой
        $model ->addRule(['parent','child'], 'string', ['max'=>128]); //создание правила для полей модели ( оба поля не больше 128 символов)
        if ($model->load(Yii::$app->request->post())) //загрузка данных из POST
        {
            $children_role = Yii::$app->authManager->getRole($model->child);
            $parent_role = Yii::$app->authManager->getRole($model->parent);
            $parent_childrens = Yii::$app->authManager->getChildRoles($model->parent);
            if (!array_search($children_role, $parent_childrens)) //если роли с таким именем не существует
            {
                Yii::$app->authManager->addChild($parent_role, $children_role);
                Yii::$app->getSession()->setFlash('Inheritance Created Successfully');
                return $this->redirect('/roles/view_inheritances');
            }
            else 
            {
                Yii::$app->getSession()->setFlash('message','Failed to Inheritance');
                return $this->redirect('/roles/view_inheritances');
            } 
        }
        return $this->render('create_inheritance',['model'=>$model]);
    }
    public function actionCreate_assignment()
    {
        $users=ArrayHelper::map(UserIdentity::find()->all(), 'id', 'name');
        $users_with_role=Auth_assignment::find()->select('user_id')->column();
        foreach ( $users_with_role as $item) {
            unset($users[$item]);
        }
        $role = new \yii\base\DynamicModel(['item_name','user_id']);
        $role->addRule(['item_name','user_id'], 'string', ['max'=>128]);
        if($role->load(Yii::$app->request->post())){
             $userRole = Yii::$app->authManager->getRole($role->item_name);
             $userid=$role->user_id;
             if ((UserIdentity::find()->where(['id' => $userid])->exists()) and (Yii::$app->authManager->getRole($role->item_name)<> null))
             {
                 Yii::$app->authManager->assign($userRole, $userid);
                 Yii::$app->getSession()->setFlash('message', 'Assignment Created');
                 return $this->redirect('/roles/view_assignments');
             }
             else
             {
                 Yii::$app->getSession()->setFlash('message','Failed to Inheritance');
                 return $this->redirect('/roles/view_assignments');
             }
        }
        return $this->render('create_assignment',['role'=>$role,'users'=>$users]);
    }

    public function actionDelete_inheritance($parent, $child)
    {
        if ($parent && $child)
        {
            //$parent_childrens = Yii::$app->authManager->getChildRoles($parent);
            //$children = $parent_childrens[$child];
            //Yii::$app->authManager->remove($children); //TODO пофиксить баг удаления роли
            $this->remove_inheritance($parent, $child);
            Yii::$app->getSession()->setFlash('message','Inheritance Deleted');
            return $this->redirect('/roles/view_inheritances');
        }
        Yii::$app->getSession()->setFlash('message','???');
        return $this->redirect('/roles/view_inheritances');

    }

    public function actionView_assignments()
    {
        $assignments = $this->getAllAssignments();


        return $this->render('view_assignments',[
            'assignments' => $assignments
        ]);
    }

    public function actionView()
    {
        $roles = Yii::$app->authManager->getRoles();
        return $this->render('view',['roles' => $roles]);
    }

    public function actionDelete($name)
    {
        if ($name)
        {
            $role = Yii::$app->authManager->getRole($name);
            Yii::$app->authManager->remove($role);
            Yii::$app->getSession()->setFlash('message','Role Deleted');
            return $this->redirect('/roles/view');
        }
        Yii::$app->getSession()->setFlash('message','???');
        return $this->redirect('/roles/view');
    }

    public function actionCreate()
    {
        $model = new \yii\base\DynamicModel(['name','description']); //создание динамической модели для работы с формой
        $model ->addRule(['name','description'], 'string', ['max'=>128]); //создание правила для полей модели ( оба поля не больше 128 символов)
        if ($model->load(Yii::$app->request->post())) //загрузка данных из POST
        {
            if (!Yii::$app->authManager->getRole($model->name)) //если роли с таким именем не существует
            {
                $role = Yii::$app->authManager->createRole($model->name); //тогда создаем роль с именем $model->name
                $role->description = $model->description;//и описанием $model->description
                Yii::$app->authManager->add($role); //добавляем роль в БД
                Yii::$app->getSession()->setFlash('message','Role Created Successfully');
                return $this->redirect('/roles/view');
            }
            else 
            {
                Yii::$app->getSession()->setFlash('message','Failed to Create Role');
                return $this->redirect('/roles/view');
            } 
        }
        return $this->render('create',['model'=>$model]);
    }



    public function actionDelete_assignment($role, $id)
    {
        $this->remove_assignment($role, $id);

        if ($role<> null and $id<> null) {
            Yii::$app->getSession()->setFlash('message', 'Post Deleted Successfully');
            return $this->redirect(['/roles/view_assignments']);
        }
        else
            {
                Yii::$app->getSession()->setFlash('message', 'Post Delete Failed');
                return $this->redirect(['/roles/view_assignments']);
        }

    }

//    public function behaviors() //Разрешение на вход на страницы
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['create_inheritance','delete_inheritance','view_inheritances','delete','view','create','view_assignments','create_assignment','update','delete','delete_assignment'],
//                        'allow' => true,
//                        'roles' => ['admin'],
//                    ],
//                ],
//            ],
//        ];
//    }


}