<?php

namespace club14
{
	function init()
	{
		eval(import_module('clubbase'));
		$clubinfo[14] = '肌肉兄贵';
		$clublist[14] = Array(
			'type' => 1,
			'probability' => 10000, 
			'skills' => Array(
				10,39,12,		//攻防成长增加
				40,41,42,43,44,45,46,
			)
		);
	}
}

?>
