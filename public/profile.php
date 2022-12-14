<html>
    <head>
        <link rel="stylesheet" href="./Css/profile.css">
    </head>
	
    <body>
	<?php
		include "./navbar.html"
		?>
    <article class="cssui-usercard">
		<div class="cssui-usercard__body">
			<header class="cssui-usercard__header">
				<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fbd%2Ff6%2Fbb%2Fbdf6bb3a42c7c27d7d83b9332d23ca1d.jpg&f=1&nofb=1&ipt=0949a9c68290a1d3e702acb75492b55ebdffb8e8d0017414ff8ee28e202c4879&ipo=images" class="cssui-usercard__avatar" alt="Avatar">
				<div class="cssui-usercard__header-info">
					<h3 class="cssui-usercard__name">The Last Airbender <span class="cssui-usercard__name-label">Aang</span></h3>
					<span class="cssui-usercard__post">Saved the world from the fire nation</span>
				</div>
			</header>
			<div class="cssui-usercard__content">
				<div class="cssui-slider">

					<!-- the control elements of slider -->

					<input id="slide1" type="radio" class="cssui-slider__switch cssui-usercard__switch" name="slider-controls" checked autofocus>
					<label for="slide1" class="cssui-slider__control cssui-usercard__control"></label>
					<input id="slide2" type="radio" class="cssui-slider__switch cssui-usercard__switch" name="slider-controls">
					<label for="slide2" class="cssui-slider__control cssui-usercard__control"></label>
					<input id="slide3" type="radio" class="cssui-slider__switch cssui-usercard__switch" name="slider-controls">
					<label for="slide3" class="cssui-slider__control cssui-usercard__control"></label>

					<div class="cssui-slider__slides">

						<!-- first slide -->

						<div class="cssui-slider__slide">
							<h4 class="cssui-usercard__title">About me</h4>
							<div class="cssui-usercard__stats">
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-earth"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Language</span>
										<span class="cssui-stats__value">English</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-location"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Hometown</span>
										<span class="cssui-stats__value">London</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-calendar"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Date of birth</span>
										<span class="cssui-stats__value">03 December 1990</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-man-woman"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Relationship</span>
										<span class="cssui-stats__value">Engaged</span>
									</div>
								</div>
							</div>
						</div>

						<!-- second slide -->

						<div class="cssui-slider__slide">
							<h4 class="cssui-usercard__title">My Skills</h4>
							<div class="cssui-usercard__stats">
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-html"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">HTML</span>
										<span class="cssui-stats__value">85%</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-vue"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">VUE</span>
										<span class="cssui-stats__value">90%</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-angular"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">AngularJS</span>
										<span class="cssui-stats__value">70%</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-js"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">NodeJS</span>
										<span class="cssui-stats__value">82%</span>
									</div>
								</div>
							</div>
						</div>

						<!-- third slide -->

						<div class="cssui-slider__slide">
							<h4 class="cssui-usercard__title">My Contacts</h4>
							<div class="cssui-usercard__stats">
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-email"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">E-mail</span>
										<a href="#0" class="cssui-stats__value">text@gmail.com</a>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-phone"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Phone</span>
										<a href="tel:79000000000" class="cssui-stats__value">7-900-000-00-00</a>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-whatsapp"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">WhatsApp</span>
										<span class="cssui-stats__value">+7 000 000-00-00</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-skype"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Skype</span>
										<span class="cssui-stats__value">username</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="cssui-usercard__footer">
			<a href="#0" class="cssui-social cssui-usercard__social">
				<i class="cssui-icon icon-twitter"></i>
				<span class="cssui-social__name">twitter</span>
			</a>
			<a href="#0" class="cssui-social cssui-usercard__social">
				<i class="cssui-icon icon-linkedin"></i>
				<span class="cssui-social__name">linkedin</span>
			</a>
			<a href="#0" class="cssui-social cssui-usercard__social">
				<i class="cssui-icon icon-codepen"></i>
				<span class="cssui-social__name">codepen</span>
			</a>
		</footer>
	</article>
  <footer class="footer">
    <div class="main-container footer__container">
      <div class="footer__column">
        <!-- <span>You liked?</span> -->
        <a href="https://www.paypal.me/melnik909" class="donate"  rel="noopener noreferrer" target="_blank">Sponser my wedding with Katara</a>
      </div>
      <!-- <a href="https://stas-melnikov.ru" class="melnik909"  rel="noopener noreferrer" target="_blank">Developed by Stas Melnikov</a> -->
    </div>
  </footer>
    </body>
</html>

