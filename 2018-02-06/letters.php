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
<p>Hello
<?php
	$peace = "✌";
	$hi = "✋";
	$thumb = "👍";
	$name = $_GET['name'];
	$counter = 1;

	while ($counter <= 440) {
			echo "$peace $hi $thumb $name";
			$counter ++;
		}	
?>
 Goodbye</p>

</body>
</html>