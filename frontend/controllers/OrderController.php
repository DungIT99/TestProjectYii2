<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Ordres;
class HeartController extends Controller{

    
 public function actionIndex(){
$order = $Orders::find()->all();
// print_r($order);die;
   

return $this->render("index");
 }
 public function actionCheck(){



  return $this->redirect([]);

 }
} 

?>