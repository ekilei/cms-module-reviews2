<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 08.07.2015
 */
use yii\helpers\Html;
use skeeks\cms\modules\admin\widgets\form\ActiveFormUseTab as ActiveForm;

/* @var $this yii\web\View */
/* @var $model \skeeks\cms\reviews2\components\Reviews2Component */

?>
<?php $form = ActiveForm::begin(); ?>


<?= $form->fieldSet('Основное'); ?>
    <?= $form->fieldRadioListBoolean($model, 'enabledBeforeApproval'); ?>
    <?= $form->fieldInputInt($model, 'maxValue')->hint('Вы можете указать максимальное значение рейтинга, то есть пользователь будет голосовать, высталяя оценку от 1 до указанного вами значения с шагом 1.'); ?>
<?= $form->fieldSetEnd(); ?>

<?= $form->fieldSet('Безопасность'); ?>
    <?= $form->fieldRadioListBoolean($model, 'securityEnabledRateLimit'); ?>
    <?= $form->fieldInputInt($model, 'securityRateLimitRequests'); ?>
    <?= $form->fieldInputInt($model, 'securityRateLimitTime'); ?>
<?= $form->fieldSetEnd(); ?>

<?= $form->fieldSet('Связь с элементами'); ?>
    <?= $form->field($model, 'elementPropertyRatingCode')->textInput(); ?>
    <?= $form->field($model, 'elementPropertyCountCode')->textInput(); ?>
<?= $form->fieldSetEnd(); ?>

<?= $form->fieldSet('Уведомления'); ?>
    <?= $form->field($model, 'notifyEmails')->widget(
            \skeeks\cms\widgets\formInputs\EditedSelect::className(),
            [
                'controllerRoute' => 'cms/admin-user-email',
                'items' => \yii\helpers\ArrayHelper::map(
                    \skeeks\cms\models\user\UserEmail::find()->all(),
                    'value',
                    'value'
                ),
                'multiple' => true
            ]
    ); ?>
    <?= $form->field($model, 'notifyPhones')->widget(
        \skeeks\cms\widgets\formInputs\EditedSelect::className(),
            [
            'controllerRoute' => 'cms/admin-user-phone',
            'items' => \yii\helpers\ArrayHelper::map(
                \skeeks\cms\models\user\UserPhone::find()->all(),
                'value',
                'value'
            ),
            'multiple' => true
        ]
); ?>
<?= $form->fieldSetEnd(); ?>

<?= $form->buttonsCreateOrUpdate($model); ?>
<?php ActiveForm::end(); ?>

