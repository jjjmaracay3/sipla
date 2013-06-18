<h1>Detalle del Funcionario</h1>
<b>Numero</b>
<?php echo $model->nu_funcionario;?><br>
<b>Nombre</b>
<?php echo $model->al_nombre_funcionario;?><br>
<b>Cargo</b>
<?php echo $model->al_cargo_funcionario;?><br>
<?php echo CHtml::link('Atras',array('index'));?>