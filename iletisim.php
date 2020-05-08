<!doctype html>
<html lang="en">
<?php require_once "includes/header.php"; ?>
<?php require_once "assets/header/head-iletisim.php"; ?>
<body>
<?php require_once "includes/navbar.php"; ?>
<div id="mg_flex_iletisim_container">
	<h2 style="margin: 20px 0 0 20%;">
		İletişim Formu
	</h2>
	<div id="mg_flex_iletisim_article">
		<form name="iletisim_form" action="./action/iletisim.php" method="post">
			<div class="input_description">İsminiz:</div>
			<input type="text" name="name" required><br><br><br>
			<div class="input_description">Soyisminiz:</div>
			<input type="text" name="surname" required><br><br><br>
			<div class="input_description">Email:</div>
			<input type="email" name="email" required><br><br><br>
			<div class="input_description">Sitenin Beğendiğiniz yanları:</div>
			<input type="checkbox" name="begen_tasarim" id="begen_tasarim"> <label
					for="begen_tasarim">Tasarımı</label><br>
			<input type="checkbox" name="begen_icerik" id="begen_icerik"> <label for="begen_icerik">İçerik</label><br>
			<input type="checkbox" name="begen_dinamiklik" id="begen_dinamiklik"> <label for="begen_dinamiklik">Dinamiklik</label><br><br><br>
			<div class="input_description">İletişime Geçme Sebebiniz:</div>
			<select name="reason" required>
				<option value="İstek">İstek</option>
				<option value="Şikayet">Şikayet</option>
				<option value="Öneri">Öneri</option>
			</select><br><br><br>
			<div class="input_description">Mesajınız:</div>
			<textarea style="max-width: 100%;" name="mesaj" required></textarea><br>
			<div class="input_description">Siteye Puanınız(0-100):</div>
			<input id="input_puan" name="puan" type="range" min="0" max="100" value="0" required><label
					id="site_puan">0</label>
			<br><br><br>
			<button type="submit" style="margin-right: 15px;">Gönder</button>
			<button id="clear_form" type="reset">Formu Temizle</button>
		</form>
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
	</div>
</div>

<?php require_once "includes/footer.php"; ?>
<script>
	document.getElementById("input_puan").onchange = function () {
		document.getElementById("site_puan").innerHTML = this.value;
	};
	document.getElementById("clear_form").onclick = function () {
		document.getElementById("site_puan").innerHTML = "0";
	};
</script>
</body>
</html>
