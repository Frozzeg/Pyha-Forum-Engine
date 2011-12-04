<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'Админ-панель'=>'/admin',
	'Новый {$label}',
);\n?>";
?>

<h2>Добавить <?php echo $this->modelClass; ?></h2>
<br>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
