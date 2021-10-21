<?php
use App\Manager\CategoryManager;
use App\Repository\RoleManager;
use App\Repository\UserManager;

include '../View/_partials/header.php';

if (isset($_SESSION['id'], $_SESSION['pseudo'], $_SESSION['key'])) {
    $session = true;

    $userManager = new UserManager();
    $user = $userManager->searchUser($_SESSION['pseudo']);
    $roleManager = new RoleManager();
    $role = $roleManager->searchRole($user->getRoleFk());

    $userRole = $role->getId();

}


else {
    header("location:index.php");
}

include '../View/_partials/footer.php';

