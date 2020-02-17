<?php

function get_hymns($table, $item, $value){
	$db = get_db();
	if($item != null){

		$stmt = $db->prepare("SELECT * FROM $table WHERE $item = :$item");
		$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetchAll();
	}else{
		$stmt = $db->prepare("SELECT * FROM $table");
		$stmt -> execute();
		return $stmt -> fetchAll();
	}
	$stmt -> close();
	$stmt = null;
}