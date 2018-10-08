<?php

use FizzBuzz\Kata\Kata;

use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

	const START = 1;
	const END   = 100;

	private $kata;
	
	public function setUp()
	{
		$this->kata = new Kata();
	}
	
	public function testStart()
	{
		$this->assertTrue($this->kata->isReady());
	}

	public function testSimpleFizzBuzz()
	{
		for($i = self::START; $i <= self::END; $i++) {
			if(($i % 3 == 0) && ($i % 5 == 0)) {
				$this->assertEquals('FizzBuzz?', $this->kata->simpleFizzBuzz($i));
			} elseif ($i % 5 == 0) {
				$this->assertEquals('Buzz', $this->kata->simpleFizzBuzz($i));
			} elseif($i % 3 == 0) {
				$this->assertEquals('Fizz', $this->kata->simpleFizzBuzz($i));
			} else {
				$this->assertEquals($i, $this->kata->simpleFizzBuzz($i));
			}
		}
	}

	public function testImprovedFizzBuzz()
	{
		for($i = self::START; $i <= self::END; $i++) {
			if(($i % 3 == 0 || stripos(strval($i), '3') !== false) && ($i % 5 == 0 || stripos(strval($i), '5') !== false)) {
				$this->assertEquals('FizzBuzz?', $this->kata->improvedFizzBuzz($i));
			} elseif ($i % 5 == 0 || stripos(strval($i), '5') !== false) {
				$this->assertEquals('Buzz', $this->kata->improvedFizzBuzz($i));
			} elseif($i % 3 == 0 || stripos(strval($i), '3') !== false) {
				$this->assertEquals('Fizz', $this->kata->improvedFizzBuzz($i));
			} else {
				$this->assertEquals($i, $this->kata->improvedFizzBuzz($i));
			}
		}
	}




}