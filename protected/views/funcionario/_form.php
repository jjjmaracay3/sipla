<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'funcionario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropdownListRow($model,'nu_numero_departamento',CHtml::listData(Departamento::model()->findAll(),
		'nu_numero_departamento','al_nombre_departamento'),array('empty'=>'Seleccione Departamento')); ?>

	<?php echo $form->dropdownListRow($model,'nu_rol',CHtml::listData(RolFuncionario::model()->findAll(),
		'nu_rol','al_nombre_rol'),array('empty'=>'Seleccione Rol')); ?>

	<?php echo $form->textFieldRow($model,'al_nombre_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_apellido_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_cedula_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->dropdownListRow($model,'al_cargo_funcionario',array('2'=>'Jefe de Area','1'=>'Analista','0'=>'Soporte')); ?>

	<?php echo $form->textFieldRow($model,'al_correo_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5')); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5')); ?>

	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
