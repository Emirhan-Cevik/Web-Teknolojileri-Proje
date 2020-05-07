<?php

if (isset($_POST['Gonder'])) {

	echo"<h3>İsim.............................:".$_POST['isim']."</h3>";
	echo"<h3>Soyisim.......................:".$_POST['soyad']."</h3>";
	echo"<h3>E-mail.........................:".$_POST['email']."</h3>";
	echo"<h3>Telefon No..................:".$_POST['tel']."</h3>";
	echo"<h3>Doğum Tarihi............:".$_POST['dogumTarih']."</h3>";
	echo"<h3>Mesajın Konusu........:".$_POST['MesajKonu']."</h3>";

	$diller=$_POST['veri'];

	echo"<h3>Seçilen Diller:</h3>";

	foreach ($diller as $dil) {
		echo "<h3>-".$dil."<br>";
	}

	echo"<h3>Cinsiyet......................:".$_POST['radio']."</h3>";

	echo"<h3>Gönderilen Mesaj.....:".$_POST['aciklama']."</h3>";

}

?>