<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<div class="form">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>


	<?php echo "<?php if(\$model->hasErrors()): ?>
            <p class=\"errornote\"><?php echo YiiadminModule::t('Пожалуйста, исправьте ошибки, указанные ниже.'); ?></p>
        <?php endif; ?>\n"; ?>

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
	<div class="row">
		<div>
                <div class="column span-4"><?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?></div>
		<div class="column span-flexible">
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
		</div></div>
	</div>

<?php
}
?>
		<div class="module footer">
    <ul class="submit-row">
        <li class="left delete-link-container"><a href="javascript:history.go(-1)" class="delete-link">Назад</a></li>
        <li class="submit-button-container">
		<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Создать' : 'Сохранить'); ?>\n"; ?>
        </li>
	    </ul><br clear="all">
</div>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->