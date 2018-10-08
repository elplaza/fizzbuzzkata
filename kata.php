<?php

require_once(__DIR__.'/vendor/autoload.php');

use FizzBuzz\Kata\Kata;

try {
	echo str_pad('', 40, '-=', STR_PAD_BOTH) . PHP_EOL;
	echo str_pad(' FIZZ BUZZ KATA ', 40, '-=', STR_PAD_BOTH) . PHP_EOL;
	echo str_pad('', 40, '-=', STR_PAD_BOTH) . PHP_EOL;
	echo PHP_EOL;
	echo str_pad('SIMPLE', 20, ' ', STR_PAD_BOTH) . str_pad('IMPROVED', 20, ' ', STR_PAD_BOTH) . PHP_EOL;
	echo PHP_EOL;

    $kata = new Kata();
	for($i = 1; $i <= 100; $i++) {
		echo str_pad($kata->simpleFizzBuzz($i), 20, ' ', STR_PAD_BOTH) . str_pad($kata->improvedFizzBuzz($i), 20, ' ', STR_PAD_BOTH) . PHP_EOL;
	}
	echo PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}


