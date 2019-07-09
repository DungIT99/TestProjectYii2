<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\component\Cart;
use backend\models\books;



class CartController extends Controller{
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
 if(Yii::$app->request->post()){
 
    $id = $_POST['id'];
    $quantity = $_POST["update_qtt"];
   
   $cart->update($id,$quantity);
   // echo "ok";

  return $this->redirect(['/cart']);
 }
}

public function actionDeleteAll(){
   $Cart = new Cart();
   $Cart->deleteAll();
// return $this->redirect(['/cart']);
}


}

?>