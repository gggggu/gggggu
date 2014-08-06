	  <li >
	    <a href="http://rap.int/ci_rap/index.php/adminpagectrl/panel1">Список статей</a>
	  </li>
	  <li class="active"><a href="http://rap.int/ci_rap/index.php/adminpagectrl/panel2">Добавить, изменить</a></li>
	  <li ><a href="http://rap.int/ci_rap/index.php/adminpagectrl/panel3">Настройки</a></li>
	  <a href="http://rap.int/ci_rap/index.php/adminpagectrl/exit_panel" class='exit'>Выход</a>
	</ul>
  </div>
</div>
<table class="table table-striped">
<form method='post' id='checkboxes' action="http://rap.int/ci_rap/index.php/adminpagectrl/add_article">		
		<tr>
			  <td>Заголовок</td><td><textarea rows="3" maxlength="200" class="field span12" id="text_area"></textarea></td>
		</tr>
		<tr>
			  <td>Короткий текст</td><td><textarea rows="3" maxlength="200" class="field span12" id="text_area"></textarea></td>
		</tr>
		<tr>
			  <td>Текст</td><td><textarea name="editor1" id="editor1" rows="10" cols="80">
                
            </textarea></td>
		</tr>
		<tr>
			  <td>Выберите картинку</td><td><input type="file"></td>
		</tr>	
		<tr>
			  <td>Дата создания</td><td><input type="text" id="date"></td>
		</tr>
		<tr>
			  <td>Автор</td><td><input class="input-large" type="text" ></td>
		</tr>
		<tr>
			  <td><input id="submit" type="submit" value="Добавить статью" class="btn"></td><td></td>
		</tr>
</form>
</table>
<script src="http://rap.int/ci_rap/ckeditor/ckeditor.js"></script>
<script type="text/javascript">CKEDITOR.replace( 'editor1' );</script>

