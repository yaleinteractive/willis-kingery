<!doctype html>
<html lang="en">
<head></head>

<body>
<!-- Greetings

<?php

$letter = $_GET['letter'];
$number = $_GET['number'];

$counter = 1;
while ($counter <= $number) {
	echo "$letter";
	$counter++;
}

echo "You asked for $number $letter's";

?>

Goodbye. -->


<!-- Greetings!

<?php
$letter = $_GET['letter'];
$number = $_GET['number'];
$counter = 1;
while ($counter <= $number) {
  echo "$letter ";
  $counter++;
  system(escapeshellcmd("say $letter"));
  flush();
}
?>

Goodbye. -->

<?php
	$peace = "✌";
	$hi = "✋";
	$thumb = "👍";
	$counter = 1;

	while ($counter <= 10000) {
			echo "$peace" . "$hi" . "$thumb";
			$counter ++;
		}	
?>

<p>Hello</p>

</body>
</html>