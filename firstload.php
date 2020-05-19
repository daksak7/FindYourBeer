<?php
if(!isset($_SESSION)) 
    { 
    session_start();
if(!isset($_SESSION['loggedin'])) {
  include 'header.php';
}else{
  include 'header-loggedin.php';

}  
    }else{
if(!isset($_SESSION['loggedin'])) {
  include 'header.php';
}else{
  include 'header-loggedin.php';	

}
}

?>