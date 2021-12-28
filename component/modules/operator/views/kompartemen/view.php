<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kompartemen */

$this->title = $model->id_kompartemen;
$this->params['breadcrumbs'][] = ['label' => 'Kompartemens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kompartemen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kompartemen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kompartemen], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kompartemen',
            't1',
            't3',
            'T',
            'D',
            'P',
            'Q',
            'S',
            'R',
            'L',
            'jenis',
            'id_hasil',
            'id_identitas',
        ],
    ]) ?>

</div>
