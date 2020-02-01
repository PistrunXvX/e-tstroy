	<?php
$email = $_POST['email'];
$phone = $_POST['phone'];

$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);

$email = urldecode($email);
$phone = urldecode($phone);

$email = trim($email);
$phone = trim($phone);

mail("killerdjek@gmail.com", "Заявка с сайта", "E-mail: " . $email . ". Телефон: " . $phone, "From: e-tstroy@yandex.com \r\n");
?>

	<div class="container-fluid report-back">
		<div class="row">
			<div class="col report-style">
				<h2>Заявяка отправлена!</h2>
				<button><a href="../index.php">Вернутся на сайт</a></button>
			</div>
		</div>
	</div>
	<style>
		.report-style {
		text-align: center;
		color: #173E44;
		font-size: 55px;
	}

	.report-style button {
		color: white;
		background-color: #2196F3;
		padding: 1%;

		border-radius: 10px;
	}

	.report-style a {
		color: white;
		font-size: 39px;
		text-decoration: none;
	}

	.report-style button:hover {
		background-color: #1970B5;
	}
	</style>