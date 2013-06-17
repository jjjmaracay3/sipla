<h1> Listado de funcionarios </h1>
<?php
echo 'Probando la vista index!!';
?>
<table>

	<tr>
	<th>Numero</th>
	<th>Nombre</th>
	<th>Cargo</th>
	<th>Ver</th>
	<th>Editar</th>

	</tr>	
	<?php foreach ($funcionario as $t){?>
	<tr>	
	<td><?php echo $t->nu_funcionario;?></td>
	<td><?php echo $t->al_nombre_funcionario;?></td>
	<td><?php echo $t->al_cargo_funcionario;?></td>
	<td><?php echo CHtml::link('Ver',array('view','nu_funcionario'=>$t->nu_funcionario))?></td>
	<td><?php echo CHtml::link('Editar',array('edit','nu_funcionario'=>$t->nu_funcionario))?></td>
	
	</tr>
	<?php } ?> 
</table>
