<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model humhub\modules\api\models\ApiUser */
?>
<div class="panel panel-default">
    <div class="panel-heading"><?php echo '<strong>Add</strong> Api User'; ?></div>
    <div class="panel-body">
        <?= \humhub\modules\admin\widgets\UserMenu::widget(); ?>
        <p />

        <?php $form = ActiveForm::begin(); ?>
        <?php echo $hForm->render($form); ?>
        <?php ActiveForm::end(); ?>

    </div>
</div>
