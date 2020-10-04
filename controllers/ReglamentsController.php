<?php

namespace app\controllers;

use app\models\Changes;
use Yii;
use app\models\Reglaments;
use app\models\ReglamentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReglamentsController implements the CRUD actions for Reglaments model.
 */
class ReglamentsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Reglaments models.
     * @return mixed
     */
    public function actionIndex()
    {
        $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
        if(array_key_exists('secretary',$roles) or array_key_exists('admin',$roles))
        {
            $searchModel = new ReglamentsSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams,0);
            $searchModel_bad= new ReglamentsSearch();
            $dataProvider_bad = $searchModel_bad->search(Yii::$app->request->queryParams,1);
        }
        if(array_key_exists('prokuratura',$roles))
        {
            $searchModel = new ReglamentsSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams,2);
            $searchModel_bad= new ReglamentsSearch();
            $dataProvider_bad = $searchModel_bad->search(Yii::$app->request->queryParams,3);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModel_bad'=>$searchModel_bad,
            'dataProvider_bad'=>$dataProvider_bad,
        ]);
    }

    /**
     * Displays a single Reglaments model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Reglaments model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reglaments();
        $model->state=0;
        $model->state_expert=0;
        $model->state_prok=0;
        $model->date=date('yy-m-d');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionPdf($id)
    {
        $model = $this->findModel($id);
        // Yii::$app->session['pdf'] = $model;
        return $this->render('pdf2',['model' => $model]);
    }

    /**
     * Updates an existing Reglaments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
//    'f11_comment_proc'=> $this->text(),
//'f12_comment_proc'=> $this->text(),
//'f131_comment_proc'=> $this->text(),
//'f132_comment_proc'=>$this->text(),
//'f21_comment_proc'=> $this->text(),
//'f22_comment_proc'=> $this->text(),
    public function actionUpdate($id)
    {
        $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
        $date=date('yy-m-d');
        $model = $this->findModel($id);



        $model_last = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) ) {
            if( $model->state_expert==1
                && $model->state_prok==1 )
            {
                $model->state=1;
            }else{
                $model->state=0;
            }

            if(array_key_exists('secretary',$roles)) {
                $model_changes = new Changes();
                $model_changes->message=$model_last->message;
                $model_changes->id_reglament = $model_last->id;
                $model_changes->date_was = $model_last->date;
                $model_changes->date_became = $date;
                $model_changes->f11_was = $model_last->f11;
                $model_changes->f12_was = $model_last->f12;
                $model_changes->f131_was = $model_last->f131;
                $model_changes->f132_was = $model_last->f132;
                $model_changes->f21_was = $model_last->f21;
                $model_changes->f22_was = $model_last->f22;
                $model_changes->f11_became = $model->f11;
                $model_changes->f12_became = $model->f12;
                $model_changes->f131_became = $model->f131;
                $model_changes->f132_became = $model->f132;
                $model_changes->f21_became = $model->f21;
                $model_changes->f22_became = $model->f22;

                $model_changes->f11_comment_proc = $model_last->f11_comment_proc;
                $model_changes->f12_comment_proc = $model_last->f12_comment_proc;
                $model_changes->f131_comment_proc = $model_last->f131_comment_proc;
                $model_changes->f132_comment_proc = $model_last->f132_comment_proc;
                $model_changes->f21_comment_proc = $model_last->f21_comment_proc;
                $model_changes->f22_comment_proc = $model_last->f22_comment_proc;

                if($model->f11!=$model_last->f11)
                {
                    $model->f11_comment_proc = null;
                }
                if($model->f12!=$model_last->f12)
                {
                    $model->f12_comment_proc = null;
                }
                if($model->f131!=$model_last->f131)
                {
                    $model->f131_comment_proc = null;
                }
                if($model->f132!=$model_last->f132)
                {
                    $model->f132_comment_proc = null;
                }
                if($model->f21!=$model_last->f21)
                {
                    $model->f21_comment_proc = null;
                }
                if($model->f22!=$model_last->f22)
                {
                    $model->f22_comment_proc = null;
                }
                $model->state=0;
                $model->state_prok=0;
                $model_changes->save();
            }





            //Комментарии прокуратуры
            if(array_key_exists('prokuratura',$roles))
            {
                if($model->f11_comment_proc!=$model_last->f11_comment_proc)
                {
                    $model->f11_comment_proc=$model->f11_comment_proc.' '.$date.' '.Yii::$app->user->getIdentity()->name;
                }
                if($model->f12_comment_proc!=$model_last->f12_comment_proc)
                {
                    $model->f12_comment_proc=$model->f12_comment_proc.' '.$date.' '.Yii::$app->user->getIdentity()->name;
                }
                if($model->f131_comment_proc!=$model_last->f131_comment_proc)
                {
                    $model->f131_comment_proc=$model->f131_comment_proc.' '.$date.' '.Yii::$app->user->getIdentity()->name;
                }
                if($model->f132_comment_proc!=$model_last->f132_comment_proc)
                {
                    $model->f132_comment_proc=$model->f132_comment_proc.' '.$date.' '.Yii::$app->user->getIdentity()->name;
                }
                if($model->f21_comment_proc!=$model_last->f21_comment_proc)
                {
                    $model->f21_comment_proc=$model->f21_comment_proc.' '.$date.' '.Yii::$app->user->getIdentity()->name;
                }
                if($model->f22_comment_proc!=$model_last->f22_comment_proc)
                {
                    $model->f22_comment_proc=$model->f22_comment_proc.' '.$date.' '.Yii::$app->user->getIdentity()->name;
                }
            }
            $model->date=date('yy-m-d');
             $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionHistory($id)
    {
        $all_versions=Changes::find()->where(['id_reglament'=>$id])->all();
        $model=$this->findModel($id);
        return $this->render('history',[
            'id'=>$id,
            'model'=>$model,
            'all_versions'=>$all_versions
        ]);
    }
    /**
     * Deletes an existing Reglaments model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reglaments model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reglaments the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reglaments::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
