<?php
$this->breadcrumbs=array(
	'Students'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
		array('label'=>Yii::t('app', 'List') . ' Student',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Student',
		'url'=>array('create')),
	);

		Yii::app()->clientScript->registerScript('search', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('Student-grid', {
data: $(this).serialize()
});
				return false;
				});
			");
		?>

<h1> <?php echo Yii::t('app', 'Manage'); ?> Students</h1>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Student-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'first_name',
		'last_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
