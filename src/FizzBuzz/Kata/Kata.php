<?php

namespace FizzBuzz\Kata;

class Kata
{
	public function isReady()
	{
		return true;
	}

	public function simpleFizzBuzz($n)
	{
		// $n is divisible by 3 or it has a 3 on it
		$isThree = ($n % 3 == 0) ? true : false;

		// $n is divisible by 5 or it has a 5 on it
		$isFive = ($n % 5 == 0) ? true : false;

		if($isThree && $isFive) {
			return 'FizzBuzz?';
		} elseif ($isFive) {
			return 'Buzz';
		} elseif ($isThree) {
			return 'Fizz';
		}
		return $n;
	}

	public function improvedFizzBuzz($n)
	{
		// $n is divisible by 3 or it has a 3 on it
		$isThree = ($n % 3 == 0 || stripos(strval($n), '3') !== false) ? true : false;

		// $n is divisible by 5 or it has a 5 on it
		$isFive = ($n % 5 == 0 || stripos(strval($n), '5') !== false) ? true : false;

		if($isThree && $isFive) {
			return 'FizzBuzz?';
		} elseif ($isFive) {
			return 'Buzz';
		} elseif ($isThree) {
			return 'Fizz';
		}
		return $n;
	}

}