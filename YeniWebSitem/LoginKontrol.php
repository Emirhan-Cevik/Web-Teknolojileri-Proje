<?php

if (isset($_POST['Giris'])) {

	if ($_POST['KullanıcıAd']=="b191210039@sakarya.edu.tr" && $_POST['Sifre']=="1234") {

		echo "<script>alert('HOŞGELDİNİZ b191210039'); location.href='index.html'</script>";		
	}

	else{
		echo "<script>alert('KULLANICI ADI VEYA ŞİFRE HATALI'); location.href='login.html'</script>";
	}

}

?>