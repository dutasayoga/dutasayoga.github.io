<?php
include "conn/conn.php";
// $date = date('Y-m-d');
// $time = date("H:i:s", time());

// // $date = date('m-d-Y h:i:s a', time());
// $datetime = date('Y-m-d') . " - " . time(" H:i:s", time());
$sql = 'UPDATE sistem_okupansi SET time=now() WHERE no=33';
$result = $conn->query($sql);
//echo $datetime;

?>
