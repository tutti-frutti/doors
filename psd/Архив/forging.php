<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>ДомСтройДверь</title>
<meta name="description" content="">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width">

<!-- Style + Fonts + JS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js" type="text/javascript"></script>

<!-- Slider -->
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<script src="js/jquery.bxslider.min.js"></script>

<!-- ArcticModal + Feedback -->
<script src="js/jquery.arcticmodal-0.3.min.js"></script>

<!-- SlickNav -->
<link href="css/slicknav.css" rel="stylesheet" />
<script src="js/jquery.slicknav.min.js"></script>

<!-- Filter -->
<script src="js/jquery.mixitup.min.js"></script>

<script src="js/main.js"></script>

</head>

<body id="forging">

<header>

	<div class="main-line">
	<div class="center">
		<div class="logo">ДомСтройДверь</div>
		
		<div class="main-phone">8 (495) 723-51-14</div>
		
		<div class="other-phone-block">
			<div class="other-phone">МТС <span>8 (495) 723-51-14</span></div>
			<div class="other-phone">Билайн <span>8 (495) 723-51-14</span></div>
			<div class="other-phone">Мегафон <span>8 (495) 723-51-14</span></div>
		</div>
		
		<div class="head-contacts">
			<div class="mail">info@mail.com</div>
			<div class="social">Следите за нами: <div class="vk-icon"></div></div>
		</div>

		<div class="callback">Заказать звонок</div>
	</div>
	</div>
	
	<div class="menu-line">
	<div class="center">
		<ul id="menu">
			<li><a href="#">Главная</a></li>
			<li><a href="#">Продукция</a>
				<ul class="sub-menu">
					<li><a href="#">Двери для квартиры</a></li>
					<li><a href="#">Дверь для загородного дома</a></li>
					<li><a href="#">Непромерзающие двери</a></li>
					<li><a href="#">Противопожарные двери</a></li>
					<li><a href="#">Технические двери</a></li>
					<li><a href="#">Окна ПВХ, AL, Зимние сады</a></li>
					<li><a href="#">Ковка, лестницы, навесы, козырьки</a></li>
					<li><a href="#">Эскизы для декоративных панелей</a></li>
				</ul>
			</li>
			<li><a href="#">Услуги</a></li>
			<li><a href="#">Акции</a></li>
			<li><a href="#">Помощь в выборе</a></li>
			<li><a href="#">Контакты</a></li>
			<li><a href="#">Вызвать замерщика</a></li>				
		</ul>
	</div>
	</div>	
</header>

<nav class="breadcrumbs">
<div class="center">
	<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="/" itemprop="url">
			<span itemprop="title">Главная</span>
		</a>
	</div>
	<span class="separator">/</span>
	<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title">Ковка, лестницы, навесы, козырьки</span>
	</div>
</div>
</nav>

<h1 class="page-title"><span>Ковка, лестницы, навесы, козырьки</span></h1>

<div class="configurator">

	<div class="single-config-forging">
		<div class="forging-coating">Ковка</div>
		<img class="" src="img/forging-img1.jpg" alt="">
		<a href="#" class="forging-detail">Посмотреть чертежи</a>
	</div>
	
	<div class="single-config-forging">
		<div class="forging-coating">Лестницы</div>
		<img class="" src="img/forging-img2.jpg" alt="">
		<a href="#" class="forging-detail">Посмотреть чертежи</a>
	</div>
	
	<div class="single-config-forging">
		<div class="forging-coating">навесы и козырьки</div>
		<img class="" src="img/forging-img3.jpg" alt="">
		<a href="#" class="forging-detail">Посмотреть чертежи</a>
	</div>

</div>


<div class="filters" id="filters">
<div class="center">
	<ul class="all-doors-ul"><li class="all-doors filter active" data-filter=".1-1, .1-2, .1-3, .1-4, .1-5, .2-1, .2-2, .2-3, .3-1, .3-2, .3-3"><a href="#catalog-link">Все двери</a></li></ul>
	<ul class="filters-menu first">
		<li>Ковка:</li>
		<li class="filter" data-filter=".1-1"><span>Ворота</span></li>
		<li class="filter" data-filter=".1-2"><span>Заборы</span></li>
		<li class="filter" data-filter=".1-3"><span>Балконы</span></li>
		<li class="filter" data-filter=".1-4"><span>Перила</span></li>	
		<li class="filter" data-filter=".1-5"><span>Решетки</span></li>
	</ul>
	<ul class="filters-menu second">
		<li>Лестницы:</li>
		<li class="filter" data-filter=".2-1"><span>Винтовые</span></li>
		<li class="filter" data-filter=".2-2"><span>Пожарные</span></li>
		<li class="filter" data-filter=".2-3"><span>Пандус</span></li>
	</ul>
	<ul class="filters-menu third">
		<li>Навесы и козырьки:</li>
		<li class="filter" data-filter=".3-1"><span>Козырьки</span></li>
		<li class="filter" data-filter=".3-2"><span>Навесы</span></li>
		<li class="filter" data-filter=".3-3"><span>Беседки</span></li>
	</ul>
	<div class="clearfix"></div>
</div>
</div>


<article class="content">
<div class="center">

	<h2 class="content-title">Навесы и козырьки</h2>
	<p>Ковка как альтернатива изготовления элементов дизайна экстерьерначала приобретать популярность примерно в 19 веке. Ковка как альтернатива изготовления элементов дизайна экстерьерначала <a href="#">приобретать</a> популярность примерно в 19 веке. Ковка как альтернатива изготовления элементов дизайна экстерьерначала приобретать популярность примерно в 19 веке. Ковка как альтернатива изготовления элементов дизайна экстерьерначала приобретать популярность примерно в 19 веке.</p>

</div>
</article>

<div class="catalog" id="catalog-link">
<div class="center">
	
	<div class="catalog-inner" id="catalog">
	<div class="single-product 1-1">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	<div class="single-product 2-1">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	<div class="single-product 2-1">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	<div class="single-product 3-2">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	<div class="single-product 1-3">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	<div class="single-product 3-1">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	<div class="single-product 3-3">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	<div class="single-product 2-2">
		<img src="img/catalog-forging.jpg" alt="">
		<div class="price-info">Точная стоимость после замера</div>
		<div class="order-product">Вызвать замерщика</div>
	</div>
	</div>
	
</div>
</div>

<footer>
<div class="center">

	<div class="logo">
		<span class="company-name">ДомСтройДверь</span> 
		<span class="copyrates">© 2000-2016 Все права защищены</span>
	</div>
	
	<div class="center-section">
		<ul class="f-menu">
			<li><a href="#">Главная</a></li>
			<li><a href="#">Акции</a></li>
			<li><a href="#">Помощь в выборе</a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
		<div class="sc-col1">
			<div class="f-phone">8 (495) 777-77-77</div>
			<div class="f-mail">info@mail.com</div>			
			<div class="f-adress">Клин, Волоколамское ш., БЦ Центр, оф.24</div>		
		</div>
		<div class="sc-col2">
				<div class="other-phone">МТС <span>8 (495) 723-51-14</span></div>
				<div class="other-phone">Билайн <span>8 (495) 723-51-14</span></div>
				<div class="other-phone">Мегафон <span>8 (495) 723-51-14</span></div>
		</div>	
	</div>

	<div class="questions-block">
		<div class="q-info">У вас возникли вопросы?<br/> Свяжитесь с нашим директором</div>
		<div class="q-button">Написать письмо директору</div>
	</div>	
</div>
</footer>

<!--Forms-->
<div style="display: none;">
    <div class="modal callback-modal" id="callback-modal">
        <div class="modal-close arcticmodal-close">Закрыть</div>
        <div class="modal-content-box">
			<div class="infoblock-title"><span class="title-inner">Сделайте заказ прямо сейчас <span class="second-line">Получите подарок при заказе через сайт!</span></span></div>
			<form action="#" name="form-callback">
				<span class="name"></span><input type="text" name="name" placeholder="ФИО или название организации">
				<span class="phone"></span><input type="text" name="phone" placeholder="Телефон">	
				<span class="mail"></span><input type="text" name="mail" placeholder="Электронная почта">	
				<div class="clearfix"></div>
				<span class="message"></span><textarea name="message" placeholder="Комментарий"></textarea>
				<input type="submit" value="Отправить">
			</form>
        </div>
    </div>
</div>

<div style="display: none;">
    <div class="modal door-modal" id="door-modal">
        <div class="modal-close arcticmodal-close">Закрыть</div>
        <div class="modal-content-box clearfix">
			<img src="img/modal-img.jpg" alt="">
			<div class="modal-inner">
				<ul>
					<li>Ковка как альтернатива изготовления элементов дизайна экстерьеров и интерьеров начала приобретать популярность</li>
					<li>Ковка как альтернатива изготовления элементов дизайна экстерьеров и интерьеров начала приобретать популярность</li>
					<li>Ковка как альтернатива изготовления элементов дизайна популярность</li>
					<li>Ковка как альтернатива изготовления элементов дизайна экстерьеров и интерьеров начала приобретать популярность</li>
					<li>Ковка как альтернатива изрнатива изготовления элементов дизайна экстерьеров и интерьеров начала приобретать популярностьготовления элементов дизайна экстерчала приобретать популярность</li>
				</ul>
			</div>
        </div>
    </div>
</div>

<div id="scroll-panel">
	<div id="scroller">Наверх</div>
</div>

</body>
</html>