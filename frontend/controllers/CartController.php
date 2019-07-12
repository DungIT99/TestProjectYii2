<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\component\Cart;
use backend\models\books;



class CartController extends Controller{

   public function beforeAction($action) {
      $this->enableCsrfValidation = false;
      return parent::beforeAction($action);
  }
 public function actionIndex(){
   
  $cart = new Cart();
  $total = $cart->getCost();
 $cartstore = $cart->cartStore;

   return $this->render("index",[
      "items"=> $cartstore,
      'total'=>$total,
      ]);
}
public function actionAddCart($id){
   $model = books::findone(['id'=>$id]);
   $Cart = new Cart();
  $Cart ->add($model);
  

return $this->redirect(['/cart']);
}
public function actionAddCartDirect($id){
   $model = books::findone(['id'=>$id]);
   $Cart = new Cart();
  $Cart ->add($model);
  
  echo "ok";

// return $this->redirect(['/cart']);
}
public function actionRemove($id){
   $model = books::findone(['id'=>$id]);
   $Cart = new Cart();
  $b =  $Cart->remove($model);
 
// echo "ok";
   // return $this->redirect(['/cart']);
}


public function actionUpdateform(){
   $cart = new Cart();
   print_r(Yii::$app->request->post());
 if(Yii::$app->request->post()){
    $id = $_POST['tt'];
    $quantity = $_POST["update_qtt"];
   $cart->update($id,$quantity);
   echo "ok";
   // echo "ok";
//   return $this->redirect(['/cart']);
 }
}

public function actionDeleteAll(){
   $Cart = new Cart();
   $Cart->deleteAll();
// return $this->redirect(['/cart']);
}


}

?>