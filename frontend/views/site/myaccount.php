
<div class="container">
<form action="" method="POST" role="form">
    <legend>Thông tin tài khoản</legend>
<?php if(  Yii::$app->user->identity): ?>
    
    <div class="form-group">
    <label for="">name</label>
    <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%" value ="<?php echo Yii::$app->user->identity->username ?>">
</div>
<div class="form-group">
    <label for="">Phone number</label>
    <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%" value ="<?php echo Yii::$app->user->identity->username ?>">
</div>
<div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%" value ="<?php echo Yii::$app->user->identity->username ?>">
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%" value ="<?php echo Yii::$app->user->identity->email ?>">
</div>




<button type="submit" class="btn btn-primary">Edit</button>
</form>
    
<?php else:  ?>
<h1>bạn chưa thiết lập tài khoản</h1>

<?php endif; ?>
  
    
</div>
