<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewSetor */
/* @var $form ActiveForm */
?>
<div class="TambahsetoranForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tgl_jual') ?>
        <?= $form->field($model, 'jumlah') ?>
        <?= $form->field($model, 'terjual') ?>
        <?= $form->field($model, 'untung') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- TambahsetoranForm -->
