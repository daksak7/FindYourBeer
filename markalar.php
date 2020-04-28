<?php include 'header.php'?>
<?php include 'connect.php'?>
        <link rel="stylesheet" href="css/cards.css">
        <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
    <body>
<?php
// Make a MySQL Connection
 //$query = "SELECT marka_adı,marka_mensei,marka_foto,marka_aciklama FROM markalar"; 
	 
 //$result = mysql_query($query) or die(mysql_error());

$result = mysqli_connect($host, $uname, $pwd) or die("Connection error: ". mysqli_error());
mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error());
$print = mysqli_query($result,"SELECT marka_adi,marka_mensei,marka_foto,marka_aciklama FROM marka") or die();
				
				
echo ' <div class="cards">';

while($row = mysqli_fetch_array($print)){
include 'card_part1.php';
        echo $row['marka_foto'];
include 'card_part2.php';
        echo $row['marka_adi'];
include 'card_part3.php';
        echo $row['marka_mensei'];    
include 'card_part4.php';
        echo $row['marka_aciklama'];      
include 'card_part5.php';
   }
?>
      
</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" ></script>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>


  	</body>
<?php include 'footer.php'?>