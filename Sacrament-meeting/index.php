<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}

include "model/dbConnect.php";
include "model/users.php";
include "model/agendas.model.php";


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        if(isset($_SESSION['public.user'])) {
            $action = 'home-agendas';
        } else {
            $action = 'homepage';
        }
    }
}

switch ($action) {
    case 'login-page':
      $content = "views/login.php";
      include "views/template.php";
      break;
        
        
    case 'login':
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');

        $item = "username";
        $value = $username;
        $table = "public.user";
        $getAnswer = get_users($table, $item, $value);
        if ($getAnswer["username"] == $username && $getAnswer["password"] == $password) {
            $_SESSION["startSession"] = "ok";
            $_SESSION["id"] = $getAnswer["id"];
            $_SESSION["display_name"] = $getAnswer["display_name"];
            $_SESSION["username"] = $getAnswer["username"];
            header("Location: .?action=home-agendas");
        }else {
            $message = '<strong>Sorry,</strong> User or password not found.';
            include ('login.php');
        }
        break;
        
    case 'homepage':
        $content = "views/home.php";
        include "views/template.php";
        break;

    case 'home-agendas':
        if ($_SESSION["startSession"] == "ok") {
            $table = "agenda";
            $item = NULL;
            $value = NULL;
            $agendas = get_agendas($table, $item, $value);            
            $content = "views/agendas.php";
            include "views/template.php";
        }else{
            header("Location: .?action=homepage");
        }
        
        break;

    case 'details':
        if ($_SESSION["startSession"] == "ok") {
            $table = "agenda";
            $item = "id";
            $value = filter_input(INPUT_GET, "id");
            $agendas = get_agendas($table, $item, $value);        
            $content = "views/agenda.php";
            include "views/template.php";
        }else{
            header("Location: .?action=homepage");
        }
        
        break;

    case 'logout':
        session_destroy();
        header("Location: .?action=homepage");
        break;
      }