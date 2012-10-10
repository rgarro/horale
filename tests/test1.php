<?php
require_once('../onceUponTime/horale.class.php');
/**
 * Basic Tests
 */
class Test1 extends PHPUnit_Framework_TestCase
{

	protected $horale;
	
	protected function setUp()
	{
		$this->horale = new horale();
		echo "starts...";
	}
	
	protected function tearDown(){
		unset($this->horale);
		echo " ends...";
	}
		
	public function testReplay()
	{
		$x = "123queso";
		echo $this->horale->getTime();
		$this->assertInstanceOf('horale',$this->horale);
		$this->assertEquals($x,$this->horale->getTime());
		return "ja ja ja ja ";	
	}	
}
