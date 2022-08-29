<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/include.php';

else{

    $ctrl = new HomeController();
    $ctrl->showHome();
}
