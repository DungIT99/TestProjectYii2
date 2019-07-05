<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
              ['class' => 'yii\grid\SerialColumn',
              'header' => 'STT',
                'headerOptions'=>[
                    'style'=>'width:15px; text-align:center',
                ],
                    'contentOptions' => [
                        'style'=>'width:30px; text-align:center',

                    ]

        
              ],
              [
                  'class'=>'yii\grid\CheckBoxColumn',
              ],
             
              
            'id',
            'name',
           ['attribute'=>'status',
           'content'=>function($model){
               if($model->status == 10){
                   return '<span style="color:red; ">khong kich hoat</span>';
               }else{
                return '<span style="color:blue"> kich hoat</span>';
               }
           }
            ],
            [
                'attribute'=>'created_at',
                'content'=>function($model){
                    return date('d-m-Y',$model->created_at);
                }
            ],
            [
                'attribute'=>'updated_at',
                'content'=>function($model){
                    return date('d-m-Y',$model->updated_at);
                }
            ],
          

            ['class' => 'yii\grid\ActionColumn',
            'buttons' =>[
                'view' => function($Url,$model){
                    return Html::a('View',$Url,['class'=>'btn btn-xs btn-primary']);
                },
                'update' =>function($Url,$model){
                    return Html::a('Edite',$Url,['class'=>'btn btn-xs btn-success']);
                },
                'delete' =>function($Url,$model){
                    return Html::a('Delete',$Url,['class'=>'btn btn-xs btn-danger']);
                },
            ]
        
        ],
        ],
    ]); ?>

    


</div>
