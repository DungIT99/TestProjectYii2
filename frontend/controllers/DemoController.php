<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\books;

class DemoController extends Controller{
 public function actionIndex(){
return $this->render("index");
 }
 public function actionView($id){
    $model = books::findone(['id'=>$id]);
     return $this->render('view',['model'=>$model]);
 }
} 

?>