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
		<?php echo $form->dropDownList($modelb,'nu_clasificacion_articulo',
		CHtml::ListData(ClasificacionArticulo::model()->findAll(),'nu_clasificacion_articulo','al_nombre_clasificacion'),
			array(
				'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('DetalleSolicitud/Selectdos'),
					'update'=>'#'.CHtml::activeId($modelb,'nu_tipo_articulo'),
					'beforeSend' => 'function(){
					   $("#Registro_id_nivel_dos").find("option").remove();
					}',
				),'prompt'=>'Seleccione'	
			)
		); ?>
		<?php echo $form->error($modelb,'nu_clasificacion_articulo'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($modelb,'nu_tipo_articulo'); ?>
		<?php echo $form->dropDownList($modelb,'nu_tipo_articulo',array(),
			array('prompt'=>'Seleccione')
		); ?>
		<?php echo $form->error($modelb,'nu_tipo_articulo'); ?>
	</div>


<div class="row">
		<?php echo $form->labelEx($modelb,'nu_articulo'); ?>
		<?php echo $form->dropDownList($modelb,'nu_articulo',array(),
			array('prompt'=>'Seleccione')
		); ?>
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


<table class="templateFrame grid" cellspacing="0">
                <thead class="templateHead">
                    <tr>
                        <td>
                            <?php echo $form->labelEx(DetalleSolicitud::model(),'nu_clasificacion_articulo');/* estos son los labels */?>
                        </td>
                        <td>
                            <?php echo $form->labelEx(DetalleSolicitud::model(),'nu_tipo_articulo');?>
                        </td>
                        <td colspan="2">
                            <?php echo $form->labelEx(DetalleSolicitud::model(),'nu_articulo');?>
                        </td>
                    </tr>
                </thead>
                Aca es donde se van a mostrar tooodo lo que se clone del textarea
                <tbody class="templateTarget">
                <?php 
                         $i = 0;
                         $detalles=array();//por ahora es vacio pero este por lo general es Person::model()->findAll() con las condiciones que necesites
                         foreach($detalles as $detalle): 
                 ?>
                    <tr class="templateContent">
                        <td>
                            <?php echo $form->textField($detalle,"[$i]nu_clasificacion_articulo",array('style'=>'width:100px')); ?>
                        </td>
                        <td>
                            <?php echo $form->textField($detalle,"[$i]nu_tipo_articulo",array('style'=>'width:100px')); ?>
                        </td>
                        <td>
                            <?php echo $form->dropDownList($detalle,"[$i]nu_articulo",array('1'=>'color 1','2'=>'color 2'),array('style'=>'width:100px','prompt'=>'')); ?>
                        </td>
                        <td>
                            <div class="remove"><?php echo Yii::t('ui','Remove');?>
                             <?php echo CHtml::hiddenField("rowIndex_$i",$i,array('class'=>'rowIndex'));?>
                        </td>
                    </tr>
                    <?php
                         $i++;
                        endforeach;
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <div class="add"><?php echo Yii::t('ui','New');//aca puedes colocar un texto un boton o lo que quieras?></div>
                             Todo lo que hay dentro del textarea es lo que se va a clonar, el {0} se usa para llevar el numero de la fila 
                             que empieza en cero y va aumentando
                          <!-- form   <textarea class="template" rows="0" cols="0">-->
                                <tr class="templateContent">
                                    <td>
                                        <?php echo CHtml::textField("Person[{0}][firstname]",'',array('style'=>'width:100px')); ?>
                                    </td>
                                    <td>
                                        <?php echo CHtml::textField("Person[{0}][lastname]",'',array('style'=>'width:100px')); ?>
                                    </td>
                                    <td>
                                        <?php echo CHtml::dropDownList("Person[{0}][eyecolor_code]",'',array('1'=>'color 1','2'=>'color 2'),array('style'=>'width:100px','prompt'=>'')); ?>
                                    </td>
                                    <td>
                                        <div class="remove"><?php echo Yii::t('ui','Remove');// tambn puedes colcar texto o cual quier boton ?></div>
                                        <?php echo CHtml::hiddenField('rowIndex_{0}','{0}',array('class'=>'rowIndex'));?>Este campo es el que tiene en cuenta desde donde debe 
                                         empezar a aumentar el numero por defecto es "0" pero aumenta en caso de que ya hayan registros
                                    </td>
                                </tr>
                            </textarea>
                        </td>
                    </tr>
                </tfoot>
            </table>


<?php $this->endWidget(); ?>

</div><!-- form -->