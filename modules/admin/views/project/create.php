<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Project */

//$this->title = 'Create Project';
//$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">

    <h1><?php //echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
