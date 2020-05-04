<?php

if (isset($_POST['Gonder'])) {

	if ($_POST['KullanıcıAd']=="b191210039@sakarya.edu.tr" && $_POST['Sifre']=="1234") {

		echo "<script>alert('HOŞGELDİNİZ b191210039'); location.href='index.html'</script>";		
	}

	function valid_email( $str )
	{
	return ( ! preg_match ( "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str ) ) ? FALSE : TRUE;
	}

	if (!valid_email($_POST['KullanıcıAd'])) {
		echo "<script>alert('GİRİLEN DEĞER E-POSTA OLMALIDIR'); location.href='login.html'</script>";
	}

	else if($_POST['KullanıcıAd']=="" || $_POST['Sifre']==""){
		echo "<script>alert('KULLANICI ADI VEYA ŞİFRE BOŞ BIRAKILAMAZ'); location.href='login.html'</script>";
	}

	else{
		echo "<script>alert('KULLANICI ADI VEYA ŞİFRE HATALI'); location.href='login.html'</script>";
	}


}

?>