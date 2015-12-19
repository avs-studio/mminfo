<?php include_once('../header.php') ?>
<?php require_once("../models/admin-cities.php");?>

<div class="row edit-buttons">
	<div class="col-xs-12 pull-xs-right text-xs-right">
    	<a href="index.php?action=edit-city" role="button" name="edit-city" class="btn btn-success-outline"><i class="fa fa-pencil-square-o"></i> Править</a>
    	&nbsp;&nbsp;
    	<a href="index.php?action=publish-city" role="button" name="publish-city" class="btn btn-primary-outline"><i class="fa fa-plus-square-o"></i> Опубликовать</a>
    	<a href="index.php?action=unpublish-city" role="button" name="unpublish-city" class="btn btn-primary-outline"><i class="fa fa-minus-square-o"></i> В архив</a>
    	&nbsp;&nbsp;
    	<a href="index.php?action=delete-city" role="button" name="delete-city" class="btn btn-delete btn-danger-outline"><i class="fa fa-trash-o fa-lg"></i> Удалить</a>
    </div>
</div>
<hr>
<div class="row">
	<div class="col-xs-6">
		<p class="lead">Добавить город</p>
		<form method="post" action="index.php?action=<?=$formAction;?>">
			<fieldset class="form-group row col-xs-12">
			    <input type="text" value="<?=$city['name']?>" name="name" class="form-control form-control-lg" placeholder="Название" autofocus required>
			    <small class="text-muted"><span class="text-danger">*</span> обязательно для заполнения</small>
			</fieldset>
			<fieldset class="form-group row col-xs-12">
			    <input type="text" value="<?=$city['alias']?>" name="alias" class="form-control" placeholder="Алиас">
			    <small class="text-muted">Латинскими буквами! Если поле не заполнено, в базу заносится транслитерация</small>
			</fieldset>
    		<button type="submit" name="submit" class="btn btn-primary form-group add-edit-btn"><i class="fa fa-save"></i> Сохранить</button>
		</form>    	    	
	</div>
	<div class="col-xs-6">
		<p class="lead">Список городов</p>
		<table class="table table-hover table-sm city-list">
			<thead>
				<tr class="table-active">
					<th><input type="checkbox" class="check-all"></th>
					<th>№</th>
					<th>Название</th>
					<th>Алиас</th>
					<th>ID</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i = 1; 
					foreach ($cities as $c): 
					if ($c['publish'] == false){
						$unpublishClass = 'class="text-muted table-warning"';
					} else {
						$unpublishClass = '';
					}
				?>
					<tr <?=$unpublishClass ?> >
						<td><input type="checkbox" name="<?=$c['id']?>"></td>
						<td><?=$i?></td>
						<td><?=$c['name']?></td>
						<td class="text-muted"><?=$c['alias']?></td>
						<td><?=$c['id']?></td>
					</tr>
					<?php $i++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<?php include_once('../footer.php') ?>