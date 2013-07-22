<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm wqwq*/
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php if($model->isNewRecord==false){$modelb=DetalleSolicitud::model()->findByPk($model->nu_solicitud);}

	echo $form->errorSummary($model,$modelb); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_funcionario'); ?>
		<?php echo $form->textField($model,'nu_funcionario'); ?>
		<?php echo $form->error($model,'nu_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_numero_departamento'); ?>
		<?php echo $form->textField($model,'nu_numero_departamento'); ?>
		<?php echo $form->error($model,'nu_numero_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_estado_solicitud'); ?>
		<?php echo $form->dropdownList($model,'al_estado_solicitud',array('1'=>'Activa','0'=>'Atendida')); ?>
		<?php echo $form->error($model,'al_estado_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_solicitud'); ?>
		<?php #echo $form->textField($model,'fe_solicitud');
		$this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
			'model'=>$model,
			'attribute'=>'fe_solicitud',
			'language' => 'es',
			'options' => array(
								'dateFormat'=>'yy-mm-dd',
								'constrainInput'=>'false',
								'duration'=>'fast',
								'showAnim'=>'slide',
								)) );


		 ?>
		 
		<?php echo $form->error($model,'fe_solicitud'); ?>
	</div>

	
<div class="row">
		<?php echo $form->labelEx($modelb,'nu_clasificacion_articulo'); ?>
		<?php echo $form->textField($modelb,'nu_clasificacion_articulo'); ?>
		<?php echo $form->error($modelb,'nu_clasificacion_articulo'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($modelb,'nu_tipo_articulo'); ?>
		<?php echo $form->textField($modelb,'nu_tipo_articulo'); ?>
		<?php echo $form->error($modelb,'nu_tipo_articulo'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($modelb,'nu_articulo'); ?>
		<?php echo $form->textField($modelb,'nu_articulo'); ?>
		<?php echo $form->error($modelb,'nu_articulo'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($modelb,'nu_cantidad_solicitada'); ?>
		<?php echo $form->textField($modelb,'nu_cantidad_solicitada'); ?>
		<?php echo $form->error($modelb,'nu_cantidad_solicitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelb,'al_justificacion'); ?>
		<?php echo $form->textField($modelb,'al_justificacion'); ?>
		<?php echo $form->error($modelb,'al_justificacion'); ?>
	</div>



	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'success',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

	<div class="btn-group">
  <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
    Danger 
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->