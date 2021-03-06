<html>
<head>
	<title>EvaBorisova</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!-- yandex webmaster -->
	<meta name="yandex-verification" content="37f9b3be0b9f9c53" />

	<!-- favicon -->
	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />

	<!-- seo description -->
	<meta name="description" 
	content="С 1990 года мы реставрируем дворцы, поместья, коттеджи, квартиры. Всегда ищем индивидуальный подход к каждому клиенту.">

	<!-- swiper -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- animate -->
	<script src="js/anime-master/lib/anime.min.js"></script>

	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- font awesome-->
	<link rel="stylesheet" href="fonts/FontAwesome/css/all.min.css">
	
	<script>
		const mobileWidth = 768;
	</script>

	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<script src="/js/backgrounds.js"></script>

</head>

<body>
	<main>
		<!-- background for header and gallery pages  -->
		<div class="body-background"></div>

		<!-- blur for background image -->
		<div class="body-blur"></div>

		<!-- navigation -->
		<nav>
			<div class="nav__logo">
				<a href="#" onclick="changePage(this)">Eva Borisova</a>
			</div>

			<ul class="nav__links">
				<li class="nav__link"><a href="#gallery"  onclick="changePage(this)">Галерея</a></li>
				<li class="nav__link"><a href="#services" onclick="changePage(this)">Услуги</a></li>
				<li class="nav__link"><a href="#projects" onclick="changePage(this)">Проекты</a></li>
				<li class="nav__link"><a href="#about-us" onclick="changePage(this)">О нас</a></li>
				<li class="nav__link"><a href="#contacts" onclick="changePage(this)">Контакты</a></li>
			</ul>
		
			<h3 class="nav__page-title"></h3>

			<div class="nav__phone">
				<a href="tel:+79673307462">+7 (967) 330 74 62</a>
			</div>

			<div class="nav__hamburger-container">
				<div class="nav__hamburger">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>

		</nav>

		<!-- bottom phone number for all pages expept header -->
		<div class="bottom-phone"><a href="tel:+79673307462" class="golden-rain">+7 (967) 330 74 62</a></div>

		<div class="bottom-created-by"><a href="https://terexov.agency">terexov.agency</a></div>

		<!-- pages side pagination -->
		<div class="pagination">
			<div class="pagination__item pagination__item--active"></div>
			<div class="pagination__item"></div>
			<div class="pagination__item"></div>
			<div class="pagination__item"></div>
			<div class="pagination__item"></div>
			<div class="pagination__item"></div>
		</div>

		<!--  container with pages-slides -->
		<section class="backgrounds">
			<!-- 1: header -->
			<section class="backgrounds__item backgrounds__item-header header">
				<div class="backgrounds__back-color"></div>
			
				<div class="header__container">
					<h1 class="header__title">Гипсовая лепнина</h1>
					<p class="header__text">
						<span class="golden-rain">С 1990 года </span> мы реставрируем дворцы, поместья, коттеджи, квартиры. 
						Всегда ищем индивидуальный подход к каждому клиенту.
					</p>
				</div>
			</section>

			<!-- 1: gallery  -->
			<section class="backgrounds__item backgrounds__item-gallery gallery">
				<div class="backgrounds__back-color"></div>
				
				<div class="backgrounds__item-container">
					<!-- left/right buttons -->
					<button class="gallery__button main-pagination__button main-pagination__button-prev"></button>
					<button class="gallery__button main-pagination__button main-pagination__button-next"></button>
					
					<div class="swiper-container gallery-swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="imgs/gallery/1.jpg">
							</div>
							<div class="swiper-slide">
								<img src="imgs/gallery/2.jpg">
							</div>
							<div class="swiper-slide">
								<img src="imgs/gallery/3.jpg">
							</div>
							<div class="swiper-slide">
								<img src="imgs/gallery/4.jpg">
							</div>	
							<div class="swiper-slide">
								<img src="imgs/gallery/5.jpg">
							</div>
						</div>
					</div>
					
					<!-- pagination -->
					<div class="swiper-pagination main-pagination gallery__pagination"></div>
				</div>	
			</section>

			<!-- 2: services -->
			<section class="backgrounds__item backgrounds__item-services services">
				<div class="backgrounds__back-color"></div>
				
				<div class="services__backgrounds">
					<div class="services__background" style="opacity: 1"></div>
					<div class="services__background"></div>
					<div class="services__background"></div>
					<div class="services__background"></div>
					<div class="services__background"></div>
					<div class="services__background"></div>
					<div class="services__background"></div>
					<div class="services__background"></div>
					<div class="services__background"></div>
				</div>

				<div class="backgrounds__item-container">
					<section class="services__list">
						<a href="" onclick="showService(1)">Лепной декор</a>
						<a href="" onclick="showService(4)">Реставрация лепного декора</a>
						<a href="" onclick="showService(7)">Скульптура</a>
						<a href="" onclick="showService(2)">Живопись</a>
						<a href="" onclick="showService(5)">Реставрация живописи</a>
						<a href="" onclick="showService(8)">Золочение</a>
						<a href="" onclick="showService(3)">Декор из бетона</a>
						<a href="" onclick="showService(6)">Дизайн-проекты</a>
						<a href="" onclick="showService(9)">Отделочные работы</a>
					</section>
					
					<div class="services__list-info">
						<h2 class="services__title">Title</h2>
						<div class="services__text">
							dsa dsa dssa dsa sdsa
							dsdasd d sads dsa s sada sads sad as s d
							s sd sa ds sa dsdssds s ssssssssss dsadsad sdsa ds
							sd asdsadssd fgnfdlvdjf bl bfidb diufsabi fsa9uf a
						</div>

						<button class="services__back-button" onclick="hideService()">
							<i class="fal fa-long-arrow-left"></i>
						</button>
					</div>

					<div class="swiper-container services-swiper-container">
						<button class="services__button main-pagination__button main-pagination__button-prev"></button>
						<button class="services__button main-pagination__button main-pagination__button-next"></button>
						
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="services__title">Лепной декор</div>
								<div class="services__text">
									Лепной декор или лепнина – это объемные (рельефные) 
									композиции и украшения на фасадах зданий и/или внутри него.
								</div>
							</div>

							<div class="swiper-slide">
								<div class="services__title">Живопись</div>
								<div class="services__text">
									Ремонт и реставрация гипсовой лепнины выполняется на 
									исторических фасадах и в интерьерах не только в постройках 
									дореволюционного или сталинского времени, но и в зданиях 
									современной эпохи.
								</div>
							</div>
							
							<div class="swiper-slide">
								<div class="services__title">Декор из бетона</div>
								<div class="services__text">
									Делаем любые декоративные изделия любых типов и любой сложности.
								</div>
							</div>

							<div class="swiper-slide">
								<div class="services__title">Реставрация лепного декора</div>
								<div class="services__text">
									Ремонт и реставрация гипсовой лепнины выполняется на исторических фасадах 
									и в интерьерах не только в постройках дореволюционного или 
									сталинского времени, но и в зданиях современной эпохи
								</div>
							</div>

							<div class="swiper-slide">
								<div class="services__title">Реставрация живописи</div>
								<div class="services__text">
									Восстанавливаем любую живопись любой сложности в короткие сроки.								              </div>
							</div>

							<div class="swiper-slide">
								<div class="services__title">Дизайн-проекты</div>
								<div class="services__text">
									Проектирование под ключ. Создадим уникальный проект, 
									индивидуальный проект для каждого клиента.
								</div>
							</div>
							
							<div class="swiper-slide">
								<div class="services__title">Скульптура</div>
								<div class="services__text">
									Наша мастерская изготавливает на заказ 
									статуэтки, бюсты, торсы, статуи из гипса.
								</div>
							</div>

							<div class="swiper-slide">
								<div class="services__title">Золочение</div>
								<div class="services__text">
									Золочением осуществляют и 
									реставрацию золотых украшений и придают более 
									эффектный внешний вид новым украшениям.
								</div>
							</div>

							<div class="swiper-slide">
								<div class="services__title">Отделочные работы</div>
								<div class="services__text">
									Занимаемся отделкой квартир, выравнивание стен, электрика, 
									сантехника, шпаклёвка и многое другое.
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- 3: projects -->
			<section class="backgrounds__item backgrounds__item-projects projects">
				<button class="projects__button main-pagination__button main-pagination__button-prev"></button>
				<button class="projects__button main-pagination__button main-pagination__button-next"></button>
				
				<div class="swiper-container projects-swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
					
							<img class="projects__image" src="imgs/projects/1.jpg">
							<div class="projects__title">Государственный музей-заповедник <br> «Царское Село»</div>
						</div>
						
						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/2.jpg">
							<div class="projects__title">Церковь святого Пантелеймона</div>
						</div>
						
						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/3.jpg">
							<div class="projects__title">Русский торгово-промышленный банк</div>
						</div>	

						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/4.jpg">
							<div class="projects__title">Частные квартиры и коттеджи</div>
						</div>

						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/5.jpg">
							<div class="projects__title">Консерватория им. Чайковского. <br> Концертный зал</div>
						</div>
						
						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/6.jpg">
							<div class="projects__title">Большой театр</div>
						</div>
						
						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/7.jpg">
							<div class="projects__title">Музей хоккейной славы</div>
						</div>

						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/8.jpg">
							<div class="projects__title">Коттеджи и квартиры</div>
						</div>
						
						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/9.jpg">
							<div class="projects__title">Кремль. Екатерининский зал</div>
						</div>
					
						<div class="swiper-slide">
							<div class="backgrounds__back-color"></div>
							
							<img class="projects__image" src="imgs/projects/10.jpg">
							<div class="projects__title">Кинотеатр "Украина"</div>
						</div>
					</div>
				</div>
			
				<!-- pagination -->
				<div class="swiper-pagination main-pagination projects__pagination"></div>
			</section>

			<!-- 4: about -->
			<section class="backgrounds__item backgrounds__item-about about">
				<div class="backgrounds__back-color"></div>
				
				<div class="backgrounds__item-container">
					<div class="about__container">
						<div class="about__text">
							В 1990 г. под названием «Eva Borisova» объединились специалисты — 
							реставраторы, модельщики, архитекторы, лепщики, имеющие большой опыт 
							в реставрации, создании или воссоздании интерьеров, казалось бы, 
							давно ушедших от сегодняшнего времени стилей и направлений.
						</div>

						<div class="about__stats">
							<div class="about__stat">
								<div class="counter">30</div>
								<span class="golden-rain">лет опыта</span>
							</div>
							<div class="about__stat">
								<div class="counter">20</div>
								<span class="golden-rain">сотрудников</span>
							</div>
							<div class="about__stat">
								<div class="counter">300</div>
								<span class="golden-rain">завершенных проектов</span>
							</div>
							<div class="about__stat">
								<div class="counter">16</div>
								<span class="golden-rain">компаний-партнеров</span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- 5: contacts -->
			<section class="backgrounds__item backgrounds__item-contacts contacts">
				<div class="backgrounds__item-container">
					<div class="contacts__container">
						<form class="contacts__form" autocomplete="off">
							<input type="text" name="name"  placeholder="Имя">
							<input type="text" name="phone" placeholder="Телефон">
							<input type="text" name="email" placeholder="Почта">

							<button>
								Отправить
							</button>
						</form>
						<ul class="contacts__list">
							<li>
								<a class="golden-rain" href="tel:+79673307462">+7 (967) 330 74 62</a>
							</li>
							<li class="golden-rain">г. Санкт-Петербург, ул. Профессора Попова, д. 26</li>
							<li>Для связи с нами: <span class="golden-rain"> EvaBorisova2018@yandex.ru </span></li>
							<li>
								Мы в instagram: 
								<a href="https://www.instagram.com/eva_b____/" class="golden-rain">@eva_b____</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</section>
	</main>

	<!-- all js logic -->
	<script>
	
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	
		// navigation button

		var isNavigationActive = false;
		var navigationList     = document.getElementsByClassName("nav__links")[0];
		var navigationButton   = document.getElementsByClassName("nav__hamburger")[0];

		function showNavigation()
		{
			navigationButton.classList.add("is-active");
			navigationList.classList.add("nav__links--active")
			
			isNavigationActive = true;
		}

		function hideNavigation()
		{
			navigationButton.classList.remove("is-active");
			navigationList.classList.remove("nav__links--active");
		
			isNavigationActive = false;
		}

		var toogleNavigation = function() 
		{
			if (isNavigationActive) 
				hideNavigation();
			else
				showNavigation();
		}

		navigationButton.onclick = toogleNavigation;

		// pagination

		var pagination = $(".pagination");

		function paginationNext()
		{
			$(".pagination__item--active")
				.removeClass("pagination__item--active")
				.next()
				.addClass("pagination__item--active");
		}
	
		function paginationPrev()
		{
			$(".pagination__item--active")
				.removeClass("pagination__item--active")
				.prev()
				.addClass("pagination__item--active");
		}

		function showPagination()
		{
			if (window.innerWidth >= mobileWidth)
			{
				pagination.show();
			}
		}

		function hidePagination()
		{
			pagination.hide();
		}

		// gallery slider

		var galleryWwiper = new Swiper('.gallery-swiper-container', {
			navigation: {
				nextEl: ".gallery .main-pagination__button-next",
				prevEl: ".gallery .main-pagination__button-prev",
			},
			
			resistanceRatio: 0,
			slidesPerView: 'auto',

			breakpoints: {
				0: {
					spaceBetween: 32
				},
				768: {
					spaceBetween: 0
				}
			},

			pagination: {
				el: ".gallery__pagination",
				clickable: true
			}
		});

		// projects slider
		
		var projectsSwiper = new Swiper('.projects-swiper-container', {
			navigation: {
				nextEl: ".projects .main-pagination__button-next",
				prevEl: ".projects .main-pagination__button-prev",
			},

			speed: 500,
			simulateTouch: false,
			resistanceRatio: 0,

			breakpoints: {
				0: {
					allowTouchMove: true,		
				},
				768: {
					allowTouchMove: false
				} 
			},

			pagination: {
				el: ".projects__pagination",
				clickable: true
			}
		});

		// services slider
		
		var currentService = 0;
	
		function onServiceChanged(newIndex)
		{
			if (newIndex == currentService) return;

			$(".services__background").eq(newIndex).css("opacity", "1");
			$(".services__background").eq(currentService).css("opacity", "0");
		
			currentService = newIndex;
		}

		var servicesSwiper = new Swiper('.services-swiper-container', {
			navigation: {
				nextEl: ".services .main-pagination__button-next",
				prevEl: ".services .main-pagination__button-prev",
			},
			
			on: {
				slideChange: function() { onServiceChanged(this.activeIndex); }
			},

			speed: 500,
			simulateTouch: false,
			allowTouchMove: true,		
			resistanceRatio: 0
		});
	
		function showService(index)
		{
			event.preventDefault();
		
			if (window.innerWidth >= mobileWidth)
			{
				onServiceChanged(index - 1);

				let speed =  500 + Math.abs((index - 1) - servicesSwiper.activeIndex) * 250 - 250;

				servicesSwiper.slideTo(index - 1, speed);
			}
			else
			{
				onServiceChanged(index - 1);

				$(".services__list-info .services__title").text(services[index - 1].title);
				$(".services__list-info .services__text" ).text(services[index - 1].text );

				$(".services__list"     ).css("transform", "translateX(-100%)");
				$(".services__list-info").css("transform", "translateX(0)");
			}
		}

		function hideService()
		{
			$(".services__list"     ).css("transform", "translateX(0)");
			$(".services__list-info").css("transform", "translateX(100%)");
		}

		var services = [
			{
				title: "Лепной декор",
				text: "Лепной декор- это объёмные( рельефные) композиции и украшения на фасадах зданий или внутри него. Делаем колонны, розетки, тяги, фризы и многое другое."
			},
			{
				title: "Живопись",
				text: "Выполняем работы любой сложности, станковая, альфрейная,так же делаем реставрационные работы живописи."
			},
			{
				title: "Декор из бетона",
				text: "Делаем любые декоративные изделия любых типов и любой сложности."
			},
			{
				title: "Реставрация лепного декора",
				text: "Ремонт и реставрация гипсовой лепнины выполняется на исторических фасадах и в интерьерах не только в постройках дореволюционного или сталинского времени, но и в зданиях современной эпохи."
			},
			{
				title: "Реставрация живописи",
				text: "Восстанавливаем любую живопись любой сложности в короткие сроки."
			},
			{
				title: "Дизайн-проекты",
				text: "Проектирование под ключ. Создадим уникальный проект, индивидуальный проект для каждого клиента."
			},
			{
				title: "Скульптура",
				text: "Наша мастерская изготавливает на заказ статуэтки, бюсты, торсы, статуи из гипса."
			},
			{
				title: "Золочение",
				text: "Золочением осуществляют и реставрацию золотых украшений и придают более эффектный внешний вид новым украшениям."
			},
			{
				title: "Отделочные работы",
				text: "Занимаемся отделкой квартир, выравнивание стен, электрика, сантехника, шпаклёвка и многое другое."
			}
		];
		
		// for f*cking movement of mobile keyboard support
	
		var curHeight = window.innerHeight;

		window.addEventListener('resize', function(event){
			if (window.innerWidth < mobileWidth && window.innerHeight < curHeight)
			{
				$(".contacts__container")
					.css("transform", "translateY(-" + (curHeight - window.innerHeight)  + "px)");
				curHeight = window.innerHeight;	
			}
			else if (window.innerWidth < mobileWidth && window.innerHeight > curHeight)
			{
				$(".contacts__container")
					.css("transform", "translateY(0)");
				curHeight = window.innerHeight;	

			}
		});

		//

		function changePage(el)
		{
			let index = pageURIs.indexOf( $(el).attr("href"));

			if (curBot == 0)
				$("body").removeClass("viewing-header");

			curBot += 100 * index - curBot;
			
			//

			$("body").removeClass();

			$(".pagination__item--active")
				.removeClass("pagination__item--active")	
			$(".pagination__item").eq(curBot / 100)
				.addClass("pagination__item--active");

			//

			whenScroll();
	
			$(".pagination__item--active")
				.removeClass("pagination__item--active")	
			$(".pagination__item").eq(curBot / 100)
				.addClass("pagination__item--active");

			//		
			if (isNavigationActive)
			{
				hideNavigation();
				setTimeout(() => {
					scrollable = false;
					$(".backgrounds").css("transform", "translateY(" + -curBot + "%)");
					setTimeout(function() {
						scrollable = true
					}, 1000);
				}, 500);
			}
			else {
				scrollable = false;
				$(".backgrounds").css("transform", "translateY(" + -curBot + "%)");
				setTimeout(function() {
					scrollable = true
				}, 1000);
			}
		}
		
		// feedback form

		$(document).ready(function() {
			$(".contacts__form").submit(function() {
				$.ajax({
					type: "POST",
					url: "/mail.php",
					data: $(this).serialize()
				}).done(function() {
					$(this).find("input").val("");
					alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
					$("#form").trigger("reset");
				});

				return false;
			});
		});
	</script>
	
	<script src="/js/numbers.js"></script>

</body>
</html>
