<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tipo-articulo-form',
	'enableAjaxValidation'=>false,
)); ?>


	<p class="help-block"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?></p>

	<?php echo $form->errorSummary($model); ?>

	
	<?php echo $form->dropdownListRow($model,'nu_clasificacion_articulo',CHtml::listData(ClasificacionArticulo::model()->findAll(),
		'nu_clasificacion_articulo','al_nombre_clasificacion'),array('empty'=>'Seleccione Clasificacion')); ?>

	<?php echo $form->textFieldRow($model,'al_nombre_tipo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_descripcion_tipo',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>


<?php $this->endWidget(); ?>
