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




 <?php ////MANUEL: TRES COMBOS DEPENDIENTE //////////////////////////// ?>
<div class="row">
		<?php echo $form->labelEx($modelb,'nu_clasificacion_articulo'); ?>
		<?php echo $form->dropDownList($modelb,'nu_clasificacion_articulo',
		CHtml::ListData(ClasificacionArticulo::model()->findAll(),'nu_clasificacion_articulo','al_nombre_clasificacion'),
			array(
				'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('DetalleSolicitud/Selectdos'),
					'update'=>'#'.CHtml::activeId($modelb,'nu_tipo_articulo'),
					'beforeSend' => 'function(){
					   $("#nu_tipo_articulo").find("option").remove();
                       $("#nu_articulo").find("option").remove();					   					   
					}',
				),'prompt'=>'Seleccione'	
			)
		); ?>
		<?php echo $form->error($modelb,'nu_clasificacion_articulo'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($modelb,'nu_tipo_articulo'); ?>
		<?php 
		$lista_dos = array();
		if(isset($modelb->nu_tipo_articulo)){
			$id_uno = intval($modelb->nu_clasificacion_articulo); 
			$lista_dos = CHtml::listData(TipoArticulo::model()->findAll("nu_clasificacion_articulo = '$id_uno'"),'nu_tipo_articulo','al_nombre_tipo');
		}                
		echo $form->dropDownList($modelb,'nu_tipo_articulo',$lista_dos,
				array(
					'ajax'=>array(
					  'type'=>'POST',
					  'url'=>CController::createUrl('DetalleSolicitud/Selecttres'),
					  'update'=>'#'.CHtml::activeId($modelb,'nu_articulo'),
					  'beforeSend' => 'function(){
					  	$("#nu_articulo").find("option").remove();
					  }',   
						
					),
					
					'prompt'=>'Seleccione')
		); 
		?>
		<?php echo $form->error($modelb,'nu_tipo_articulo'); ?>
	</div>


<div class="row">
		<?php echo $form->labelEx($modelb,'nu_articulo'); ?>
		<?php 
		$lista_tres = array();
		if(isset($modelb->nu_articulo)){
			$id_dos = intval($modelb->nu_tipo_articulo); 
			$lista_tres = CHtml::listData(ArticuloTecnologico::model()->findAll("nu_tipo_articulo = '$id_dos'"),'nu_articulo','al_nombre_articulo');
		}
		echo $form->dropDownList($modelb,'nu_articulo',$lista_tres,
			array('prompt'=>'Seleccione')
		); 
		?>
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
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>




<?php $this->endWidget(); ?>

</div><!-- form -->