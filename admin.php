<?php include 'upload-code.php'?>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<title>Image Upload - Campuslife</title>
	<style>
	
		html, body{background: #ececec; height: 100%; margin: 0; font-family: Arial;}
		.main{height: 100%; display: flex; justify-content: center;}
		.main .image-box{width:300px; margin-top: 30px;}
		.main h2{text-align: center; color: #4D4D4D;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px; margin-bottom: 10px;}
		.main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7;}
		.main .msg{color: red; text-align: center;}
	
	</style>
	</head>

	<body>
	<!-------------------Main Content------------------------------>
	<div class="container main" >

	<div class="msg">
			<strong>
		<?php if(isset($error)){echo $error;}?>
	</strong>
	</div>

		<div class="image-box">
			<h2>Marka ekleme </h2>
			<form method="POST" name="upfrm" action="" enctype="multipart/form-data">
				<div>
					<input type="text" placeholder="Marka adı" name="markaadi" class="tb" />
					<input type="text" placeholder="Marka menşei" name="markamensei" class="tb" />
					<input type="file" name="fileImg" class="file_input" />
					<textarea type="text" placeholder="Marka açıklaması" name="markaaciklama" class="tb"></textarea>
					<input type="submit" value="Ekle" name="btn_upload" class="btn" />
				</div>
			</form>
			<div class="msg">

			</div>
		</div>
	</div>
	</body>
	</html>
	