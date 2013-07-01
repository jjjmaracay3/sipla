<?php
/* @var $this FuncionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcionarios',
);

$this->menu=array(
	array('label'=>'Create Funcionario', 'url'=>array('create')),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>
<?php echo Yii::t('app','Name'); ?>
<?php echo Yii::t('app','Save'); ?>
<?php 
$var=10;
echo Yii::t('app',"Update # {VAR}",array('{VAR}'=>$var)); ?>


<h1>Funcionarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
