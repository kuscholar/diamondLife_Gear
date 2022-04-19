<?php
/* @var $model \app\models\Data */

?>

<div>
    <a href="<?php echo \yii\helpers\Url::to(['/data/view']) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($model)) ?>
    </div>
</div>
