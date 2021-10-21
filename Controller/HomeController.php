<?php

class  HomeController extends Controller {

    public function showHome() {
        require_once './View/_partials/header.php';
        require_once './View/_partials/footer.php';
    }
}