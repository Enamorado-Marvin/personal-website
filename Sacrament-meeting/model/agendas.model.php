<?php

function get_agendas($table, $item, $value){
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

function get_agenda_created_by($table){
	$db = get_db();

		$stmt = $db->prepare("SELECT agenda.id, public.user.display_name FROM $table
							INNER JOIN public.user on agenda.user_id = public.user.id");
		
		$stmt -> execute();
		$nombre = $stmt -> fetch();
		return $nombre;

}