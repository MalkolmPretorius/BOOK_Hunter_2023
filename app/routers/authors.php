<?php  
use App\Controllers\AuthorsController;
include '../app/controllers/authorsController.php';

switch (isset($_GET['authors'])) :
    default:
    include_once '../app/controllers/authorsController.php';
    AuthorsController\indexAction($connexion);
        break;
    endswitch;