<?php

namespace frontend\component;
use Yii;
class Heart

{
public $heart ;

public function __construct(){
    $this->heart = Yii::$app->session['heart'];
}

public function add($data){
$this->heart[$data->id] = $data;
Yii::$app->session['heart'] = $this->heart ;

}




}


?>