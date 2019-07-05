<?php
use yii\helpers\Html;
?>
<?php if($cat):foreach($cat as $a):
	 ?>
							<li>
								<?php echo Html::a($a["name"],['/site/getcategory/','id'=>$a["id"]]) ?>
							</li>
<?php endforeach; endif ?>
						
                 