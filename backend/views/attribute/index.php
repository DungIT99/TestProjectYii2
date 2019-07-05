<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AttributeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attributes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Attribute', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'product_id',
           [
'attribute'=>'status',
'content'=>function($model){
    if($model -> status ==0){
        return '<span style="color:red"> khong kích hoạt </span>';
    }else{
        return '<span style="color:blue">  kích hoạt </span>';
    }
}


           ],
            'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn',
        'buttons' =>[
            'view'=> function($Url,$html){
                return Html::a('View',$Url,['class'=>'btn btn-xs btn-primary']);
            },
            'delete' =>function($Url,$html){
                   return Html::a("Delete",$Url,['class'=>'btn btn-xs btn-danger']);
            },
            'update' =>function($Url,$html){
                
                return Html::a('Update',$Url,['class'=>'btn btn-xs btn-success']);
            },
           

        ]
        
        ],
        ],
    ]); ?>


</div>
