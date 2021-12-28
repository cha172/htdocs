<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\admin\page\SignAsset;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

SignAsset::register($this);

?>
<style>
.headerx {
  background-image: linear-gradient(#005705,#039ba8);
}
</style>

<div id="sign-wrapper">
<div class="sign-in form-horizontal shadow rounded no-overflow">
    <!-- Brand -->
    <div class="text-center text-strong h4"><font color="white">UNIT PELAKSANAAN TEKNIS METROLOGI LEGAL PEKANBARU</font>
    <br><br></div>
        <div class="headerx">
            <div class="form-group">
                <div class="sign-text">
                    <span class="text-strong">E-TERA</span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-header -->
		<?php

$form = ActiveForm::begin([
    'id' => 'sign-in'
]);
?>
		
		<div class="sign-body">
				
				<div class="form-group">		
							<?=$form->field($model, 'username')->textInput(['class' => 'username form-control input-sm'])?>
				</div>
				
				<div class="form-group">
							<?=$form->field($model, 'password')->passwordInput(['class' => 'password form-control input-sm'])?>
				</div>
				
				<div class="form-group">
					<?=$form->field($model, 'captcha')->widget(\yii\captcha\Captcha::classname(), [])?>
			     </div>
		</div>
		
		<div class="form-group">
			<div class="input-group input-group-lg rounded no-overflow">
					<?=$form->field($model, 'rememberMe')->checkbox()?>
			</div>
		</div>
		
		<div class="form-group">
			<?=Html::submitButton('Login  <i class="glyphicon glyphicon-log-in"></i>', ['class' => 'text-strong btn btn-primary btn-sm btn-block no-margin rounded','id' => 'login-btn','name' => 'login-button'])?>
		</div>
		<br>
					
		<?php

ActiveForm::end();
?>
		
</div>
</div>
