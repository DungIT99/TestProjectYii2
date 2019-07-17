<?php
use yii\helpers\Html;
?>


<table class="table table-hover">
<h3>duyệt đơn hàng</h3>
    <thead>
        <tr>
            <th>STT</th>
            <th>Ngưởi mua</th>
            <th>Phương thức vân chuyển</th>
            <th>Phương thức thanh toán </th>
            <th>Ngày tạo</th>
            <th>Trạng thái</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
<?php if($orders) : foreach ($orders as $order ): $n =1; ?>
        <tr>
            <td><?php echo $n ?></td>
            <td><?php echo  $order->user_id ?></td>
            <td><?php echo $order->snipping_method ?></td> 
            <td><?php echo $order->payment_method ?></td>
            <td><?php echo  Yii::$app->formatter->asDate( $order->created_at, 'dd-MM-yyyy')?></td>
            <td><?php 
            if($order->status == 0){
                echo "<span style='color:red'> Chua duyet </span>";
            }elseif($order->status == 1){
                echo "<span style='color:red'>đã duyet </span>";
            }else{
                echo "<span style='color:red'> dang giao hang </span>";
            }
            
            ?></td>
           <td><?php echo Html::a('Xem',['order/duyet','id'=>$order->id,'cusId'=>$order->user_id], ['class'=>'btn btn-success'])?></td>
        </tr>
<?php $n++;endforeach; endif; ?>
    </tbody>
</table>
