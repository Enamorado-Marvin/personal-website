<?php

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}
$title  = "Welcome to my site";
switch ($action) {
  case 'home':
    $title = "Welcome to my site";
    $activeHome = "active";
    $content = "views/home.php";
    include "views/template.php";    
    break;
  
  case 'assignments' :
    $activeAssig = "active";
    $title = "Comming Soon";
    $content = "views/assignments.php";
    include "views/template.php";
    break;
}