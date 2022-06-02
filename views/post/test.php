<?php
/** @var app\models\TestForm $model */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1> TEST ACTION</h1>

<?php if (Yii::$app->session->hasFlash('success')):?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success');?>
    </div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('error')):?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error');?>
    </div>
<?php endif;?>


<?php  $form = ActiveForm::begin(['options' =>['id' => 'testForm']]) ?>
<?php echo $form->field($model, 'name')->textInput()->label('Имя')?>
<?php echo $form->field($model, 'email')->input('email')?>
<?php echo $form->field($model, 'text')->textarea()->label('Текст сообщенния')?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?php echo Html::submitButton('Вход', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end()?>
