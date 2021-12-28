<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KompartemenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kompartemen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_kompartemen') ?>

    <?= $form->field($model, 't1') ?>

    <?= $form->field($model, 't3') ?>

    <?= $form->field($model, 'T') ?>

    <?= $form->field($model, 'D') ?>

    <?php // echo $form->field($model, 'P') ?>

    <?php // echo $form->field($model, 'Q') ?>

    <?php // echo $form->field($model, 'S') ?>

    <?php // echo $form->field($model, 'R') ?>

    <?php // echo $form->field($model, 'L') ?>

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'id_hasil') ?>

    <?php // echo $form->field($model, 'id_identitas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
