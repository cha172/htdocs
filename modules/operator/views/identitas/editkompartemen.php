<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>                  
      
<div class="row">
	<div class="col-md-12">
                          
        <?php $form = ActiveForm::begin(['layout'=>'horizontal','id'=>'frmeditkom']); ?>
          <div class="col-md-12">
          
        <?= $form->field($kompartemenedit, 'jenis')->dropDownList(['Komp. I'=>'Komp. I','Komp. II'=>'Komp. II','Komp. III'=>'Komp. III','Komp. IV'=>'Komp. IV'],['prompt'=>'-Pilih-']) ?>
        </div>
          <div class="col-md-12">
        <?= $form->field($kompartemenedit, 't1')->textInput() ?>
         </div>
          <div class="col-md-12">
        <?= $form->field($kompartemenedit, 't2')->textInput() ?>
         </div>
          <div class="col-md-12">
        <?= $form->field($kompartemenedit, 't3')->textInput() ?>
         </div>
          <div class="col-md-12">
        <?= $form->field($kompartemenedit, 't4')->textInput() ?>
         </div>
          <div class="col-md-12">
        <?= $form->field($kompartemenedit, 'T')->textInput() ?>
         </div>
          <div class="col-md-12">
        <?= $form->field($kompartemenedit, 'D')->textInput() ?>  
         </div>
          <div class="col-md-12">             
        <?= $form->field($kompartemenedit, 'P')->textInput() ?> 
         </div>
          <div class="col-md-12">            
        <?= $form->field($kompartemenedit, 'Q')->textInput() ?>
         </div>
          <div class="col-md-12">
        <?= $form->field($kompartemenedit, 'S')->textInput() ?>    
         </div>
          <div class="col-md-12">        
        <?= $form->field($kompartemenedit, 'R')->textInput() ?>  
         </div>
          <div class="col-md-12">        
        <?= $form->field($kompartemenedit, 'L')->textInput() ?>
       </div>
        <div class="col-md-12">
            <?= Html::submitButton('Save', ['class' => 'btn btn-sm btn-success']) ?>
            <button type="button" class="btn btn-sm btn-danger" pull-right data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
        
        <?php ActiveForm::end(); ?>
    </div>
</div>