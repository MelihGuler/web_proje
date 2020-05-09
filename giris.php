<!doctype html>
<html lang="en">
<?php require_once "includes/header.php"; ?>
<body>
<?php require_once "includes/navbar.php"; ?>
<div id="mg_flex_main_article">
	<h2 style="margin: 20px 0 0 20%;">
		Giriş Yap
	</h2>
	<div id="mg_flex_default_article">
		<form name="iletisim_form" action="./action/login.php" method="post">
			<div class="input_description">Kullanıcı Adı:</div>
			<input type="email" name="username" required><br><br><br>
			<div class="input_description">Şifre:</div>
			<input type="password" name="password" required><br><br><br>
			<button type="submit" style="margin-right: 15px;">Gönder</button>
		</form>
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
	</div>
</div>

<?php require_once "includes/footer.php"; ?>

</body>
</html>
