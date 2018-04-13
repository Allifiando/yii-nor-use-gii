<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Setor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_jual')->textInput(['maxLength'=> true, 'placeholder'=>'ex : 2000-12-31*']) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'terjual')->textInput() ?>

    <?= $form->field($model, 'untung')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
