<?php
$conn = mysqli_connect("localhost", "root", "0000", "jitentr");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql_kanji = "SELECT kanji_id,kanji_wr FROM n5_kanji_list";
$result_kanji = $conn->query($sql_kanji);
if ($result_kanji->num_rows > 0) {
// output data of each row
while($row_kanji = $result_kanji->fetch_assoc()) {
echo "<button type='button' class='btn btn-secondary' style='height: 150px;width: 150px;font-family: monospace;font-size:40px;'>".$row_kanji["kanji_wr"]." </button>";
}

} else { echo "0 results"; }
$conn->close();
?>

