<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Orders;
use backend\models\customers;

class OrderController extends Controller{

    
 public function actionIndex(){
    $order = new Orders();
    $orders = $order->getOrder();
return $this->render('index',['orders'=>$orders]);
 }

public function actionDuyet($id,$cusId)
{   $customer = new customers();
    $order = new Orders();
    $orderDetail = $order->getOrderDetail($id);
    $cus = $customer->getCus($cusId);

    return $this->render('/order/duyet',['order'=>$orderDetail ,'customer'=>$cus]);
}
public function actionDuyethang(){
    $id = $_GET['id'];
    $status = $_GET['status'];
    var_dump($id);
    var_dump($status);
    $order=orders::find(['id'=>$id]);
    Yii::$app->db->createCommand("UPDATE orders SET status=$status WHERE id=$id")->execute();

}
public function actionBoduyet(){
    $id = $_GET['id'];
    $status = $_GET['status'];
    var_dump($id);
    var_dump($status);
    $order=orders::find(['id'=>$id]);
    Yii::$app->db->createCommand("UPDATE orders SET status=$status WHERE id=$id")->execute();

}
public function actionGiaohang(){
    $id = $_GET['id'];
    $status = $_GET['status'];
    var_dump($id);
    var_dump($status);
    $order=orders::find(['id'=>$id]);
    Yii::$app->db->createCommand("UPDATE orders SET status=$status WHERE id=$id")->execute();

}

} 

?>