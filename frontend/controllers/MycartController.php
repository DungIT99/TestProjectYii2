<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Mycart;
use backend\models\Customers;
use backend\models\Orders;
use backend\models\OrderDetail;
use frontend\component\Cart;

class MycartController extends Controller{

 public function actionIndex(){
    $model = new Mycart();
    $cart = new Cart();
    $cartStore = $cart->cartStore;
if($model->load(Yii::$app->request->post())){
    $post = Yii::$app->request->post()['Mycart'];
    $cus = new Customers;
    $cus->username = $post["name"];
    $cus->address= $post["address"];
    $cus->phone = $post["phone"];
    $cus->email = $post["email"];
    $cus->created_at = time();
    $cus->updated_at = time();
    $cus->password_hash = 'password_hash';
    $cus->auth_key = 'auth_key';
if($cus->save()){
  $order = new Orders;
  $order->user_id = $cus->id;
  $order->status = "0";
  $order->created_at = time();
  $order->snipping_method = $post['snipping_method'];
  $order->payment_method = $post['payment_method'];
  if($order->save()){
   
foreach($cartStore as $ct){
 
    $orderDetail = new OrderDetail();
    $orderDetail->order_id = $order->id;
    $orderDetail->product_id = $ct->id ;
    $orderDetail->quantity = $ct->qtt;
    $orderDetail->price= $ct->page;

}
if($orderDetail->save()){

 \Yii::$app->mail->compose()
 ->setFrom('hieutt1704@gmail.com')
 ->setTo($cus->email)
 ->setSubject('This is a test mail ' )
 ->send();
 $cart = new Cart();
 $cart->deleteAll();
}else{
  
}
  }

}else{
  return $this->render("index",[
    'model'=>$model,
]);
}
}
     return $this->render("index",[
         'model'=>$model,
     ]);
     
 }


}

?>