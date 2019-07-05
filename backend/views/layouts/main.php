<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap ">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse ',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
 <div class="container body" >
        
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">

    <div class="panel panel-primary right">
        <div class="panel-body">
           
           <ul class="list-group">
           <li class="list-group-item">
                     <?php echo Html::a('Trang chủ',['/site']) ?>
               </li>
             
               <li class="list-group-item">
                     <?php echo Html::a('Quản Lý Danh Mục',['/category/index']) ?>
               </li>
             
               <li class="list-group-item">
                     <?php echo Html::a('Quản Lý Sach',['/books/index']) ?>
               </li>
               <li class="list-group-item">
                     <?php echo Html::a('Quản Thuộc tính',['/attribute/index']) ?>
               </li>
             
           </ul>
      
     </div>
     
    </div>
       
 </div>
        
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 left">
       
      
       <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
  
       
        
   
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>


<div class="modal fade" id="modal-id">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
            <iframe  width="765" height="550" frameborder="0" src="../../filemanager/dialog.php?type=2&field_id=book_image"> </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               
            </div>

        </div>
    </div>
</div>


    <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
