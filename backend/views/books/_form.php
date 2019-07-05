<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\category;

/* @var $this yii\web\View */
/* @var $model backend\models\books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


   <!-- $form->field($model, 'file')->fileInput() -->
    <?= $form->field($model, 'image')->textInput(['id'=>"bookImage",'maxlenght'=> true,'placeholder'=>'click to get image'])?>
    <?= $form->field($model, 'cate')->dropDownList(
      $cate,
        [
            'prompt'=>'chọn loại sách'
        ]
    ) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->textInput() ?>

    <?= $form->field($model, 'slug')->textarea(['id' => 'content_book']) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'publish_at')->textInput() ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

