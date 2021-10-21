<?php

use App\Manager\CategoryManager;
use App\Repository\SubjectManager;
use App\Repository\UserManager;

include '../View/_partials/header.php';

if (isset($_GET['category'])) {
    $categoryManager = new CategoryManager();
    ?>


    <?php
    include '../View/_partials/footer.php';
}
else
{
    header("location:index.php");
}