<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\books;
use frontend\component\Heart ;
use yii\web\Session;


class HeartController extends Controller{

    
 public function actionIndex(){
     $heart= new Heart();

   $p = $heart->heart;

return $this->render("index",["book"=>$p]);
 }
 public function actionAddHeart($id){
    $model = books::findone(['id'=>$id]);

    $heart = new Heart();
     $p =$heart->add($model);
//   return $this->redirect(['/heart']);

 }
} 

?>