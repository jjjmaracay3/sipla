<?php
	$SQL="SELECT * FROM clasificacion_articulo ORDER BY al_nombre_clasificacion DESC";
	$SQL=Yii::app()->db->createCommand($SQL)->queryAll();
	$cant = count($SQL);
?>
<script>
function nuevoAjax()
{ 
	var xmlhttp=false;
	try	{ xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");	}
	catch(e){
		try	{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E){
			if (!xmlhttp && typeof XMLHttpRequest!='undefined') xmlhttp=new XMLHttpRequest();
		}
	}
	return xmlhttp; 
}

function cargaContenido(action,idSelectOrigen,idSelectDestino)
{
	var selectOrigen=document.getElementById(idSelectOrigen);
	var opcionselect=selectOrigen.options[selectOrigen.selectedIndex].value;
	var selectDestino=document.getElementById(idSelectDestino);
	var ajax=nuevoAjax();
	if (action===1){
		ajax.open("GET", "SelectD1?idSelectDestino="+idSelectDestino+"&opcion="+opcionselect, true);
	}else{
		ajax.open("GET", "SelectD2?idSelectDestino="+idSelectDestino+"&opcion="+opcionselect, true);
	}
	ajax.onreadystatechange=function() 
	{ 
		if (ajax.readyState==4)
		{
			selectDestino.parentNode.innerHTML=ajax.responseText;
		} 
	}
	ajax.send(null);
}
</script>
<SCRIPT language="javascript">
    var nextinput = 0;

    function asignar(obj,valor){
            cmp = document.getElementById(obj);
            cmp.value = valor;
    }
    function addRow(tableID) {

        nextinput++;
        asignar('cant',nextinput);
         var table = document.getElementById(tableID);
         var rowCount = table.rows.length;
         var row = table.insertRow(rowCount);

         var cell1 = row.insertCell(0);
         var element1 = document.createElement("input");
         element1.type = "checkbox";
         cell1.appendChild(element1);

         var cell2 = row.insertCell(1);
         var element2 = document.createElement("select");
         element2.id = "DetalleSolicitud_nu_clasificacion_articulo-"+nextinput;
         element2.name = "DetalleSolicitud[nu_clasificacion_articulo-"+nextinput+"]";
         element2.setAttribute('onchange','cargaContenido(1,this.id,"DetalleSolicitud_nu_tipo_articulo-'+nextinput+'")');
         element2.options.add(new Option("Seleccione",""));	   
         <?php 
              for ($k=0; $k<$cant; $k++){
                      $al_nombre_clasificacion = $SQL[$k]["al_nombre_clasificacion"];
                      $nu_clasificacion_articulo = $SQL[$k]["nu_clasificacion_articulo"];
         ?>
                      var valor = "<?=$al_nombre_clasificacion?>";
                      var descripcion = "<?=$nu_clasificacion_articulo?>";
                      element2.options.add(new Option(valor,descripcion));
         <?php } ?>
         cell2.appendChild(element2);

         var cell3 = row.insertCell(2);
         var element3 = document.createElement("select");
         element3.id = "DetalleSolicitud_nu_tipo_articulo-"+nextinput;
         element3.name = "DetalleSolicitud[nu_tipo_articulo-"+nextinput+"]";
         element3.options.add(new Option("Seleccione",""));
         cell3.appendChild(element3);	   

         var cell4 = row.insertCell(3);
         var element4 = document.createElement("select");
         element4.id = "DetalleSolicitud_nu_articulo-"+nextinput;
         element4.name = "DetalleSolicitud[nu_articulo-"+nextinput+"]";	
         element4.options.add(new Option("Seleccione",""));
         cell4.appendChild(element4);	 

         var cell5 = row.insertCell(4);
         var element5 = document.createElement("input");
         element5.type = "text";
         element5.id = "DetalleSolicitud_nu_cantidad_solicitada-"+nextinput;
         element5.name = "DetalleSolicitud[nu_cantidad_solicitada-"+nextinput+"]";
         cell5.appendChild(element5);	 

         var cell6 = row.insertCell(5);
         var element6 = document.createElement("input");
         element6.type = "text";
         element6.id = "DetalleSolicitud_al_justificacion-"+nextinput;
         element6.name = "DetalleSolicitud[al_justificacion-"+nextinput+"]";	   
         cell6.appendChild(element6);	 
    }

    function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
               nextinput--;
               asignar('cant',nextinput);
            }
        }
        }catch(e) {
                     alert(e);
        }
    }
</SCRIPT>
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

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?></p>

	<?php if($model->isNewRecord==false){$modelb=DetalleSolicitud::model()->findByPk($model->nu_solicitud);}

	echo $form->errorSummary($model,$modelb); ?>

    <h4>Detalle Solicitud</h4>
     <INPUT type="button" value="Agregar" onclick="addRow('dataTable');" />
     <INPUT type="button" value="Borrar" onclick="deleteRow('dataTable');" />

	<table width="100%" id="dataTable">
            <tr>
                <td width="15">&nbsp;</td>
                <td width="150">
                        <?php echo $form->labelEx($modelb,'nu_clasificacion_articulo'); ?>				
                </td>
                <td width="150">
                        <?php echo $form->labelEx($modelb,'nu_tipo_articulo'); ?>				
                </td>
                <td width="150">
                        <?php echo $form->labelEx($modelb,'nu_articulo'); ?>				
                </td>
                <td width="150">
                        <?php echo $form->labelEx($modelb,'nu_cantidad_solicitada'); ?>
                </td>	
                <td width="150">
                        <?php echo $form->labelEx($modelb,'al_justificacion'); ?>
                </td>	
            </tr>
	</table>
	<input id="cant" type="hidden" name="cant" value="" maxlength="5" size="5">

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>




<?php $this->endWidget(); ?>

</div><!-- form -->
