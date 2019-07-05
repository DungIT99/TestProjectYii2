<?php

namespace frontend\component;
// use  yii\web\Session;
use Yii;
class Cart
{  
public $cartStore ;
public function __construct(){
$this->cartStore = Yii::$app->session['cart'];
}

    public function add($data,$quantity=1){
        if(isset($this->cartStore[$data->id])){
            $this->cartStore[$data->id]->qtt=$this->cartStore[$data->id]->qtt+1;
        }else{
            $this->cartStore[$data->id]=$data;
            $this->cartStore[$data->id]->qtt = $quantity;
            Yii::$app->session['cart'] = $this->cartStore;
        }
}
public function remove($data){
unset($this->cartStore[$data->id]);
Yii::$app->session['cart'] = $this->cartStore;
}
public function update($id,$quantity){
    $this->cartStore[$id]->qtt = $quantity;
    Yii::$app->session['cart'] = $this->cartStore;
}
public function deleteAll(){
    $this->cartStore=[];
    Yii::$app->session['cart'] = $this->cartStore;
    
}
public function getCost(){
   $total = 0;
if($this->cartStore){
    foreach($this->cartStore as $item){
        $total +=  $item->page * $item->qtt;
    }
}
return $total;
  
}


}
