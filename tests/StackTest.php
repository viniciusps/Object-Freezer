<?php

class StackTest extends PHPUnit_Framework_TestCase
{
	public function testPushAndPop()
	{
		$stack = array();
		$this->assertEquals(0,count($stack));
		array_push($stack,'foo');
		$this->assertEquals(1,count($stack));
		$this->assertEquals('foo',array_pop($stack));
		$this->assertEquals(0,count($stack));
		$this->assertTrue(false);
	}
}
?>
		
