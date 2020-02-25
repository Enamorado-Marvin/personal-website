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

function add_agenda($table, $data){
		$db = get_db();
		$stmt = $db->prepare("INSERT INTO $table(user_id, speakers, opening_hymn, announcements, directing_leader, presiding_leader, opening_prayer, closing_prayer, agenda_date, sacrament_hymn, special_hymn, closing_hymn, ward_business) VALUES (:user_id, :speakers, :opening_hymn, :announcements, :directing_leader, :presiding_leader, :opening_prayer, :closing_prayer, :agenda_date, :sacrament_hymn, :special_hymn, :closing_hymn, :ward_business)");

		$stmt->bindParam(":user_id", $data["user_id"], PDO::PARAM_INT);
		$stmt->bindParam(":speakers", $data["speakers"], PDO::PARAM_INT);
		$stmt->bindParam(":opening_hymn", $data["opening_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":announcements", $data["announcements"], PDO::PARAM_STR);
		$stmt->bindParam(":directing_leader", $data["directing_leader"], PDO::PARAM_STR);
		$stmt->bindParam(":presiding_leader", $data["presiding_leader"], PDO::PARAM_STR);
		$stmt->bindParam(":opening_prayer", $data["opening_prayer"], PDO::PARAM_STR);
		$stmt->bindParam(":closing_prayer", $data["closing_prayer"], PDO::PARAM_STR);
		$stmt->bindParam(":agenda_date", $data["agenda_date"], PDO::PARAM_STR);
		$stmt->bindParam(":sacrament_hymn", $data["sacrament_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":special_hymn", $data["special_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":closing_hymn", $data["closing_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":ward_business", $data["ward_business"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	function update_agenda($table, $data){
		$db = get_db();
		$stmt = $db->prepare("UPDATE $table SET user_id = :user_id, speakers=:speakers, opening_hymn=:opening_hymn, announcements=:announcements, directing_leader=:directing_leader, presiding_leader=:presiding_leader, opening_prayer=:opening_prayer, closing_prayer=:closing_prayer, agenda_date=:agenda_date, sacrament_hymn=:sacrament_hymn, special_hymn=:special_hymn, closing_hymn=:closing_hymn, ward_business=:ward_business WHERE id=:id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":user_id", $data["user_id"], PDO::PARAM_INT);
		$stmt->bindParam(":speakers", $data["speakers"], PDO::PARAM_INT);
		$stmt->bindParam(":opening_hymn", $data["opening_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":announcements", $data["announcements"], PDO::PARAM_STR);
		$stmt->bindParam(":directing_leader", $data["directing_leader"], PDO::PARAM_STR);
		$stmt->bindParam(":presiding_leader", $data["presiding_leader"], PDO::PARAM_STR);
		$stmt->bindParam(":opening_prayer", $data["opening_prayer"], PDO::PARAM_STR);
		$stmt->bindParam(":closing_prayer", $data["closing_prayer"], PDO::PARAM_STR);
		$stmt->bindParam(":agenda_date", $data["agenda_date"], PDO::PARAM_STR);
		$stmt->bindParam(":sacrament_hymn", $data["sacrament_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":special_hymn", $data["special_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":closing_hymn", $data["closing_hymn"], PDO::PARAM_INT);
		$stmt->bindParam(":ward_business", $data["ward_business"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	function delete_agenda($table, $data){
		$db = get_db();
		$stmt = $db->prepare("DELETE FROM $table WHERE id = :id");
		$stmt -> bindParam(":id", $data, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null; 
	}
