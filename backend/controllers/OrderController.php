<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Orders;
class OrderController extends Controller{

    
 public function actionIndex(){
    $order = new Orders();
    $orders = $order->getOrder();
return $this->render('index',['orders'=>$orders]);
 }
 

} 

?>