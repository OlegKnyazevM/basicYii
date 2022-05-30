<?php
/** @var app\models\TestForm $model */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1> TEST ACTION</h1>


<?php $form = ActiveForm::begin() ?>
<?php $form->field($model, 'name')->textInput()?>
<?php $form->field($model, 'email')->textInput()?>
<?php $form->field($model, 'text')->checkbox([
    'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
]) ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Вход', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end()?>
