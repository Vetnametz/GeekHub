<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="styles/styles_forma.css" />
	</head>

	<body>
		<div class="wrapper">
			<div class="content">
			
				<!-- возможно здесь должен быть тег <script> но я так и не понял подходит он для ПХП или только для ДЖС -->
				<!-- Нет, здесь не нужен тег скрипт.. весь пхп обрабатывается на сервере, и в хтмл коде его не видно.. так как у тебя здесь переменные (нету echo в этом куске), то соответственно оно у тебя видно не будет.. -->
				<?php
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$sex = $_POST['sex'];
					$age = $_POST['age'];
					$gender = $_POST['gender'];
					$date_of_birth = $_POST['date_of_birth'];
					$marital_status = $_POST['marital_status'];
					$social_status = $_POST['social_status'];
					$residence = $_POST['residence'];
					$sleep = $_POST['sleep'];
					$hanging_out = $_POST['hanging_out'];
					$fishing = $_POST['fishing'];
					$gamer = $_POST['gamer'];
					$select_menu = $_POST['select_menu'];
					$readed_books = $_POST['readed_books'];
					$comments = $_POST['comments'];
					$multiple_select_menu = $_POST['multiple_select_menu'];
					$textfield = $_POST['textfield'];
					$e_mail = $_POST['e_mail'];
					$complexity = $_POST['complexity'];
					$equipment = $_POST['equipment'];
					$lunch = $_POST['lunch'];
					$million = $_POST['million'];
				?>
				
				<table>
				
					<thead>
						<tr>
							<td class="align-c" colspan="2">Верстка формы, обработка сервером, возврат форматированой информации полученной из формы.</td>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td class="align-c title" colspan="2">Коротко о себе</td>
						</tr>
						<tr>
							<th>Имя:</th>
							<td><?php echo $first_name;?></td>
						</tr>
						<tr>
							<th>Фамилия:</th>
							<td><?php echo $last_name;?></td>
						</tr>
						<tr>
							<th>Пол:</th>
							<td><?php echo $sex;?></td>
						</tr>
						<tr>
							<th>Возраст:</th>
							<td><?php echo $age;?> лет</td>
						</tr>
						<tr>
							<td class="align-c title" colspan="2">Подробнее о себе</td>
						</tr>
						<tr>
							<th>Пол:</th>
							<td><?php echo $gender;?></td>
						</tr>
						<tr>
							<th>Дата рождения:</th>
							<td><?php echo $date_of_birth;?></td>
						</tr>
						<tr>
							<th>Семейное положение:</th>
							<td><?php echo $marital_status;?></td>
						</tr>
						<tr>
							<th>Социальный статус:</th>
							<td><?php echo $social_status;?></td>
						</tr>
						<tr>
							<th>Место жительства:</th>
							<td><?php echo $residence;?></td>
						</tr>
						<tr>
							<th>Что вы обычно делаете на выходных:</th>
							<td><?php echo $sleep, ", ", $hanging_out, ", ", $fishing, ", ", $gamer;?> Короче говоря нифига полезного :)</td>
						</tr>
						<tr>
							<th>Рассказать о Формах в книге, посвященной HTML:</th>
							<td><?php echo $select_menu;?></td>
						</tr>
						<tr>
							<th>Сколько книг вы прочитали за свою жизнь:</th>
							<td><?php echo $readed_books;?></td>
						</tr>
						<tr>
							<th>Ваши комментарии:</th>
							<td><?php echo $comments;?></td>
						</tr>
						<tr>
							<th>Проверка на селекты:</th>
							<td><?php echo $multiple_select_menu;?></td>
						</tr>
						<tr>
							<td class="align-c title" colspan="2">И в заключение</td>
						</tr>
						<tr>
							<th>Это поле было введено до вас</th>
							<td><?php echo $textfield;?></td>
						</tr>
						<tr>
							<th>Email:</th>
							<td><?php echo $e_mail;?></td>
						</tr>
						<tr>
							<th>Хотите подписаться на самую модную рассылку спама?</th>
							<td><?php echo $equipment, ", ", $lunch, ", ", $million;?></td>
						</tr>
						<tr>
							<th>На сколько сложная задача:</th>
							<td><?php echo $complexity;?></td>
						</tr>
					</tbody>
					
					<tfoot>
					
					</tfoot>
					
				</table>
				
			</div>
		</div>
	</body>
</html>
