<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login">

            <?php $form = ActiveForm::begin(['id' => 'login']); ?>

                <?= $form->field($model, 'username')->textInput(['id' => 'username']) ?>

                <?= $form->field($model, 'password')->passwordInput(['id' => 'password']) 

                ?>
               <a href="#" class="forgot">forgot password?</a>
  <input type="submit" value="Sign In">
</div>
<div class="shadow"></div>
            <?php ActiveForm::end(); ?>

        


      
  
  
