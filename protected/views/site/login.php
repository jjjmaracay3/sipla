<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Sesion',
);
?>

<div class="row-fluid">
	<div class="span4 vr-right">
		<fieldset>
	<legend>Iniciar Sessi&oacute;n</legend>


<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	//'id'=>'inlineForm',
    'type'=>'inline',
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textFieldRow($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordFieldRow($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Si olvido <kbd>usuario</kbd>/<kbd>clave</kbd>  consulte a la oficina de Desarrollo Tecnologico.
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Entrar',array("class"=>"btn btn-primary")); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>
	</div>
	<div class="span8">Descripci&oacute;n
	<p class="well"  style="font-size: 14px; text-align: justify;" >
    <b>El Sistema de Planificación de Adquisiciones Tecnológicas (SIPLA),</b> Está dirigido a la optimización de los procesos de solicitudes y planificación de adquisiciones
    de equipos tecnológicos informáticos, por parte del personal administrativo que hace vida en el Colegio Universitario de Caracas - CUC. Según tu rol en el sistema podrás 
    registrar de forma sencilla tu solicitud sobre cualquier equipo de cómputo o insumo que tu departamento necesite en su labor diaria, también puedes planificar de forma sencilla y confiable
    los largos planes de compra y hasta crear con un solo clic las requisiciones de compra que siempre tienen carácter de urgencia. 
    <a href="#" rel="tooltip" title="First tooltip">Descargar manual de usuario aquí</a>.

</p></div>
</div>
