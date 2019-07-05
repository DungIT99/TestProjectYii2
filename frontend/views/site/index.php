<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\productWidget;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<?= productWidget::widget() ?>

<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
            
           <div class ="alert alert-success" id="datHang"></div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <?php echo Html::a('go to cart',[ 'cart/index'], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>
