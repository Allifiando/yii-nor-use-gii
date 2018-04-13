<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

use app\models\NewSetor;

$this->title = "Data Setoran"
?>

<h3>Tambah Setoran</h3>
<p>
	<?php echo Html::a('Tambah Setoran', ['tambahsetoran'],['class'=>'btn btn-success']);?>
</p>
<hr>
<h1>Data Setor not use Gii</h1>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Jual</th>
            <th>Jumlah</th>
            <th>Terjual</th>
            <th>Untung</th>
        </tr>
    </thead>
    <tbody>
        <?php $n=0; foreach ($newsetor as $key) { $n++; ?>
        <tr>
            <td><?php echo $n;?></td>
            <td><?php echo Html::encode($key->tgl_jual);?></td>
            <td><?php echo Html::encode($key->jumlah);?></td>
            <td><?php echo Html::encode($key->terjual);?></td>
            <td><?php echo Html::encode($key->untung);?></td>
            <td>
					<?php echo Html::a(
						'<i class="glyphicon glyphicon-search"></i> lihat',
						['view','id'=>$key['id']],
						['class'=>'btn btn-sm btn-primary']);?>
                    <?php echo Html::a(
						'<i class="glyphicon glyphicon-remove"></i> hapus',
						['delete','id'=>$key['id']],
                        [
                            'class'=>'btn btn-sm btn-danger',
                            'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ]]);?>
			</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
