<?php

namespace backend\controllers;

use Yii;
use backend\models\books;
use backend\models\category;
use backend\models\BooksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

use yii\helpers\ArrayHelper;

/**
 * BooksController implements the CRUD actions for books model.
 */
class BooksController extends Controller
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
     * Lists all books models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BooksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single books model.
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
     * Creates a new books model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new books();
    $categorys = new Category();
    $cate = ArrayHelper::map($categorys ->getCates(),'id','name');


    if ($model->load(Yii::$app->request->post())) {
        $model->updated_at = time();
        $model->created_at = time();
        $model->file = UploadedFile::getinstance($model,'file');
        if($model->file){
            $model->file->saveAs('../../public/'.$model->file->name);
            $model->image = $model->file->name;

        }
        if( $model->save(false)){
               Yii::$app->session->addFlash('success',' thêm moi san pham thanh cong');
            return $this->redirect(['view', 'id' => $model->id]);
        }
    }
   
    return $this->render('create', [
        'model' => $model,
        'cate'=> $cate
    ]);

    }
 

    /**
     * Updates an existing books model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        
     



        if ($model->load(Yii::$app->request->post()) ) {
            $model->created_at = time();
            $model->updated_at = time();
             if($model->save()){
                Yii::$app->session->addFlash('success',' sua san pham thanh cong');
               return $this->redirect(['view', 'id' => $model->id]);
             }else{
                Yii::$app->session->addFlash('danger','lỗi sua san pham');
                return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
        else{
        return $this->render('update', [
            'model' => $model,
        ]);
       }
    }

    /**
     * Deletes an existing books model.
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
     * Finds the books model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return books the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = books::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
