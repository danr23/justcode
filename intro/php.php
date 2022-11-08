<?php
$firstValue = $_GET['firstValue'];
$twoValue = $_GET['twoValue'];
$pmur = $_GET['pmur'];
if ($pmur == 'plus') {
$equals = $firstValue+ $twoValue;
}else{
if ($pmur == 'minus') {
$equals = $firstValue- $twoValue;
}else{
if ($pmur == 'times') {
$equals = $firstValue* $twoValue;
}else{
if ($pmur == 'divide') {
$equals = $firstValue / $twoValue;
}
}
}
}
echo $equals;
?>
