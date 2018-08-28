<?php

	function edad($cumple){
		$cum = strtotime($cumple);
		$now = strtotime('now');
		
		$edad = ($now - $cum) / 31536000;
		
		return floor($edad);
	}

	echo "YO TENGO " . edad('1962-4-5'). " años";