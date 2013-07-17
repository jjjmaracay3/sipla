<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nu_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_numero_departamento',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_rol',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_nombre_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_apellido_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_cedula_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_cargo_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_correo_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'session',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
