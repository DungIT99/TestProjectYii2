<?php
use yii\helpers\Html;
$this->title = ($model)?$model->name : 'not fount';
?>
<div class="container-detail container">
    <?php  if($model):?>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <img style="width:70%"src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/images/<?php echo $model->image;?>" alt="<?php echo $model->name ?>">
    </div>
    
    <div >
    <span> Price :</span>
    <span> <?php echo $model->page ?>.000</span>
       
    </div>
    <br>
    
    <div id="layout">
    <button type="button" class="btn btn-success">-</button>
    
    <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
    <button type="button" class="btn btn-success">+</button>
    </div>
    <br/>
        <?=Html::a('Add to cart',['cart/add-cart','id'=>$model->id]) ?>
    
<?php else: ?>

<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>error 444</strong> Khong co thong tin sach!
</div>


<?php endif; ?>
</div>
