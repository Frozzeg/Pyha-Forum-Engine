<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<table>

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
)); ?>\n"; ?>

<?php foreach($this->tableSchema->columns as $column): ?>
<?php
	$field=$this->generateInputField($this->modelClass,$column);
	if(strpos($field,'password')!==false)
		continue;
?>
	<tr>
		<td><?php echo "<?php echo \$form->label(\$model,'{$column->name}'); ?>\n"; ?></td>
		<td><?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?></td>
	</tr>

<?php endforeach; ?>
	<tr>
    <td><?php echo "<?php echo CHtml::submitButton('Искать'); ?>\n"; ?></td>
    <td></td>
	</tr>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</table><!-- search-form -->