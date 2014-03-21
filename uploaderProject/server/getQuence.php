<?php

	function convertToArr($path){
		$str = file_get_contents($path);
		if(!$str) return array();
		$arr = explode(",",$str);
		for($i = 0,$ilen = count($arr); $i < $ilen; $i++){
			if($arr[$i] == "h.pkg"){
				$arr[$i] .= "*1";
			}else{
				$arr[$i] .= "*0";
			}
		}
		return $arr;
	}
	$path = "./upload/grade.txt";
	$arr = file_exists($path) ? convertToArr($path) : "";
	echo json_encode($arr);
