<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 27.05.2015
 */
/* @var $this yii\web\View */
use skeeks\cms\modules\admin\widgets\form\ActiveFormUseTab as ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->fieldSet('Настройки'); ?>

        <?= $form->field($model, 'btnSubmit')->textInput(); ?>
        <?= $form->field($model, 'btnSubmitClass')->textInput(); ?>

    <?= $form->fieldSetEnd(); ?>
<?= $form->buttonsStandart($model) ?>
<?php ActiveForm::end(); ?>