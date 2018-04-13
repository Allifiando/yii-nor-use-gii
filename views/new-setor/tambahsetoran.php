<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'Tambah Setoran';
?>
<h3>Tambah Trial</h3>

<div class="TambahsetoranForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tgl_jual')->textInput(['maxLength'=> true, 'placeholder'=>'ex : 2000-12-31*']) ?>
        <?= $form->field($model, 'jumlah') ?>
        <?= $form->field($model, 'terjual') ?>
        <?= $form->field($model, 'untung') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Kembali', ['index'],['class' => 'btn btn-success'])?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- TambahsetoranForm -->
