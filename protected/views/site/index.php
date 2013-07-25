<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Felicitaciones! tu has creado tu primera aplicacion...</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<?php
echo Yii::t('app','Name');
echo Yii::t('app','Save');
echo Yii::t('app','Create');
?>
<?php
$var=10;
echo Yii::t('app',"Save # {VAR}",array('{VAR}'=>$var));
?>

<p>For more details name on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
