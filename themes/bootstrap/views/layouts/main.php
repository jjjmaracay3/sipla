<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language;?>" lang="<?php echo Yii::app()->language;?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset-<?php echo Yii::app()->charset;?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="language" content="<?php echo Yii::app()->language;?>" />

	<!-- blueprint CSS framework -->
	
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
           <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" rel="stylesheet">


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<a href="/Sipla/site/index.jsp"><div id="logo"></div></a>
	</div><!-- header -->

	<div id="mainmenu">

		<?php $this->widget('bootstrap.widgets.TbNavbar', array(

                'type'=>'default', // null or 'inverse'
                'brand'=>'Sipla',
                'brandUrl'=>'#',
                'collapse'=>true,
                'items'=>array(
                                array(
                                        'class'=>'bootstrap.widgets.TbMenu',
                                        'type'=>'pills',
                                        'stacked'=>false,
          
				'items'=>array(
				array('label'=>'Inicio', 'icon'=>'home', 'url'=>array('/site/index')),
				array('label'=>'Solicitudes', 'icon'=>'inbox', 'url'=>array('/solicitud/index')),
				array('label'=>'Planificar', 'icon'=>'calendar', 'url'=>'#', 'items'=>array(
				array('label'=>'Plan de compra', 'icon'=>'time', 'url'=>array('/articuloTecnologico/admin')),
				 '---',
				array('label'=>'Requisicion de compra', 'icon'=>'shopping-cart', 'url'=>array('/articuloTecnologico/admin')),
				)),
				//array('label'=>'Nota entrega', 'url'=>array('/notaEntrega/index')),
				//array('label'=>'Departamento', 'icon'=>'map-marker','url'=>array('/departamento/index')),
				//array('label'=>'Funcionarios','url'=>array('funcionario/index')),
				//array('label'=>'Roles', 'url'=>array('/rolFuncionario/index')),
				//array('label'=>'Articulos','url'=>array('articuloTecnologico/index')),
				//array('label'=>'Tipo', 'url'=>array('/tipoArticulo/index')),
				//array('label'=>'Clasificar', 'url'=>array('/clasificacionArticulo/index')),

				 //array('label'=>'Home', 'url'=>'#', 'active'=>true),
                //array('label'=>'Link', 'url'=>'#'),
                array('label'=>'Administrar', 'icon'=>'folder-open', 'url'=>'#', 'items'=>array(
                    array('label'=>'Catalogo de articulos','icon'=>'print','url'=>array('articuloTecnologico/index')),
                    array('label'=>'Funcionarios', 'icon'=>'user', 'url'=>array('funcionario/index')),
                   //array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Otros CRUD'),
                    array('label'=>'Departamento', 'icon'=>'map-marker', 'url'=>array('/departamento/index')),
                    array('label'=>'Roles', 'icon'=>'plus-sign','url'=>array('/rolFuncionario/index')),
                    array('label'=>'Clasificacion de un articulo', 'icon'=>'plus-sign', 'url'=>array('/clasificacionArticulo/index')),
                    array('label'=>'Tipo de un articulo', 'icon'=>'plus-sign', 'url'=>array('/tipoArticulo/index')),
                    //array('label'=>'One more separated link', 'url'=>'#'),
                )),
					
							  array('label'=>'Entrar', 'url'=>array('/site/login'), 'icon'=>'lock', 'visible'=>Yii::app()->user->isGuest),
							  array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'icon'=>'user', 'visible'=>!Yii::app()->user->isGuest)
			),
			)
		))); ?>
	</div><!-- mainmenu -->
	
	<?php if(isset($this->breadcrumbs)):?>
        <div class="container" style="padding: 0">
        <div class="row-fluid">
        <div class="span12">
                <br>
                <br>
                <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
        </div>
        </div>
        </div>

	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	

</div><!-- page -->

<div class="clear"></div>

<div id="footer">
	<hr class="soften">
		<p style="font-weight:bold;">Sistema de Planificaci&oacute;n de Adquisiciones Tecnol&oacute;gicas</p>
		<p> CUC <?php echo date('Y'); ?>. - <?php echo Yii::powered(); ?>
	</div><!-- footer -->

	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-collapse.js"></script>
	 <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
</body>
</html>
