<?php
$this->breadcrumbs=array(
<<<<<<< HEAD
	'Apps'=>array('index'),
	$model['App']->name,
=======
	'Games'=>array('/teacher/games'),
	$model->name,
>>>>>>> 856dd198b3743249c28442998cafab2099a3810b
);

/*$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' App', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' App', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' App', 'url'=>array('update', 'id'=>$model['App']->id)),
	array('label'=>Yii::t('app', 'Delete') . ' App', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model['App']->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' App', 'url'=>array('admin')),
);*/
?>
<<<<<<< HEAD
<div class="app" style="margin:0px 0px 10px 0px;height:44px;padding:8px;border:1px solid #555;-moz-border-radius:4px;-border-radius:4px;background-color:#efefef">
	<h1 style="margin:0px;line-height:40px;"><img src="/images/challenges/<?php echo $model['App']->image;?>" alt="App Icon" style="margin-right:10px;float:left;height:40px;" /><?php echo $model['App']->name;?></h1>
</div>
<?php 
if(sizeof($model['Challenge']) > 0) { ?>
	<div class="challenges" style="padding-left:20px">
	<h2>Challenges</h2>
	<?php foreach($model['Challenge'] as $challenge) {
		echo $this->renderPartial('/challenge/_view', array(
			'model'=>$challenge,
			'form' =>$form,
			'link' => true
		)); ?>
	<?php }?>
	</div>
<?php } else {
	echo '<p>No challenges found.</p>';
}?>
<div class="actions"><a href="">Add Challenge</a></div>
=======

<h1><?php echo $model->name; ?></h1>

<img src="<?php echo $model->image ?>" />

<h2>Challenges</h2>

<ul>
<?php foreach($model->challenges as $challenge): ?>
    <li><?php echo CHtml::link($challenge->name, array('/challenge/edit','id'=>$challenge->id)) ?></li>
<?php endforeach; ?>
</ul>

    <h3><?php echo CHtml::link('Create New Challenge', array('/challenge/create')); ?></h3>

>>>>>>> 856dd198b3743249c28442998cafab2099a3810b
