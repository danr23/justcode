<?php
$cot = $_GET['cot'];
if ($cot == "google.com") {
header('Location: https://google.com');
}else {
header('Location: index.htm');
}
if ($cot == "гугл") {
header('Location: https://google.com');
}
if ($cot == "АЛО") {
header('Location: dlya_php/alo.php');
}
if ($cot == "ало") {
header('Location: dlya_php/alo.php');
}
if ($cot == "без css и картинок") {
header('Location: dlya_php/css.php');
}
?>
