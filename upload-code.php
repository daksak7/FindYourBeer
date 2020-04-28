<?php include 'header.php'?>
<?php

	/*-- we included connection files--*/
	include "connect.php";

	/*--- we created a variables to display the error message on design page ------*/
	$error = "";

	if (isset($_POST["btn_upload"]) == "Ekle")
	{
		$file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];
		$markaadi = $_POST["markaadi"];
		$markamensei = $_POST["markamensei"];
		$markafoto = "img/markalogo/".$file_name;
		$markaaciklama = $_POST["markaaciklama"];

		if(file_exists($markafoto))
		{
			$error = "Bu kayıttan daha önce yapılmış!";
		}
			else
			{
				$conn = mysqli_connect($host, $uname, $pwd, $db_name) or die("Bağlantı hatası ");
				$sql = "INSERT INTO marka ( marka_adi , marka_mensei , marka_foto , marka_aciklama )
				VALUES ( '$markaadi' , '$markamensei' , '$markafoto' , '$markaaciklama' )";
				echo $markafoto;

////////////////////////////// İLLET HATA BÖLÜMÜ /////////////////////////////////////////

				mysqli_query($conn,$sql) or die ("Kayıt eklenemedi.");
////////////////////////////// İLLET HATA BÖLÜMÜ /////////////////////////////////////////

				move_uploaded_file($file_tmp,$markafoto);
				$error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Marka başarıyla eklendi.";
			}
		
	}

?>
