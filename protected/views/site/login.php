<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="row-fluid">
	<div class="span4 vr-right">
		<fieldset>
	<legend>Iniciar Sessi&oacute;n</legend>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>
	</div>
	<div class="span8">Descripci&oacute;n
	
	
	<p class="well">
    Lorem ipsum dolor sit <a href="#" rel="tooltip" title="First tooltip">amet</a>,
    consectetur adipiscing elit.
    Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
    Pellentesque at tellus urna.
    Ut congue, <a href="#" rel="tooltip" title="Another tooltip">nibh eu</a> interdum commodo,
    ligula urna consequat tortor, at vehicula tellus est a orci.
    Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
    Sed odio dui, pretium eu pellentesque ac,
    <a href="#" rel="tooltip" title="Yet another tooltip">tempor</a> sed sem.

</p></div>
</div>
