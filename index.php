<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="reset.css" type="text/css"/>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> <!-- шрифт -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=29a86e8e-55ec-4a38-a269-e5a33a4949d5" type="text/javascript"></script>
	<title>Грузовые перевозки</title>
</head>
<body>
	<div class="wrapper">
		<header class="grid">
			<div class="fixed">
				<div class="header_yellow grid">
					<div class="header_logo">
						<i class="fa fa-truck" aria-hidden="true"></i>
						<span class="gru">Gru</span><span class="pers">Pers</span>.<span class="ru">Ru</span>
					</div>
					<div class="header_content">
						<!-- <i class="fa fa-credit-card" aria-hidden="true"></i> -->
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<span>Заказ грузового такси до 5 т.<span>
					</div>
					<div class="phone">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a href="tel:+79108531314"><span>+7-910-853-13-14</span></a>
					</div>
				</div>
			</div>
			<section class="price grid">
				<h2 class="price_header"><i class="fa fa-calculator" aria-hidden="true"></i> Стоимость грузоперевозок</h2>
				<div class="price_contayner grid">
					<div class="item_price" style="background: #B2C9C3">
						<p class="item_icon">
							<i class="fa fa-road" aria-hidden="true"></i></i>
							<span class="distance">до 100 km 
								<span class="distance_interval">(0 -<i class="fa fa-angle-right" aria-hidden="true"></i> 100 km)</span>
								<span class="distance_price">5 500 ₽</span>
							</span>
						</p>
						<p class="item_icon">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<span class="hour">
								<span class="hour_time">свыше 3-х часов</span>, 
								<span class="hour_each">каждый </span><br>
								<span class="dop_time">дополнительный час оплачивается</span> по <span class="distance_price">550 ₽</span>
							</span>
						</p>
						<p class="item_icon">
							<!-- <i class="fa fa-sitemap" aria-hidden="true"></i> -->
							<i class="fa fa-plus" aria-hidden="true"></i> 
							<span class="price_km">цена за 1 km 
								<span class="distance_price">25 ₽</span>
							</span>
						<p>
						<p class="center"><button class="item_button">Рассчитать<br>стоимость перевозки</button></p>
					</div>
					<div class="item_price" style="background: #81B5E4">
						<p class="item_icon">
							<i class="fa fa-road" aria-hidden="true"></i></i>
							<span class="distance">до 250 km 
								<span class="distance_interval">(101 -<i class="fa fa-angle-right" aria-hidden="true"></i> 250 km)</span>
								<span class="distance_price">6 500 ₽</span>
							</span>
						</p>
						<p class="item_icon">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<span class="hour">
								<span class="hour_time">свыше 3-х часов</span>, 
								<span class="hour_each">каждый</span><br>
								<span class="dop_time">дополнительный час оплачивается</span> 
								по <span class="distance_price">650 ₽</span>
							</span>
						</p>
						<p class="item_icon">
							<!-- <i class="fa fa-sitemap" aria-hidden="true"></i> -->
							<i class="fa fa-plus" aria-hidden="true"></i> 
							<span class="price_km"> цена за 1 km 
								<span class="distance_price">45 ₽</span>
							</span>
						</p>
						<p class="center"><button class="item_button">Рассчитать<br>стоимость перевозки</button></p>
					</div>
					<div class="item_price" style="background: #F7B679">
						<p class="item_icon">
							<i class="fa fa-road" aria-hidden="true"></i>
							<span class="distance">до 500 km 
								<span class="distance_interval">(251 -<i class="fa fa-angle-right" aria-hidden="true"></i> 500 km)</span>
								<span class="distance_price">7 500 ₽</span>
							</span>
						</p>
						<p class="item_icon">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<span class="hour">
								<span class="hour_time">свыше 3-х часов</span>,каждый<br>
								<span class="dop_time">дополнительный час оплачивается</span> по 
								<span class="distance_price">750 ₽</span>
							</span>
						</p>
						<p class="item_icon">
							<!-- <i class="fa fa-sitemap" aria-hidden="true"></i> -->
							<i class="fa fa-plus" aria-hidden="true"></i> 
							<span class="price_km"> цена за 1 km 
								<span class="distance_price">60 ₽</span>
							</span>
						</p>
						<p class="center"><button class="item_button">Рассчитать<br>стоимость перевозки</button></p>
					</div>
				</div>
			</section>
			<h2>Заказать грузоперевозку</h2>
		</header>
		<section>
			<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A319c3818bd50f1f272948d7997486a9776bcb4cfdcad07b377e1d374fe5673f2&amp;width=550&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script> -->
		</section>
		<footer class="border">
			f
		</footer>
	</div>
</body>
</html>

<?
function get_web_page( $url )
{
  $uagent = "Opera/9.80 (Windows NT 6.1; WOW64) Presto/2.12.388 Version/12.14";
  
  $ch = curl_init( $url );
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   // возвращает веб-страницу
  curl_setopt($ch, CURLOPT_HEADER, 0);           // не возвращает заголовки
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);   // переходит по редиректам
  curl_setopt($ch, CURLOPT_ENCODING, "");        // обрабатывает все кодировки
  curl_setopt($ch, CURLOPT_USERAGENT, $uagent);  // useragent
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120); // таймаут соединения
  curl_setopt($ch, CURLOPT_TIMEOUT, 120);        // таймаут ответа
  curl_setopt($ch, CURLOPT_MAXREDIRS, 10);       // останавливаться после 10-ого редиректа (не много ли!?)
  
  $content = curl_exec( $ch );
  $err     = curl_errno( $ch );
  $errmsg  = curl_error( $ch );
  $header  = curl_getinfo( $ch );
  curl_close( $ch );
  
  $header['errno']   = $err;
  $header['errmsg']  = $errmsg;
  $header['content'] = $content;
  return $header;
}
?>