<?php
if(!isset($_SESSION)) 
    { 
    session_start();
if(!isset($_SESSION['loggedin'])) {
  include 'header-search.php';
}else{
  include 'header-search-loggedin.php';

}  
    }else{
if(!isset($_SESSION['loggedin'])) {
  include 'header-search.php';
}else{
  include 'header-search-loggedin.php';	

}
}

?>


<link rel="stylesheet" href="css/styles.css">
<body>

  	  <!-- 	<?php include 'words_N1.php'?> -->



	

</body>
<style>
  body {
  background-image: url("img/login_background.jpg"); 
  background-size: 100%;}
</style>



<?php include 'footer.php'?>