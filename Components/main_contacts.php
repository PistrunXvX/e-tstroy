<div class="container-fluid contact-container">
	<div class="row">
		<div class="col text-contact">
			<h2>Вы можете оставить заявку</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-6">
			<section class="contact-me main-contact-phone">
				<h2>Оставтье заявку</h2>
				<form action="../php/send.php" method="post">
					<input type="email" placeholder="Ваш email" name="email" required>
					<input type="tel" placeholder="Ваш телефон" name="phone" required>
					<button type="submit"></button>
				</form>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col text-contact">
			<p>Или связаться с нами</p>
		</div>
	</div>
	<div class="container">
		<div class="row no-gutters">
			<div class="col-6">
				<section class="contacts-company main-contact">
					<section class="phone">
						<p>
							Наш телефон
						</p>
						<span>(499) 391-22-19</span>
					</section>
					<section class="email">
						<p>
							Email
						</p>
						<span>e-tstroy@yandex.ru</span>
					</section>
				</section>
			</div>
			<div class="col-6 addres-company">
				<section class="addres-company">
					<p>
						Мы находимся
					</p>
					<span>
						г. Москва,  ул. Свободы, д. 35, к. 14
					</span>
				</section>
			</div>
		</div>
	</div>
	<div id="map" style="width: 100%; height: 300px;"></div>
</div>