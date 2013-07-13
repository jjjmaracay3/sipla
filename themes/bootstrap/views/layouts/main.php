<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language;?>" lang="<?php echo Yii::app()->language;?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset-<?php echo Yii::app()->charset;?>" />
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
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
                 'type'=>'default', // null or 'inverse'
                //'brand'=>'',CHtml::image(Yii::app()->getBaseUrl(). '/images/header.png'),
                'brandUrl'=>'#',
                'collapse'=>true,
                'items'=>array(
                                array(
                                        'class'=>'bootstrap.widgets.TbMenu',        
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/login')),
				array('label'=>'Solicitudes', 'url'=>array('/solicitud/index')),
				array('label'=>'Detalle', 'url'=>array('/detalleSolicitud/index')),
				array('label'=>'Departamento', 'url'=>array('/departamento/index')),
				array('label'=>'Funcionarios','url'=>array('funcionario/index')),
				array('label'=>'Roles', 'url'=>array('/rolFuncionario/index')),
				array('label'=>'Articulos','url'=>array('articuloTecnologico/index')),
				array('label'=>'Tipo', 'url'=>array('/tipoArticulo/index')),
				array('label'=>'Clasificar', 'url'=>array('/clasificacionArticulo/index')),
				
				array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>