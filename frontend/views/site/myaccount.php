<?php

use common\models\customers;
?>
<?php print_r( Yii::$app->user->identity)?>
<div class="container">
<form action="" method="POST" role="form">
    <legend>Thông tin tài khoản</legend>

    <div class="form-group">
        <label for="">name</label>
        <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%" value ="<?php echo Yii::$app->user->identity ?>">
    </div>
    <div class="form-group">
        <label for="">Phone number</label>
        <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%">
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" placeholder="Input field" style="width:60%">
    </div>
   

    

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

  
    
</div>