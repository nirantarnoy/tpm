<?php

namespace backend\controllers;

use Yii;
use backend\models\Submenu;
use backend\models\SubmenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SubmenuController implements the CRUD actions for Submenu model.
 */
class SubmenuController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Submenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubmenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Submenu model.
     * @param integer $recid
     * @param integer $menurefid
     * @return mixed
     */
    public function actionView($recid, $menurefid)
    {
        return $this->render('view', [
            'model' => $this->findModel($recid, $menurefid),
        ]);
    }

    /**
     * Creates a new Submenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Submenu();

        if ($model->load(Yii::$app->request->post())) {
            $uploaded = UploadedFile::getInstance($model, 'photo');
            if(!empty($uploaded)){
                  
                $upfiles = time() . "." . $uploaded->getExtension();
                if ($uploaded->saveAs('../../uploads/' . $upfiles)) {
                        $model->photo = $upfiles;
                }
            }
            if($model->save()){
                return $this->redirect(['view', 'recid' => $model->recid, 'menurefid' => $model->menurefid]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Submenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $recid
     * @param integer $menurefid
     * @return mixed
     */
    public function actionUpdate($recid, $menurefid)
    {
        $model = $this->findModel($recid, $menurefid);

        if ($model->load(Yii::$app->request->post())) {
             $uploaded = UploadedFile::getInstance($model, 'photo');
            if(!empty($uploaded)){
                  
                $upfiles = time() . "." . $uploaded->getExtension();
                if ($uploaded->saveAs('../../uploads/' . $upfiles)) {
                        $model->photo = $upfiles;
                }
            }
            if($model->save()){
                return $this->redirect(['view', 'recid' => $model->recid, 'menurefid' => $model->menurefid]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Submenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $recid
     * @param integer $menurefid
     * @return mixed
     */
    public function actionDelete($recid, $menurefid)
    {
        $this->findModel($recid, $menurefid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Submenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $recid
     * @param integer $menurefid
     * @return Submenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($recid, $menurefid)
    {
        if (($model = Submenu::findOne(['recid' => $recid, 'menurefid' => $menurefid])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
