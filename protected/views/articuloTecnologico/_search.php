<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nu_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_tipo_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_nombre_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_marca_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_modelo_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_descripcion_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'de_precio_unitario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_color_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_unidad_medida',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
