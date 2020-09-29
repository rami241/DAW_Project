<?php
// didn't work -_- [].....
$dir = __DIR__ . DIRECTORY_SEPARATOR . "../img/Pictures" . DIRECTORY_SEPARATOR;
$images = glob($dir . "*.{jpg,jpeg,png,bmp}", GLOB_BRACE);
foreach ($images as $i) {
	$x = '../img/Pictures/';
	//echo "<a href="{$x}/{$i}"><img src="{$x}/{$i}"></a>";
	printf("<a href="../img/Pictures/%s"><img src="../img/Pictures/%s"></a>",basename($i),basename($i));
}
?>