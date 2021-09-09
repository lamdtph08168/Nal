<?php
for ($i = 1; $i < 100; $i++) {
	if ($i % 3 === 0) {
		echo "$i Fizz" . "<br>";
	} elseif (($i / 10) > 3 && ($i / 10) < 4) {
		echo "$i Fizz" . "<br>";
	} elseif (($i % 10) === 3) {
		echo "$i Fizz" . "<br>";
	}
	;
	if ($i % 5 === 0) {
		echo "$i Buzz" . "<br>";
	} elseif (($i / 10) > 5 && ($i / 10) < 6) {
		echo "$i Buzz" . "<br>";
	} elseif (($i % 10) === 5) {
		echo "$i Buzz" . "<br>";
	}

}
