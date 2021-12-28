<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdentitasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="identitas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_identitas') ?>

    <?= $form->field($model, 'uttp') ?>

    <?= $form->field($model, 'merk_buatan') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'volume_nominal') ?>

    <?php // echo $form->field($model, 'jml_kompartemen') ?>

    <?php // echo $form->field($model, 'merk_kendaraan') ?>

    <?php // echo $form->field($model, 'no_polis') ?>

    <?php // echo $form->field($model, 'tgl_pemeriksaan') ?>

    <?php // echo $form->field($model, 'id_pemilik') ?>

    <?php // echo $form->field($model, 'id_metode') ?>

    <?php // echo $form->field($model, 'nip_pemeriksa') ?>

    <?php // echo $form->field($model, 'nip_penguji') ?>

    <?php // echo $form->field($model, 'id_uraian') ?>

    <?php // echo $form->field($model, 'nip_kepala') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
