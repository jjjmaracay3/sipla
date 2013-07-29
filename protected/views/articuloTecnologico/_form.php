<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'articulo-tecnologico-form',
	'enableAjaxValidation'=>false,
)); ?>
	 

	<p class="help-block"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?></p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropdownListRow($model,'nu_tipo_articulo',CHtml::listData(TipoArticulo::model()->findAll(),
		'nu_tipo_articulo','al_nombre_tipo'),array('empty'=>'Seleccione Tipo')); ?>

	<?php echo $form->textFieldRow($model,'al_nombre_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_marca_articulo',array('class'=>'span5')); ?>

	<?php $this->widget('bootstrap.widgets.TbTypeahead', array(
    'name'=>'typeahead',
    'options'=>array(
        'source'=>array('Acer', 'Apple', 'Asus', 'Cisco', 'Compaq', 'Dell', 'HP', 'IBM y Lenovo', 'Lanpro', 'Samsung', 'Siragon', 'Sony', 'Toshiba', '3com','Gennius','Microsoft','Taurus','Kingston','Assus','SoneView','Intel','AMD',
        	'Biostar','MSI','Foxconn','Ashrock','ATI','Nvidia GeForce','Stylus','Lexmark','Canon','Xerox','Epson','Benq','MarkVision','Centon','Spectek','Sun','Kavac','Imation','Verbatim','Fujifilm','Quantum','Maxell','Adobe','Linksys','Tp-link','D-link',
        	'Corsair','Apc','Avtek'),
        'items'=>10,
        'matcher'=>"js:function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
        }",
            ),
)); ?>




	<?php echo $form->textFieldRow($model,'al_modelo_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_descripcion_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'de_precio_unitario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_color_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_unidad_medida',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reinicializar')); ?>

	</div>



<?php $this->endWidget(); ?>
