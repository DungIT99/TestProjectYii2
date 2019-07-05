<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\backend\model;
use backend\models\Category;
use yii\helpers\ArrayHelper;
class navWidget extends Widget
{
    public $message;
    public function init()
    { 
        $a = new category();
        $cat = $a->getCates() ;
        $this->message = $a->getCates();
        parent::init();
       
    }
    public function run()
    {
        return $this->render('navWidget',['cat'=> $this->message]);
}
}


?>