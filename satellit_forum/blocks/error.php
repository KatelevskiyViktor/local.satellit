echo "<p style='margin-left:10px;'>Ошибка! Запрос на выборку информации из базы данных не прошёл. Пожалуйста сообщите об этом администартору, указав в письме код ошибки.<strong>HUGO03@mail.ru</strong><input type='button' value='Назад' onclick='history.back()'></p>";
										echo "<strong><p style='margin-left:10px;'>Код ошибки: </p></strong>";exit("<label style='margin-left:10px;'>".mysql_error()."</label>");