<?php

namespace app\controllers;

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
        $model->state_upr=0;
        $model->state_gov=0;
        $model->state_expert=0;
        $model->state_prok=0;
        $model->state_economics=0;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionPdf()
    {
        return $this->render('\pdf\pdf2');
    }

    /**
     * Updates an existing Reglaments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
            if($model->state_upr==1 && $model->state_gov==1 && $model->state_expert==1
                && $model->state_prok==1 && $model->state_economics==1 )
            {
                $model->state=1;
            }else{
                $model->state=0;
            }
             $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
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
