<?php 
$this->title ="Thông tin đặt hàng ";
use yii\widgets\ActiveForm;
use yii\models\Mycart;
use yii\helpers\Html;
use frontend\assets\mycartAsset;
use frontend\component\Cart;
mycartAsset::register($this);
$cart = new Cart();
$cartStore= $cart->cartStore;
$total = $cart->getCost();
?>
<div class="container">
    
   
   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
       
  <h3 style="color:blue">Thông tin người nhận</h3>
  <hr>
   
<?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'snipping_method')->textInput() ?>

    <?= $form->field($model, 'payment_method')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>

    
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Sản phẩm</th>
                    <th>số lượng</th>
                    <th>giá</th>
                    <th>tổng</th>
                </tr>
            </thead>
            <tbody>
<?php if($cartStore):foreach ($cartStore as $ca):
$n=1;
    ;?>
                <tr>
       <td><?php echo $n ?></td>
              <td><?php echo $ca->name ?></td>
              <td><?php echo $ca->qtt ?></td>
              <td><?php echo $ca->page ?></td>
              <td><?php echo number_format( $ca->page*$ca->qtt) ?> VNĐ</td>
                </tr>
<?php $n++; endforeach; endif;?>
<b>Tong don hang : <?php echo number_format($total) ?> VNĐ </b>
            </tbody>
         
        </table>
        
    </div>
    
    <?php  ActiveForm::end(); ?>
   
    
</div>
