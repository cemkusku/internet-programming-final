<?php

require("db_connection.php");

$isim = $_POST["isim"];
$mail = $_POST["mail"];
$konu = $_POST["konu"];
$mesaj = $_POST["mesaj"];

$sql = "INSERT INTO iletisim (isim, email, konu, mesaj)
  VALUES ('$isim', '$mail', '$konu','$mesaj')";
  // use exec() because no results are returned
  $conn->exec($sql);

?>