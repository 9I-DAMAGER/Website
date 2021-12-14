<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>HOTEL✰✰✰✰</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>

    <body>
		<header>
			<div class="container">
			<a href="index.php" class="logo">HOTEL✰✰✰✰</a>
				<nav>
				<ul>
					<li><a href="index.php">Главная</a></li>
					<li><a href="homera.php">Номера</a></li>
					<li><a href="contact.php">Контакты</a></li>
					<li><a href="">VKontakte</a></li>
					<li><a href="">WhatsApp</a></li>
					<li><p>8-999-888-00-00</p></li>
				</ul>
				</nav>
			</div>
		</header>
		
		<div class="main">
		  <div class="container">
			<div class="row">
				<div class="col-111">
					<p>Стандарт двухместный с двумя кроватями</p>
				</div>
				<div>
					<img class="col-FOTO1" src="img/1/1.jpg"/>
					<img class="col-FOTO1" src="img/1/2.jpg"/>
					<img class="col-FOTO1" src="img/1/3.jpg"/>
					<img class="col-FOTO1" src="img/1/4.jpg"/>
				</div>
				<div class="col-1111">
					<p>Уютный однокомнатный номер, состоящий из небольшой прихожей и спальной комнаты. В номере удобная современная мебель, 2 кровати (90*200), а так же организованное рабочее пространство с письменным столом. Подходит для размещения 1-2 человек. Гостям предоставляется меню подушек, бутилированная минеральная вода (ежедневное пополнение), гладильная комната на каждом этаже. Смена полотенец, постельного белья ежедневно.</p>
				</div>
				<div class="col-1112">
				<p>✰Ванна✰ ✰Кондиционер✰ ✰Телевизор✰ ✰Бесплатный Wi-Fi✰&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✰5000 рублей на один суток✰</p>
				</div>
				<div class="col-zakk"><center>
					<form action="zak.php" method="post">
						<table border="4" cellspacing="9" cellpadding="10" style="font-size:15pt;">
						<caption style="font-size:25pt;"> Бронировать и заказать номер </caption>
						<TBODY>
							<tr align="center">
								<td><label for=name>ФИО:</label></td>
								<td><input style="width:400px;" name=name></td>
							</tr>
							<tr align="center">
								<td><label for=name> Серия и номер паспорта: </label></td>
								<td><input style="width:400px;" name=pasport></td>
							</tr>
							<tr align="center">
								<td><label for=name>Телефон:</label></td>
								<td><input style="width:400px;" name=tel></td>
							</tr>
							<tr align="center">
								<td><label for=name>Электронная почта:</label></td>
								<td><input style="width:400px;" name=mail></td>
							</tr>
							<tr align="center">
								<td><label for=data> Дата заселения </label></td>
								<td><input style="width:400px;" name=dat1></td>
							</tr>
							<tr align="center">
								<td><label for=data> Дата выселения: </label></td>
								<td><input style="width:400px;" name=dat2></td>
							</tr>
						</table>
					<input name="B1" value="Отправить" type="submit">
					</form>	
				</div>
			</div>
		  </div>
		</div>
		
		<footer>
		  <div class="container">
			<div class="col-end">Новосибирск 2022</div>
		  </div>
		</footer>
    </body>
</html>