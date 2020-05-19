<?php include 'firstload.php'?>

  <div class="wrapper">
    <form class="form-signin" action="registeroperation.php" method="post">       
      <h2 class="form-signin-heading" align="center">Kayıt Ol</h2>
      <input type="text" class="form-control" name="username" placeholder="Kullanıcı adınız" required="" autofocus="" />
       <br>
      <input type="password" class="form-control" name="password" placeholder="Şifreniz" required=""/>   
       <br>
      <input type="text" class="form-control" name="email" placeholder="E-posta adresiniz" required="" autofocus="" />
       <br>
      <button class="btn btn-lg btn-primary btn-block" name="btn-signup" id="btn-signup"type="submit">Kayıt Ol</button>   
    </form>
  </div>

  <style type="text/css">
    @import "bourbon";

body {

  background-image: url("img/login_background.jpg"); 
  background-size: 100%;
}

.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}

  </style>
<?php include 'footer.php'?>