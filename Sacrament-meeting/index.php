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
include "model/hymns.model.php";


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
            $_SESSION["calling"] = $getAnswer["calling"];
            header("Location: .?action=home-agendas");
        }else {
            $message = '<strong>Sorry,</strong> User or password not found.';
            include ('views/login.php');
        }
        break;
        
    case 'homepage':
        $content = "views/home.php";
        include "views/template.php";
        break;

    case 'home-agendas':
        if ($_SESSION["startSession"] == "ok") {
            $calling = $_SESSION['calling'];
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
            $calling = $_SESSION['calling'];
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

    case 'create-new-agenda-page':
        if ($_SESSION["startSession"] == "ok") { 
            $calling = $_SESSION['calling'];
            $content = "views/create-agenda.php";
            $item = null;
            $valor = null;
            $table = "public.hymns";
            $hymns = get_hymns($table, $item, $valor);
            include "views/template.php";
        }else{
            header("Location: .?action=homepage");
        }
        
        break;

    case 'create-new-agenda':
        if ($_SESSION["startSession"] == "ok") { 
            $calling = $_SESSION['calling'];
            $table = "public.agenda";
            $agendaDate = $_POST['agenda_date'];
            $f_1 = str_replace('/', '-', $agendaDate);
            $agenda_date = date('Y-m-d', strtotime($f_1));
            $data = array('user_id' => $_POST['user_id'],
                          'agenda_date' => $agenda_date,
                          'presiding_leader' => $_POST['presiding_leader'],
                          'directing_leader' => $_POST['directing_leader'],
                          'announcements' => $_POST['announcements'],
                          'opening_hymn' => $_POST['opening_hymn'],
                          'special_hymn' => $_POST['special_hymn'],
                          'opening_prayer' => $_POST['opening_prayer'],
                          'speakers' => $_POST['speakers'],
                          'closing_prayer' => $_POST['closing_prayer'],
                          'ward_business' => $_POST['ward_business'],
                          'sacrament_hymn' => $_POST['sacrament_hymn'],
                          'closing_hymn' => $_POST['closing_hymn']);

            $response = add_agenda($table, $data);
            /*if($response == "ok"){

                    echo'<script>

                        swal({
                              type: "success",
                              title: "Agenda was added successfully",
                              showConfirmButton: true,
                              confirmButtonText: "Close"
                              }).then(function(result){
                                        if (result.value) {

                                        window.location = ".?action=home-agendas";

                                        }
                                    })

                        </script>';

                } else{

                echo'<script>

                    swal({
                          type: "error",
                          title: "There was an error saving your agenda, please try again",
                          showConfirmButton: true,
                          confirmButtonText: "Close"
                          }).then(function(result){
                            if (result.value) {

                            window.location = ".?action=home-agendas";

                            }
                        })

                </script>';
            }*/

            header("Location: .?action=home-agendas");
        }else{
            header("Location: .?action=homepage");
        }
        
        break;

    case 'logout':
        session_destroy();
        header("Location: .?action=homepage");
        break;
      }