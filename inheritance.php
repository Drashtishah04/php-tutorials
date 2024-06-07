<?php
class demo
{
	public $a;
	function print1($a)
	{
		$this->a=$a;
	}
}
class test extends demo{
	function demo()
	{
		echo $this->a;
	}
}
$obj=new test();
$obj->print1(20);
$obj->demo();
?>