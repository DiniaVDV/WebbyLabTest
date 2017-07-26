<?php

function __autoload($name){
	// $classPath = $_SERVER['DOCUMENT_ROOT'] . '/180717/' . 'Classes' . '/';
	$str = $_SERVER['SCRIPT_FILENAME'];
	$arr = explode('/', $str);
	unset($arr[count($arr)-1]);
	$classPath = implode('/', $arr);
	$file = $classPath . '/Classes/' . $name . '.php';

	if(file_exists($file)){
		require_once($file);
	}else{
		die('Class not found!');
	}
}