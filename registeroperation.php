<?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: index.php");
 }
 include_once 'connect.php';

 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  $username = trim($_POST['username']);
  $username = strip_tags($username);
  $username = htmlspecialchars($username);
  
  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  if (strlen($username) < 6) {
   $error = true;
   $nameError = "Kullanıcı adınız en az 6 karakter içermelidir.";
       echo  'Kullanıcı adınız en az 6 karakter içermelidir.';
      // sleep(2);
    header('Location: redirect-error.php');
  }
  
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Lütfen geçerli bir mail adresi giriniz.";
       echo "Lütfen geçerli bir mail adresi giriniz.";
    //   sleep(2);
       header('Location: redirect-error.php');
  } else {
   $query = "SELECT email FROM users WHERE email='$email'";
   $result = mysqli_query($conn,$query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Bu mail adresi zaten kullanılmakta.";
    echo  "Bu mail adresi zaten kullanılmakta.";
      //  sleep(3);
       header('Location: redirect-error.php');
   }
  }
  if(strlen($password) < 6) {
   $error = true;
   $passError = "Şifreniz en az 6 karakter içermeli.";
       echo  "Şifreniz en az 6 karakter içermeli.";
      //     sleep(3);
       header('Location: redirect-error.php');
  }
  
  //$password = hash('sha256', $password);
  
  if( !$error ) {
   
   $query = "INSERT INTO users(username,password,email) VALUES('$username','$password','$email')";
   $res = mysqli_query($conn,$query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Başarıyla kaydoldunuz.Giriş yapabilirsiniz.";
           header('Location: redirect.php');
  
    unset($username);
    unset($password);
    unset($email);
   } else {
    $errTyp = "danger";
    $errMSG = "Birşeyler ters gitti,daha sonra tekrar deneyin...";
    echo  "Birşeyler ters gitti,daha sonra tekrar deneyin...";
       //    sleep(3);
       header('Location: redirect-error.php');
   } 
    
  }
  
  
 }
?>