<?php
use app\components\MyWidget;
?>

<?php $this->beginBlock('Block1') ?>
<h1> Заголовок страницы </h1>
<?php $this->endBlock()?>

<h3>Show action</h3>
<?php //echo MyWidget::widget(['name' => 'Vasya']);?>
<?php MyWidget::begin()?>
<h1>Привет мир</h1>
<?php MyWidget::end()?>

<?php //foreach ($cats as $cat){
//    echo '<ul>';
//    echo '<li>'. $cat->user_id. '</li>';
////    $models = $cat->id;
////    foreach ($models as $model){
////        echo '<ul>';
////        echo '<li>'. $model->id . '</li>';
////        echo '</ul>';
////    }
//    echo '</ul>';
//}?>

<?php //debug($cats);?>
<?php //echo count($cats[0]->shop);?>
<?php //debug($cats);?>
<?php //foreach ($cats as $cat){
//    echo $cat->name . '<br>';
//}?>

<!--<button class="btn btn-success" id="btn">click me..</button>-->

<?php
//$this->title = 'Одна статья';
//$this -> registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset'])
//?>

<?php
//$js=<<<JS
//$('#btn').on('click', function (){
//    $.ajax({
//    url: 'index.php?r=post/test',
//    data: {test:'123'},
//    type: 'POST',
//    success: function (res){
//        console.log(res);
//    },
//    error: function (){
//        alert('Error!');
//    }
//    })
//})
//
//JS;

//$this->registerJS($js);
//?>
