<?php
	function name()
	{
		$num_arg=func_num_args();
		echo "NO.of args: ".$num_arg;
	}
	name(1,2,3);
?>