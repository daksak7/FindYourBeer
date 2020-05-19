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

  	  <!--	<?php include 'words_N5.php'?> -->
      <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  background-color: #343a40;
  width: 15%;
  height: auto;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  margin-top: 10px;
  float: left;
  padding: 0px 12px;
  width: 85%;
  border-left: none;
  height: auto;
}


</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">KANJI</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">KELİME</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
    <?php include 'kanji_N5.php'?>


</div>

<div id="Paris" class="tabcontent">
        <?php include 'words_N5.php'?> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 




	

</body>
<style>
  body {
  background-image: url("img/login_background.jpg"); 
  background-size: 100%;}
</style>



<?php include 'footer.php'?>