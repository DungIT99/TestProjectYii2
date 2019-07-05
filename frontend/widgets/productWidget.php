<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Books;

class productWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
       $b = new books();
       $book = $b->getBook();
return $this->message = $book;
    }

    public function run()
    {
       return $this->render('productWidget',['book'=>$this->message]);
    }
}

?>