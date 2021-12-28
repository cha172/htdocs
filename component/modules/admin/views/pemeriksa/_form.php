<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\assets\admin\table\ColorAsset;
ColorAsset::register($this);

?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Manajemen <span> Pemeriksa</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Pemeriksa</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
    
            <div class="row">
            <div class="col-md-6">
                <div class="panel panel-lilac">
                <div class="panel-body">
                          
            	

    <?php

    $form = ActiveForm::begin(['layout'=>'horizontal']);
    ?>

    <?=$form->field($model, 'nip_pemeriksa')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'nama')->textInput(['maxlength' => true])?>

    <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success pull-right'])?>
    </div>

    <?php

    ActiveForm::end();
    ?>

</div>
</div>
</div>
</div>
</div>
</section>

