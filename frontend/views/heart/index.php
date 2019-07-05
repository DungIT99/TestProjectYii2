

<table class="table ">
    <thead>
        <tr>
            <th>Stt</th>
            <th>ảnh</th>
            <th>Name</th>
            <th>price</th>
            
        </tr>
    </thead>
    <tbody>
    <?php if($book):foreach($book as $b): $n=1;?>
        <tr>
      
            <td><?php echo $n ?></td>
            <td><img style="width:40px" src="<?=Yii::$app->getUrlManager()->getBaseUrl()?> /images/<?php echo $b->image ?>"> </td>
            <td><?php echo  $b->name ?></td>
            <td><?php echo  $b->page ?></td>
           
        </tr>
        <?php $n+=1; endforeach; endif ?>
    </tbody>
</table>



