<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenidos a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>



<div class="span9">
	<p class="well"  style="font-size: 14px; text-align: justify;" >
    <b>Gestionar solicitudes:  </b> </br>Permitirá a la unidad administrativa, solicitar a través de un formulario vía intranet con solo un clic, además cuenta con la comodidad de un catalogo digital con cada  equipo tecnológico informático que requiera.
	</br>Para atender una solicitud, Desarrollo Tecnológico a través de un listado de solicitudes, procesa según sea el caso: Si hay existencia genera nota de entrega de productos, si no existe en almacén, se archiva solicitud para generar lo siguiente:
</div>
<div class="span9">
	<p class="well"  style="font-size: 14px; text-align: justify;" ><b>1. Plan de Compras:</b> Documento requerido por Planificación para ser incorporado en el POA institucional. Contiene el sumatorio de las solicitudes separadas por artículos, clasificación y su justificación presentado en forma de listado.
</br><b>2. Requisición de Compra:</b> Documento requerido por Compras para realizar una incorporación inmediata. Contiene por cada requisición, el sumatorio de artículos requeridos presentado en forma de plantilla. 

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Especial reconocimiento a:</h4>
</div>
 
<div class="modal-body">

Ministerio del Poder Popular de Educación Universitaria (MPPEU).
Colegio Universitario de Caracas.
Programa Nacional de Formación en Informática
Docente Asesor:<p>Eliceo Aguirre</p>
Representante de la comunidad:<p>Alejandro Amaro Escalona</p>
Integrantes:
    <p>Alfredo Aguilar</p>
    <p>Jhonny Maracay</p>
    <p>Marbely Bauza</p>
        <p>Saúl Martínezr</p>
</div>
 
<div class="modal-footer">

       <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Cerrar',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
  
<?php $this->endWidget(); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Consulta créditos aquí',
     'size'=>'normal',
     'block'=>true,
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
)); ?>
<?php echo '   '; $this->widget('bootstrap.widgets.TbButton', array(
    'size'=>'normal',
     'block'=>true,
    'label'=>'Presentación del sistema','url'=>'../../sozi2.svg',
    'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    //'size'=>'normal',
)); ?>
</div>


