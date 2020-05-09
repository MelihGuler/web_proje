<!doctype html>
<html lang="en">
<?php require_once "includes/header.php"; ?>
<body>
<?php require_once "includes/navbar.php"; ?>
<div id="mg_flex_main_article">
	<h2 style="margin: 20px 0 0 20%;">
		İletişim Formu
	</h2>
	<div id="mg_flex_default_article">
		<form name="iletisim_form" action="./action/iletisim.php" method="post" onsubmit="return validateForm();">
			<div class="input_description">İsminiz:</div>
			<input type="text" name="name"><br><br><br>
			<div class="input_description">Soyisminiz:</div>
			<input type="text" name="surname"><br><br><br>
			<div class="input_description">Email:</div>
			<input type="email" name="email"><br><br><br>
			<div class="input_description">Sitenin Beğendiğiniz yanları:</div>
			<input type="checkbox" value="1" id="begen_tasarim"> <label
					for="begen_tasarim">Tasarımı</label><br>
			<input type="checkbox" value="2" id="begen_icerik"> <label for="begen_icerik">İçerik</label><br>
			<input type="checkbox" value="3" id="begen_dinamiklik"> <label for="begen_dinamiklik">Dinamiklik</label><br><br><br>
			<div class="input_description">İletişime Geçme Sebebiniz:</div>
			<select name="reason">
				<option value="İstek">İstek</option>
				<option value="Şikayet">Şikayet</option>
				<option value="Öneri">Öneri</option>
			</select><br><br><br>
			<div class="input_description">Mesajınız:</div>
			<textarea style="max-width: 100%;" name="mesaj"></textarea><br>
			<div class="input_description">Siteye Puanınız(0-100):</div>
			<input id="input_puan" name="puan" type="range" min="0" max="100" value="0"><label
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
	function validateForm() {
		var isim = document.forms['iletisim_form'][0].value;
		var soyIsim = document.forms['iletisim_form'][1].value;
		var email = document.forms['iletisim_form'][2].value;
		var mesaj = document.forms['iletisim_form'][7].value;
		if (isim == null || isim == "") {
			alert("İsim kısmı boş bırakılamaz");
			return false;
		}

		if (soyIsim == null || soyIsim == "") {
			alert("Soyisim kısmı boş bırakılamaz");
			return false;
		}
		if (email == null || email == "") {
			alert("Email kısmı boş bırakılamaz");
			return false;
		}
		if (mesaj == null || mesaj == "") {
			alert("Mesaj kısmı boş bırakılamaz");
			return false;
		}
	}

	document.getElementById("input_puan").onchange = function () {
		document.getElementById("site_puan").innerHTML = this.value;
	};
	document.getElementById("clear_form").onclick = function () {
		document.getElementById("site_puan").innerHTML = "0";
	};
</script>
</body>
</html>
