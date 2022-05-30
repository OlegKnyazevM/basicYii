<?php $this->beginBlock('Block1') ?>
<h1> Заголовок страницы </h1>
<?php $this->endBlock()?>

<h3>Show action</h3>
<button class="btn btn-success" id="btn">click me..</button>

<?php
//$this->title = 'Одна статья';
//$this -> registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset'])
?>

<?php
$js=<<<JS
$('#btn').on('click', function (){
    $.ajax({
    url: 'index.php?r=post/test',
    data: {test:'123'},
    type: 'POST',
    success: function (res){
        console.log(res);
    },
    error: function (){
        alert('Error!');
    }
    })
})

JS;

$this->registerJS($js);
?>
