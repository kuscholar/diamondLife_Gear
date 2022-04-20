<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Data */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Request list', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted">
        <small>Created At: <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>

            By: <b><?php echo $model->createdBy->username ?></b>
        </small>
    </p>

    <?php if (!Yii::$app->user->isGuest): ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            'body:ntext',
            'created_at',
            'updated_at',
            'created_by',
        ],
    ]) ?>

</div>
