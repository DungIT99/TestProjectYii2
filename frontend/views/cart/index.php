<?php
use yii\helpers\Html;
use frontend\assets\cartAsset;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
cartAsset::register($this);
 ?>
<div class="container" style="margin:5% auto">
<h3>My Cart</h3>
<hr>
<table class="table table-hover"  >
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
          
            <th>Price</th>
            <th>Total</th>
            <th>Quantity</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody class="myTable" >

    <?php if($items) : foreach ($items as $key=> $item):
    $n=1; $idx = 0;
    ?>
        <tr class="myBody">
            <td><?php echo $n ?></td>
            <td><?php  echo $item->name ?></td>

            <td id="price-<?php echo $item->id ?>"><?php  echo $item->page ?></td>
            <td class ="total" id="tt-<?php echo $item->id ?>"><?php  echo $item->qtt*$item->page ?></td>
            <td  >
<?php  $from = ActiveForm::begin(
    [
        'action'=>Yii::$app->getUrlManager()->getBaseUrl()."/cart/updateform",
        'options'=>[
            'class'=>' '
        ]
    ]
)
    ?>
            <div style="display:flex">
            <input type="hidden" name="id" value="<?php echo $item->id ?>">
            <button type="button" tt="<?php echo $item->id ?>" class="btn btn-danger tru"  >-</button>
                   <input type="text" name="update_qtt" id="qtt-<?php echo $item->id ?>" class="input_update"  value=" <?php  echo $item->qtt?>" >
           <button type="button" tt='<?php echo $item->id ?>'  class="btn btn-danger cong">+</button>
           <?php  echo Html::submitButton('Update', ['cart/updateform','id'=>$item->id], ['class'=>"btn btn-primary updateItem"]) ?>
           </div>
<?php ActiveForm::end(); ?>
<?php ?>
            
            </td>
           <td>
           <?php 
            echo Html::a('Delete',['cart/remove','id'=>$item->id],  ['class'=>'btn btn-sx btn-danger deleteItem','data-id'=>$item->id]) 
            ?>
       
           </td>
          
           <td>
           
        
        
           </td>
          
        </tr>
        
      
        
<?php $n++ ;$idx++;endforeach;endif;?>
<?php echo Html::a("Tiếp tục mua hàng", ['/site'], ['class'=>'btn btn-sx btn-primary']) ?>
       <?php echo Html::a("Xóa giỏ hàng", ['/cart/delete-all'], ['class'=>'btn btn-sx btn-danger','id'=>"delete_all"]) ?>
       <?php echo Html::a("Đặt hàng",[ '/mycart/index'], ['class'=>'btn btn-sx btn-success']) ?>
    </tbody>
</table>


</div>
