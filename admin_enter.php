<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Passwd</title>
</head>
<body>
	<form action="admin_enter.php" method="post">
		<input type="text" name="passwd">
		<input type="submit" value="Отправить">
	</form> 
</body>
</html>

<?php
$text = $_POST['passwd'];
?>

<?php
// function clean($value = "123") {
//     $value = trim($value);
//     return $value;
// }
if ($text == "123") {
    echo "<div class=\"container\">
			<h2> Админка </h2>
		  </div>";
}
?>