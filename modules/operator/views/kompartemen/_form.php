<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\assets\admin\table\ColorAsset;

ColorAsset::register($this);

?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Kompartemen <span> Cerapan</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Kompartemen</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
    
            <div class="row">
            <div class="col-md-6">
                <div class="panel panel-lilac">
                <div class="panel-body">
                
                    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>
                
                    <?= $form->field($model, 't1')->textInput() ?>
                
                    <?= $form->field($model, 't3')->textInput() ?>
                
                    <?= $form->field($model, 'T')->textInput() ?>
                
                    <?= $form->field($model, 'D')->textInput() ?>
                
                    <?= $form->field($model, 'P')->textInput() ?>
                
                    <?= $form->field($model, 'Q')->textInput() ?>
                
                    <?= $form->field($model, 'S')->textInput() ?>
                
                    <?= $form->field($model, 'R')->textInput() ?>
                
                    <?= $form->field($model, 'L')->textInput() ?>
                
                    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>
                
                    <?= $form->field($model, 'id_hasil')->textInput() ?>
                
                    <?= $form->field($model, 'id_identitas')->textInput() ?>
                
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                
                    <?php ActiveForm::end(); ?>
                
                </div>
</div>
</div>
</div>
</div>
</section>
