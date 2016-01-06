<?php include_once('../header.php') ?>
<div class="row edit-buttons">
	<div class="col-xs-12 pull-xs-right text-xs-right">
    	<button type="button" class="btn btn-success-outline"><i class="fa fa-plus"></i> Добавить</button>
    	<button type="button" class="btn btn-success-outline"><i class="fa fa-pencil-square-o"></i> Править</button>
    	&nbsp;&nbsp;
    	<button type="button" class="btn btn-primary-outline"><i class="fa fa-plus-square-o"></i> Опубликовать</button>
    	<button type="button" class="btn btn-primary-outline"><i class="fa fa-minus-square-o"></i> В архив</button>
    	&nbsp;&nbsp;
    	<button type="button" class="btn btn-danger-outline"><i class="fa fa-trash-o fa-lg"></i> Удалить</button>
    </div>
</div>
<hr>
<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-6">
		<div class="lead">Список моллов</div>
		<br>
		<table class="table table-hover table-sm mall-list">
		  <thead>
		    <tr class="table-active">
		      <th><input type="checkbox" class="check-all"></th>
		      <th>№</th>
		      <th>Название</th>
		      <th>Город</th>
		      <th>ID</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><input type="checkbox" name="12"></td>
		      <td>1</td>
		      <td>MEGA Astana</td>
		      <td class="text-muted">Астана</td>
		      <td>12</td>
		    </tr>
		    <tr>
		      <td><input type="checkbox" name="1"></td>
		      <td>2</td>
		      <td>Хан Шатыр</td>
		      <td class="text-muted">Астана</td>
		      <td>1</td>
		    </tr>
		    <tr>
		      <td><input type="checkbox" name="5"></td>
		      <td>3</td>
		      <td>Сарыарка</td>
		      <td class="text-muted">Астана</td>
		      <td>5</td>
		    </tr>
		  </tbody>
		</table>
	</div>
</div>

<?php include_once('../footer.php') ?>