	  <li class="active">
	    <a href="http://rap.int/ci_rap/index.php/adminpagectrl/panel1">Список статей</a>
	  </li>
	  <li><a href="http://rap.int/ci_rap/index.php/adminpagectrl/panel2">Добавить, изменить</a></li>
	  <li ><a href="http://rap.int/ci_rap/index.php/adminpagectrl/panel3">Настройки</a></li>
	  <a href="http://rap.int/ci_rap/index.php/adminpagectrl/exit_panel" class='exit'>Выход</a>
	</ul>	
  </div>  
</div>
<table class="table table-striped">
<form method='post' id='checkboxes' action="http://rap.int/ci_rap/index.php/adminpagectrl/published_delete">
		<tr>
			<th>Выделить</th>
			<th>Заголовок</th>
			<th>Дата создания</th>
			<th>Публикация</th>
			<th>Изменить</th>
		</tr>
	<?php foreach($main_info as $item):?>		
		<tr>
			  <td class="checkboxes"><input type='checkbox' name="id[]" value="<?php echo $item['id']; ?>"/></td>
			  <td><a href="#"><?php echo $item['title']; ?></a></td>
			  <td><?php echo $item['date_created']; ?></td>
			  <td><?php echo $item['published']; ?></td>
			  <td><a href='#'>изменить</a></td>
		</tr>
	<?php endforeach;?>
		<tr>
			  <td><input type="checkbox" id="check_all"/></td>
			  <td><input type="submit" name="publicate" class='btn' value='Опубликовать'>
			  <input type="submit" name="unpublicate" class='btn' value='Снять с публикации'>
			  <input type="submit" name="delete" class='btn' value='Удалить'></td>
			  <td></td><td></td><td></td>
		</tr>	
		<tr>
		<td></td>
			<td>
				<div class="pagination">
					  <ul>
					    <li><a href="#">Prev</a></li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">Next</a></li>
					  </ul>
				</div>
			</td>
		</tr>
</form>
</table>



