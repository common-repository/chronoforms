<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$tables = [];
	if(!empty($connection['Connection']['functions'])){
		foreach($connection['Connection']['functions'] as $function){
			if(!empty($function['type']) AND in_array($function['type'], ['save_data', 'read_data', 'delete_data']) AND empty($function['db']['enabled'])){
				$tables[] = $function['db_table'];
			}
		}
	}
	$tables = array_filter($tables);
	$tables = array_unique($tables);
?>
<?php if(!empty($tables)): ?>
<div class="ui top right pointing dropdown icon">
	<input type="hidden" name="status">
	<i class="database icon"></i>
	<i class="dropdown icon"></i>
	<span class="text"></span>
	<div class="menu drop">
		<?php foreach($tables as $table): ?>
		<?php $table = str_replace('#__', \G3\L\Config::get('db.prefix'), $table); ?>
		<a class="item" href="<?php echo r3('index.php?ext=chronoforms&cont=tables'.rp3('name', $table)); ?>"><?php echo $table; ?></a>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>