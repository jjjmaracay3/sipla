
<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
<div class="span9">
        <div id="content">
                <?php echo $content; ?>
        </div><!-- content -->
</div>  
<div class="span2">
        <div id="sidebar">
        <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                        'title'=>'Operaciones',
                ));
                $this->widget('bootstrap.widgets.TbMenu', array(
                        'items'=>$this->menu,
                        'htmlOptions'=>array('class'=>'operations'),
                 ));
                $this->endWidget();
        ?>
        </div><!-- sidebar -->
        </div>
</div>
<?php $this->endContent(); ?>

