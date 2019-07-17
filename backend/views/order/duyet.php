<?php
use frontend\component\Cart;
use yii\helpers\Html;
$cart = new Cart();
$cartStore = $cart->cartStore;
var_dump($cartStore);
?>
<?php if($order): foreach ($order as $or): ?>
<?php  ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->x`
    <section class="content-header">
      <ol class="breadcrumb" style="left: 10px">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="order.php">Danh sách đơn hàng</a></li>
        <li class="active">Chi tiết đơn hàng</li>
      </ol>
       <!-- <h1>Chi tiết đơn hàng</h1> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <div class="row">
          
            <div class="col-md-6">
              <h3>Thông tin đơn hàng</h3>
              <table class="table table-hover ">
                <tr>
                  <td>ID</td>
                <td><?php echo $or->id   ?></td>
                </tr>
                <tr>
                  <td>Ngày đặt</td>
                  <td> <?php echo Yii::$app->formatter->asDate( $or->created_at, 'dd-MM-yyyy') ?></td>
                </tr>
                <tr>
                  <!-- <td>Tổng tiền</td>
                  <td></td> -->
                </tr>
               <tr  class="myTable">
                 
              
                  <td class="updateTable">
                  <span>Trạng thái </span>
                   <?php if($or->status ==2) :?>
                      <span class="label label-primary">Đã giao hàng</span>
                     
                   <?php elseif ($or->status == 1):?>
                      <span class="label label-danger">Đã duyệt</span>
                      <?php echo Html::a("Bỏ Duyệt",['order/boduyet'], ['class'=>"label label-success boduyet",'id'=>$or->id,'status'=>$or->status]) ?>
                      <?php echo Html::a("Giao hàng",['order/giaohang'], ['class'=>"label label-primary giaohang",'id'=>$or->id,'status'=>$or->status]) ?>
                    
                    <?php else : ?>
                      <span class="label label-dangerlabel label-danger">Chưa duyệt</span>
                     <?php echo Html::a("Duyệt",['order/duyethang'], ['class'=>"label label-primary duyet",'id'=>$or->id,'status'=>$or->status]) ?>
                     <?php endif ;?>
                     </td>
                </tr>
                <?php endforeach; endif; ?>
              </table>
            </div>
            <div class="col-md-6">
              <h3>Thông tin người mua</h3>
              
              <?php if($customer):foreach($customer as $cu): ?>
              <table class="table table-hover">
                <tr>
                  <td>Tên</td>
                  <td><?php echo $cu->username  ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $cu->email   ?></td>
                </tr>
                <tr>
                  <td>Số điện thoại</td>
                  <td><?php echo $cu->phone   ?></td>
                </tr>
                <tr>
                  <td>Địa chỉ</td>
                  <td><?php echo $cu->address   ?></td>
                </tr>
              </table>
<?php endforeach; endif;?>
            </div>
          </div>
        </div>
        <div class="box-body">
         <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hành ảnh</th>
            <th>Màu sắc</th>
            <th>Kích thước</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
          </tr>
        </thead>
        <tbody>
          <?php if($cartStore):foreach($cartStore as $ca) : $n = 1?>
           
         <tr> 
         <td><?php echo $n ?></td>
         <td><?php echo $ca->$n ?></td>
         <td><?php echo $ca->$n ?></td>
         <td><?php echo $ca->$n ?></td>
         <td><?php echo $ca->$n ?></td>
         
         </tr>
<?php $n+=1; endforeach;endif; ?>
        
        </tbody>
      </table>
    </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
