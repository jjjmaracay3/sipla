<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nu_tipo_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_clasificacion_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_nombre_tipo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_descripcion_tipo',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
