<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>ЭкоДом29</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Строительство каркасных и брусовых домов под ключ в Архангельске, Северодвинске и Новодвинске">
	<link rel="shortcut icon" href="/template/images/favicon.ico">
	<link rel="stylesheet" href="/template/css/reset.css">
	<link rel='stylesheet prefetch' href='/template/css/ygyzop.css'>
	<link rel='stylesheet prefetch' href='/template/css/slick.css'>
	<link rel='stylesheet prefetch' href='/template/css/slick-theme.css'>
	<link rel="stylesheet" href="/template/fonts/flaticon.css">
	<link rel="stylesheet" href="/template/css/style.css">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<header>
	<div class="top flex block">
		<div class="logo">
			<img src="/template/images/logo.png" alt="ЭкоДом29">
			<h1>ЭкоДом29</h1>
		</div>
		<div class="flex mobile">
			<div class="slogan">
				<h2>Строительство каркасных домов</h2>
				<p>быстро и качественно!</p>			
			</div>
		</div>
	</div>
</header>
<nav class="flex">
	<a class="nav_a" href="#about">О нас</a>
	<a class="nav_a" href="#schema">Схема работы</a>
	<a class="nav_a" href="#sevices">Услуги</a>
	<div class="open_nav"><span></span></div>
	<a class="nav_a" href="#projects">Проекты</a>
	<a class="nav_a" href="#form">Контакты</a>
	<a class="nav_a" href="#otzyvy">Отзывы</a>
</nav>
<section>
	<div class="carusel single-item">  
    <?php foreach($newsList as $newsItem):?>       		
        <div class="carusel_block">
        	<div style="background: url(/template<?=$newsItem['preview'];?>) 50% 100% no-repeat;">
				<p class="big_p"><?=$newsItem['title']?></p>
				<p><?=$newsItem['author_name'];?></p>	
        	</div>
        </div>
    <?php endforeach;?>
    </div>	
</section>
<section id="about" class="about block">
	<h3>Коротко о нас</h3>
	<img src="/template/images/house_about.jpg" style="float: left; margin: 0 7px 7px 0;" alt="">
	<p class="text_p">Наша компания - это команда профессионалов, специализирующихся на строительстве каркасных и брусовых домов и бань в Архангельске, Северодвинске и Новодвинске более 10 лет.</p>
	<p class="text_p">У нас вы можете выбрать типовой проект, либо предложить свой, индивидуальный.</p>
	<p class="text_p">Мы исходим из принципа, что каждый клиент – личность и достоин индивидуального подхода! Каждый проект, каждая смета при необходимости корректируются до тех пор, пока не будут удовлетворены все пожелания клиента!</p>
	<p class="text_p">Каркасная технология строительства позволяет нам построить для вас жилье высокого качества при сравнительно небольших финансовых затратах, и вы получаете собственный современный каркасный дом в короткие сроки.</p>
	<p class="text_p">Наша компания всегда старается предлагать самое лучшее. Наши профессионалы сделают все, чтобы вы как можно скорее переехали в дом своей мечты!</p>
</section>
<section id="schema" class="schema block">
	<h3>Схема работы</h3>
	<div class="steps flex">
		<div class="step">
			<span>1</span>
			<img src="/template/images/step_1.png" alt="">
			<p>Прием заявки</p>
		</div>
		<div class="step">
			<span>2</span>
			<img src="/template/images/step_2.png" alt="">
			<p>Составление сметы, проектирование, согласование</p>
		</div>
		<div class="step">
			<span>3</span>
			<img src="/template/images/step_3.png" alt="">
			<p>Заключение договора, внесение предоплаты</p>
		</div>
		<div class="step">
			<span>4</span>
			<img src="/template/images/step_4.png" alt="">
			<p>Проведение геологии, установка фундамента</p>
		</div>
		<div class="step">
			<span>5</span>
			<img src="/template/images/step_5.png" alt="">
			<p>Монтаж здания на подготовленный фундамент</p>
		</div>
	</div>
</section>
<section id="sevices" class="services block">
	<h3>Наши услуги</h3>
	<div class="flex">		
		<ul class="services_list serv_block">
			<li>Строительство каркасных домов
				<span class="gvozdik1"></span>
				<span class="gvozdik2"></span>
				<span class="gvozdik3"></span>
				<span class="gvozdik4"></span>
		</li>
			<li>Строительство домов из бруса
				<span class="gvozdik1"></span>
				<span class="gvozdik2"></span>
				<span class="gvozdik3"></span>
				<span class="gvozdik4"></span>
		</li>
			<li>Отделочные работы
				<span class="gvozdik1"></span>
				<span class="gvozdik2"></span>
				<span class="gvozdik3"></span>
				<span class="gvozdik4"></span>
		</li>
			<li>Строительство бань
				<span class="gvozdik1"></span>
				<span class="gvozdik2"></span>
				<span class="gvozdik3"></span>
				<span class="gvozdik4"></span>
		</li>
			<li>Сантехнические работы
				<span class="gvozdik1"></span>
				<span class="gvozdik2"></span>
				<span class="gvozdik3"></span>
				<span class="gvozdik4"></span>
		</li>
			<li>Установка заборов
				<span class="gvozdik1"></span>
				<span class="gvozdik2"></span>
				<span class="gvozdik3"></span>
				<span class="gvozdik4"></span>
		</li>
		</ul>
		<div class="serv_block"><img src="/template/images/house_5.jpg" alt=""></div>		
	</div>
	
	<p class="text_p">При строительстве объектов мы используем материалы только от проверенных производителей.</p>
	<div class="hr"></div>
</section>
<section id="projects" class="projects block">
	<h3>Наши проекты</h3>
	<h4 class="project_head">Брусовые дома</h4>
	<div class="projects_container">
		<a data-fancybox="images_brus" href="/template/images/house_4.jpg" class="projects-js">
			<img src="/template/images/brus_multi.jpg" class="mobile" alt="Проект 4">
			<img src="/template/images/house_4_min.jpg" alt="Проект 4"></a>
		<a data-fancybox="images_brus" href="/template/images/brus/house_6.jpg" class="projects-js"><img src="/template/images/brus/house_6_min.jpg" alt="Проект 6"></a>
		<a data-fancybox="images_brus" href="/template/images/brus/house_7.jpg" class="projects-js"><img src="/template/images/brus/house_7_min.jpg" alt="Проект 7"></a>
		<a data-fancybox="images_brus" href="/template/images/brus/house_8.jpg" class="projects-js"><img src="/template/images/brus/house_8_min.jpg" alt="Проект 8"></a>
		<a data-fancybox="images_brus" href="/template/images/brus/house_9.jpg" class="projects-js"><img src="/template/images/brus/house_9_min.jpg" alt="Проект 9"></a>
		<a data-fancybox="images_brus" href="/template/images/brus/house_10.jpg" class="projects-js"><img src="/template/images/brus/house_10_min.jpg" alt="Проект 10"></a>
	</div>
	<h4 class="project_head">Каркасные дома</h4>
	<div class="projects_container">
		<a data-fancybox="images_karkas" href="/template/images/karkas/house_11.jpg" class="projects-js">
        	<img src="/template/images/karkas_multi.jpg" class="mobile" alt="Проект 2">
			<img src="/template/images/karkas/house_11_min.jpg" alt="Проект 11">
		</a>
		<a data-fancybox="images_karkas" href="/template/images/karkas/house_12.jpg" class="projects-js"><img src="/template/images/karkas/house_12_min.jpg" alt="Проект 12"></a>
		<a data-fancybox="images_karkas" href="/template/images/karkas/house_13.jpg" class="projects-js"><img src="/template/images/karkas/house_13_min.jpg" alt="Проект 13"></a>
		<a data-fancybox="images_karkas" href="/template/images/karkas/house_14.jpg" class="projects-js"><img src="/template/images/karkas/house_14_min.jpg" alt="Проект 14"></a>
		<a data-fancybox="images_karkas" href="/template/images/karkas/house_15.jpg" class="projects-js"><img src="/template/images/karkas/house_15_min.jpg" alt="Проект 15"></a>
		<a data-fancybox="images_karkas" href="/template/images/karkas/house_16.jpg" class="projects-js"><img src="/template/images/karkas/house_16_min.jpg" alt="Проект 16"></a>
		<a data-fancybox="images_karkas" href="/template/images/karkas/house_17.jpg" class="projects-js"><img src="/template/images/karkas/house_17_min.jpg" alt="Проект 17"></a>
	</div>
	<h4 class="project_head">Начальная стадия строительства</h4>
	<div class="projects_container">
		<a data-fancybox="images_process" href="/template/images/process/house_18.jpg" class="projects-js">
			<img src="/template/images/process/house_18_min.jpg" alt="Проект 18">
			<img src="/template/images/begining_multi.jpg" class="mobile" alt="Проект 18">
		</a>
		<a data-fancybox="images_process" href="/template/images/process/house_19.jpg" class="projects-js"><img src="/template/images/process/house_19_min.jpg" alt="Проект 19"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_20.jpg" class="projects-js"><img src="/template/images/process/house_20_min.jpg" alt="Проект 20"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_21.jpg" class="projects-js"><img src="/template/images/process/house_21_min.jpg" alt="Проект 21"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_22.jpg" class="projects-js"><img src="/template/images/process/house_22_min.jpg" alt="Проект 22"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_23.jpg" class="projects-js"><img src="/template/images/process/house_23_min.jpg" alt="Проект 23"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_24.jpg" class="projects-js"><img src="/template/images/process/house_24_min.jpg" alt="Проект 24"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_25.jpg" class="projects-js"><img src="/template/images/process/house_25_min.jpg" alt="Проект 25"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_26.jpg" class="projects-js"><img src="/template/images/process/house_26_min.jpg" alt="Проект 26"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_27.jpg" class="projects-js"><img src="/template/images/process/house_27_min.jpg" alt="Проект 27"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_28.jpg" class="projects-js"><img src="/template/images/process/house_28_min.jpg" alt="Проект 28"></a>
		<a data-fancybox="images_process" href="/template/images/process/house_29.jpg" class="projects-js"><img src="/template/images/process/house_29_min.jpg" alt="Проект 29"></a>
	</div>	
	<div class="hr"></div>	
</section>
<section id="form" class="block">
	<h3>Связаться с нами</h3>
	<div class="flex">
		<form name="my_form" class="form">
			<input type="text" class="field field-js" name="name" placeholder="Ваше имя">
			<input type="text" id="telephone" class="field field-js" name="phone" placeholder="(900)-000-00-00">
			<input type="text" class="field" name="mail" placeholder="Ваш email(необязательно)">
			<textarea name="service_text" class="field field-js" placeholder="Вид услуги"></textarea>
			<input type="submit" class="submit field" name="submit" value="Отправить">
			<p class="politic_p">Нажимая кнопку ОТПРАВИТЬ, я соглашаюсь с <br><span>Политикой конфиденциальности</span></p>
			<div id="order-result"></div>
		</form>
	</div>
	<div class="hr"></div>
</section>
<section id="otzyvy" class="otzyvy block">
	<h3>Отзывы о нашей работе</h3>
	<div class="otzyv_block">
		<img class="otzyv_logo" src="/template/images/user.png" alt="">
		<p>Впечатления самые положительные. Дом получился просто замечательный! Отдельная благодарность бригадиру Сергею. Строили быстро и качественно.</p>		
		<p class="otzyv_fio">Яковлев И., Северодвинск</p>
	</div>
	<div class="otzyv_block">
		<img class="otzyv_logo" src="/template/images/user.png" alt="">
		<div class="otzyv_text">
			<p>Спасибо "Экодому". Остались очень довольны работой вашей компании, а именно бригадой фундаментщиков, строительной бригадой. Все в срок, все четко, без проволочек. Огромное спасибо!</p>
			<p class="otzyv_fio">Никитин Е., Архангенльск</p>
		</div>
	</div>
	<div class="otzyv_block">
		<img class="otzyv_logo" src="/template/images/user.png" alt="">
		<div class="otzyv_text">
			<p>Все очень хорошо. Благодарю за отличную работу!</p>
			<p class="otzyv_fio">Бармин И., Архангенльск</p>
		</div>
	</div>
	<div class="otzyv_block">
		<img class="otzyv_logo" src="/template/images/user.png" alt="">
		<div class="otzyv_text">
			<p>После нескольких лет поиска дома для постоянного проживания остановили свой выбор на каркасном доме. Заказанный проект дома в другой компании по индивидуальному проекту оказался очень дорогим для нас в исполнении. А здесь - идеальное воплощение нашей мечты. Очень хотим поблагодарить "Экодом" за проект дома , а бригадира Сергея за высокий профессионализм и отличную организацию труда.</p>
			<p class="otzyv_fio">семья Сотниковых, Архангенльск</p>
		</div>
	</div>
	<div class="otzyv_block">
		<img class="otzyv_logo" src="/template/images/user.png" alt="">
		<div class="otzyv_text">
			<p>Благодарю за быструю постройку. Все выполнено грамотно, без претензий.</p>
			<p class="otzyv_fio">Гришин В., Новодвинск</p>
		</div>
	</div>
	<div class="otzyv_block">
		<img class="otzyv_logo" src="/template/images/user.png" alt="">
		<div class="otzyv_text">
			<p>Феноменальная скорость строительства при отличном качестве, доброжелательное отношение. При общении оставили прекрасное впечатление от сотрудничества с Вашей фирмой.</p>
			<p class="otzyv_fio">семья Плесковых, Северодвинск</p>
		</div>
	</div>
</section>
<footer>
	<div class="block">		
		<p>&copy; Copyright "ЭкоДом29" все права защищены 2008 - <script>var date = new Date(); document.write(date.getFullYear());</script> г.</p>
	</div>
</footer>

<div class="politicus_wrapper">
<div class="politicus">
	<div class="close"></div>
	<p style="text-align: center; margin-bottom: 20px;"><strong>Политика конфиденциальности персональных данных</strong></p>

<p>Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в отношении всей информации, которую сайт экодом29, (далее – Сайт) расположенный на доменном имени экодом29 (а также его субдоменах), может получить о Пользователе во время использования сайта экодом29 (а также его субдоменов), его программ и его продуктов.</p>

<p>1. Определение терминов и т.д. по тексту...</p>
</div>
</div>
<script src="/template/js/jquery.js"></script>
<script src="/template/js/slick.min.js"></script>
<script src="/template/js/ygyzop.js"></script>
<script src="/template/js/imaskjs.js"></script>
<script src="/template/js/functions.js"></script>
</body>
</html>