<?php
/*
Template Name: E-commerce
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	<title>Разработка продающих интернет-магазинов | Команда SeoBrain</title>
	<link rel="stylesheet" href="/wp-content/themes/SeoBrain/style_e.css" type="text/css">
	<link rel="stylesheet" href="/wp-content/themes/SeoBrain/inc/css/bootstrap-theme.css" type="text/css">
	<link rel="stylesheet" href="/wp-content/themes/SeoBrain/inc/css/bootstrap.css" type="text/css">
	<script src="/wp-content/themes/SeoBrain/jquery/jquery-3.1.1.min.js"  type="text/javascript"></script>
	<!-- Обратный звонок -->
<!-- 	<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
	<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=d415875ba8dec10c0674616d0538c384" charset="UTF-8" async></script> -->
	<!-- Обратный звонок -->
</head>
<body>
	<section id="start"></section>
	<div class="main"><!-- Start of "Main" -->
		<div class="block1"><!-- Start of "1 экран" -->
			<div class="header10">
				<div class="row"><!-- Start of menu -->
					<div class="col-md-12">
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-2">
						<div class="logo1">
							<a href="#start"><img src="/wp-content/themes/SeoBrain/img_e/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-md-6">
						<nav class="menu">
							<ul>
								<li><a href="#komanda"><span>Наша команда</span></a></li>
								<li><a href="#etapy"><span>Этапы работы</span></a></li>
								<li><a href="#portfolio"><span>Портфолио</span></a></li>
								<li><a href="#preimushestva"><span>Преимущества</span></a></li>
							</ul>
							<a href="#" class="pull"></a>
						</nav>
						<script>
							$(function() {
								var pull 		= $('.pull');
									menu 		= $('nav ul');
									menuHeight	= menu.height();

								$(pull).on('click', function(e) {
									e.preventDefault();
									menu.slideToggle();
								});

								$(window).resize(function(){
					        		var w = $(window).width();
					        		if(w > 992 && menu.is(':hidden')) {
					        			menu.removeAttr('style');
					        		}
					    		});
							});
						</script>
					</div>
					<div class="col-md-2">
						<div class="contacts">
							<img src="/wp-content/themes/SeoBrain/img_e/telephone.png"" alt="">
							<a>050 - 037 - 24 - 02</a>
							<!-- <a class="main-numb" href="javascript:void(0);" tabindex="1">050 - 03 - 72 - 402
								<div class="str">
									<img src="/wp-content/themes/SeoBrain/img_e/str.png" alt="">
								</div>
							</a>
							<ul class="other-numb"> 
								<li><a href="TEL:0931279251"><img src="/wp-content/themes/SeoBrain/img_e/lifecell.png" alt="">093 - 12 - 79 - 251</a></li><br>
								<li><a href="TEL:0664556985"><img src="/wp-content/themes/SeoBrain/img_e/vodafon.png" alt="">066 - 45 - 56 - 985</a></li><br>
								<li><a href="TEL:0967648958"><img src="/wp-content/themes/SeoBrain/img_e/kyivstar.png" alt="">096 - 76 - 48 - 958</a></li> 
							</ul>  -->
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<hr>
					</div>
				</div><!-- End of menu -->
			</div>
				<div class="row">
					<div class="slogan">
						<h1><span>Разработка продающих интернет-магазинов</span><br>любой сложности</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div class="left">
							<div class="part1">
							<p>Мы не просто создаем интернет-магазины, мы делаем из них источники продаж</p>
							</div>
							<div class="part2">
								<p>Поэтому при разработке мы ориентируемся<br>
								на все требования Google и Yandex, именно<br>
								от них зависят Ваши продажи в Интернете</p>
							</div>
							<div class="part3">
								<p>У Вас есть повод нам доверять, ведь мы сертифицированные партнеры таких компаний:</p>
							</div>
							<div class="container">
								<div class="row">
									<div class="papa">
										<img src="/wp-content/themes/SeoBrain/img_e/google.png" alt="">
										<img src="/wp-content/themes/SeoBrain/img_e/yandex.png" alt="">
										<img src="/wp-content/themes/SeoBrain/img_e/opencart.png" alt="">
										<img src="/wp-content/themes/SeoBrain/img_e/magento.png" alt="">
									</div>
								</div>
							</div>
							<div class="fofo">
							<div class="pere">
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
							</div>
								<div class="order1">
									<h3>Оставьте заявку на бесплатную<br>
									консультацию и просчет</h3>
								</div>
								<div class="form3">
									<div class="z-form2">
										<form method="POST" id="feedback-form3">
											<div class="lala">
												<div class="foso1">
													<div class="uname2">
														<input class="callbackwidget-name" class="form-control2" type="text" name="nameFF" required="required" placeholder="Ваше имя" x-autocompletetype="name">
													</div>
												</div>
												<div class="foso2">
													<div class="uphone2">
														<input class="callbackwidget-name" class="form-control2" type="tel" name="contactFF" required="required" placeholder="Ваш телефон" x-autocompletetype="tel">
													</div>
												</div>
											</div>
											<div class="hid1">
												<textarea name="messageFF"></textarea>
											</div>
											<br>
											<div class="zxc">
												<br>
												<br>
												<br>
												<br>
											</div>
											<div class="kn3">
												<input type="submit" class="button2" value="Отправить заявку">
											</div>
										</form>
									</div>
								</div>
								<script>
									document.getElementById('feedback-form3').addEventListener('submit', function(evt){
									var http = new XMLHttpRequest(), f = this;
									evt.preventDefault();
									http.open("POST", "/wp-content/themes/SeoBrain/formdata_top_tab.php", true);
									http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
									http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
									http.onreadystatechange = function() {
									if (http.readyState == 4 && http.status == 200) {
									alert(http.responseText + ', Ваша заявка отправлена.\nНаши специалисты ответят Вам в течении 2-3 минут!');    
									f.nameFF.removeAttribute('value'); // очистить поле имени
									f.nameFF.value='';
									f.contactFF.removeAttribute('value'); // очистить поле номера телефона
									f.contactFF.value='';
									}
									}
									http.onerror = function() {
									alert('Извините, данные не были переданы, попробуйте ещё раз');
									}
									}, false);
								</script>
							</div>
						</div><!-- End of "Left" -->
					</div>
					<div class="col-md-5">
						<div class="right">
								<div class="order1">
									<h3>Оставьте заявку на бесплатную<br>
									консультацию и просчет</h3>
								</div>
							<div class="rrr">
								<div class="svrd1">
									<div class="qqq1">
										<img src="/wp-content/themes/SeoBrain/img_e/seo.png" alt="">
										<p>SEO Оптимизация основных страниц сайта</p>
									</div>
									<div class="qqq2">
										<img src="/wp-content/themes/SeoBrain/img_e/www.png" alt="">
										<p>Домен и хостинг на 1 год в подарок </p>
									</div>
									<div class="qqq3">
										<img src="/wp-content/themes/SeoBrain/img_e/design.png" alt="">
										<p>Уникальный дизайн всех страниц сайта</p>
									</div>
								</div>
								<div class="svrd2">
									<div class="qqq4">
										<img src="/wp-content/themes/SeoBrain/img_e/friendly.png" alt="">
										<p>Адаптивная верстка всего сайта</p>
									</div>
									<div class="qqq5">
										<img src="/wp-content/themes/SeoBrain/img_e/content.png" alt="">
										<p>Оптимизированные тексты основных категорий</p>
									</div>
									<div class="qqq6">
										<img src="/wp-content/themes/SeoBrain/img_e/ad.png" alt="">
										<p>Настройка контекстной рекламы бесплатно</p>
									</div>
								</div>
							</div>
							<div class="form1">
								<div class="z-form2">
									<form method="POST" id="feedback-form1">
										<div class="uname2">
											<input class="form-control2" type="text" name="nameFF" required="required" placeholder="Ваше имя" x-autocompletetype="name">
										</div>
										<div class="uphone2">
											<input class="form-control2" type="tel" name="contactFF" required="required" placeholder="Ваш телефон" x-autocompletetype="tel">
										</div>
										<div class="hid1">
											<textarea name="messageFF"></textarea>
										</div>
										<div class="kn1">
											<input type="submit" class="button2" value="Отправить заявку">
										</div>
									</form>
								</div>
							</div>
							<script>
								document.getElementById('feedback-form1').addEventListener('submit', function(evt){
								var http = new XMLHttpRequest(), f = this;
								evt.preventDefault();
								http.open("POST", "/wp-content/themes/SeoBrain/formdata_top.php", true);
								http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
								http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
								http.onreadystatechange = function() {
								if (http.readyState == 4 && http.status == 200) {
								alert(http.responseText + ', Ваша заявка отправлена.\nНаши специалисты ответят Вам в течении 2-3 минут!');    
								f.nameFF.removeAttribute('value'); // очистить поле имени
								f.nameFF.value='';
								f.contactFF.removeAttribute('value'); // очистить поле номера телефона
								f.contactFF.value='';
								}
								}
								http.onerror = function() {
								alert('Извините, данные не были переданы, попробуйте ещё раз');
								}
								}, false);
							</script>
						</div><!-- End of "Right" -->
					</div>
					<div class="col-md-1"></div>
				</div>
		</div><!-- End of "1 экран" -->
		<div class="new">
			<div class="row">
				<div class="col-md-12">
					<div class="rrr">
						<div class="qqq1">
							<img src="/wp-content/themes/SeoBrain/img_e/seo.png" alt="">
							<p>SEO Оптимизация основных страниц сайта</p>
						</div>
						<div class="qqq2">
							<img src="/wp-content/themes/SeoBrain/img_e/www.png" alt="">
							<p>Домен и хостинг на 1 год в подарок </p>
						</div>
						<div class="qqq3">
							<img src="/wp-content/themes/SeoBrain/img_e/design.png" alt="">
							<p>Уникальный дизайн всех страниц сайта</p>
						</div>
						<div class="qqq4">
							<img src="/wp-content/themes/SeoBrain/img_e/friendly.png" alt="">
							<p>Адаптивная верстка всего сайта</p>
						</div>
						<div class="qqq5">
							<img src="/wp-content/themes/SeoBrain/img_e/content.png" alt="">
							<p>Оптимизированные тексты основных категорий</p>
						</div>
						<div class="qqq6">
							<img src="/wp-content/themes/SeoBrain/img_e/ad.png" alt="">
							<p>Настройка контекстной рекламы бесплатно</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="komanda"></section>
		<br>
		<br>
		<br>
		<br>
		<div class="pppppp">
			<img src="/wp-content/themes/SeoBrain/img_e/bg_profi.png" alt="">
		</div>
		<br>
		<br>
		<div class="block2">	<!-- Start of "Специалисты" -->
			<div class="row">
				<div class="ou">
					<div class="col-md-12">
						<h2>Наша креативная команда</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="team">
						<div class="la1">
							<div class="osnova">
								<a class="team1"></a>
								<p></p>
								<div class="tete1">
									<p><span>Сергей</span><br>Основатель,<br>руководитель проектов</p>
								</div>
							</div>
							<div class="front">
								<a class="team2"></a>
								<p></p>
								<div class="tete2">
									<p><span>Евгений</span><br>Front-end<br>разработчик</p>
								</div>
							</div>
							<div class="des">
								<a class="team3"></a>
								<p></p>
								<div class="tete3">
									<p><span>Дарья</span><br>Главный<br>дизайнер</p>
								</div>
							</div>
						</div>
						<div class="la2">
							<div class="tech">
								<a class="team4"></a>
								<p></p>
								<div class="tete4">
									<p><span>Геннадий</span><br>Технический<br>директор</p>
								</div>
							</div>
							<div class="market">
								<a class="team5"></a>
								<p></p>
								<div class="tete5">
									<p><span>Елена</span><br>Руководитель<br>маркетингового отдела</p>
								</div>
							</div>
							<div class="back">
								<a class="team6"></a>
								<p></p>
								<div class="tete6">
									<p><span>Андрей</span><br>Back-end<br>разработчик</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div><!-- End of "Специалисты" -->
		<section id="etapy"></section>
		<div class="block3"><!-- Start of "Основные Этапы" -->
		</div><!-- End of "Основные Этапы" -->
		<section id="portfolio"></section>
		<br>
		<br>
		<div class="block4"><!-- Start of "Наши работы" -->
			<h2>Наши работы</h2>
			<br>
			<br>
			<br>
			<div class="im">
				<div class="one">
					<a class="rollover1"></a>
				</div>
				<div class="two">
					<a class="rollover2"></a>
				</div>
				<div class="three">
					<a class="rollover3"></a>
				</div>
				<div class="four">
					<a class="rollover4"></a>
				</div>
				<div class="five">
					<a class="rollover5"></a>
				</div>
				<div class="six">
					<a class="rollover6"></a>
				</div>
			</div>
		</div><!-- End of "Наши работы" -->

		<section id="preimushestva"></section>
		<div class="block5"><!-- Start of "Преимущества" -->
			<div class="footer1">
				<div class="row">
					<div class="col-md-12">
						<div class="whyus">
							<h2>Почему стоит выбрать нас?</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-5">
						<div class="left2">
							<div class="fff">
								<div class="fff1">
									<img src="/wp-content/themes/SeoBrain/img_e/fff1.png" alt="">
									<p>Работа по <span>ДОГОВОРУ</span> на всех этапах. Перед началом разработки
									Вы сможете прописать все свои желания</p><br>
								</div>
								<div class="fff2">
									<img src="/wp-content/themes/SeoBrain/img_e/fff2.png" alt="">
									<p>Уже на первых этапах разработки мы учитываем <span>ПРАВИЛЬНУЮ</span>
									структуру и сементическое ядро. Поэтому при продвижении Вам
									ничего не нужно будет менять.</p><br>
								</div>
								<div class="fff3">
									<img src="/wp-content/themes/SeoBrain/img_e/fff3.png" alt="">
									<p>Желание клиента для нас - <span>ЗАКОН</span>! Мы делаем прототип и дизайн
									до полного согласования с клиентом.</p><br>
								</div>
								<div class="fff4">
									<img src="/wp-content/themes/SeoBrain/img_e/fff4.png" alt="">
									<p>После разработки Вы получаете <span>БЕЗЛИМИТНЫЕ</span> консультации и 
									поддержку с нашей стороны.</p><br>
								</div>
								<div class="fff5">
									<img src="/wp-content/themes/SeoBrain/img_e/fff5.png" alt="">
									<p>Мы настраиваем для Вас контекстную рекламу <span>БЕСПЛАТНО</span>.</p>
								</div>
								<div class="qwqq"></div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="right2">
							<img src="/wp-content/themes/SeoBrain/img_e/arow.png" alt="">
							<div class="order2">
								<h3>Закажите интернет-магазин сейчас<br>
								и Вы получите </h3>
							</div>
							<div class="form2">
								<div class="z-form2">
									<form method="POST" id="feedback-form2">
										<div class="uname2">
											<label for="name2">Ваше имя</label><br>
											<input class="callbackwidget-name" class="form-control2" id="name2" name="nameFF" placeholder="" type="text" required="required" x-autocompletetype="name">
										</div>
										<div class="uphone2">
											<label for="phone2">Ваш телефон</label><br>
											<input class="callbackwidget-name" class="form-control2" id="phone2" name="contactFF" placeholder="" type="tel" required="required" x-autocompletetype="tel">
										</div>
										<div class="hid1">
											<textarea name="messageFF"></textarea>
										</div>
										<div class="kn2">
											<input type="submit" class="button2" value="Заказать интернет-магазин">
										</div>
									</form>
								</div>
							</div>
							<script>
								document.getElementById('feedback-form2').addEventListener('submit', function(evt){
								var http = new XMLHttpRequest(), f = this;
								evt.preventDefault();
								http.open("POST", "/wp-content/themes/SeoBrain/formdata_bottom.php", true);
								http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
								http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
								http.onreadystatechange = function() {
								if (http.readyState == 4 && http.status == 200) {
								alert(http.responseText + ', Ваша заявка отправлена.\nНаши специалисты ответят Вам в течении 2-3 минут!');    
								f.nameFF.removeAttribute('value'); // очистить поле имени
								f.nameFF.value='';
								f.contactFF.removeAttribute('value'); // очистить поле номера телефона
								f.contactFF.value='';
								}
								}
								http.onerror = function() {
								alert('Извините, данные не были переданы, попробуйте ещё раз');
								}
								}, false);
							</script>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<!-- <div class="sss">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3">
							<div class="mail">
								<img src="/wp-content/themes/SeoBrain/img_e/convert.png" alt="">
								<p>info@seobrain.com</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="logo2">
								<img src="/wp-content/themes/SeoBrain/img_e/logo2.png" alt="">
							</div>
						</div>
						<div class="col-md-3">
							<div class="mob">
								<div class="ddd1">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<p>050 - 037 - 24 - 02</p>
								</div>
								<div class="ddd2">
									<ul>
										<li>
											<span>063 - 33 - 54 - 985</span>
										</li>
									</ul>
								</div>
								<div class="ddd3">
									<ul>
										<li>
											<span>066 - 45 - 56 - 985</span>
										</li>
									</ul>
								</div>
								<div class="ddd4">
									<ul>
										<li>
											<span>096 - 76 - 48 - 958</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="footer2">
								<div class="copy">
									<p>Copyright 2017</p>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div><!-- End of "Преимущества" -->
	</div><!-- End of "Main" -->
</body>
<script src="/wp-content/themes/SeoBrain/js/headhesive.min.js"></script>
<script src="/wp-content/themes/SeoBrain/js/js.js"></script>
<script src="/wp-content/themes/SeoBrain/js/menu.js"></script>
</html>

<!-- LiveReload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<!-- LiveReload -->