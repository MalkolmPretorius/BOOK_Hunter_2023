<?php  
use App\Controllers\BooksController;
include '../app/controllers/booksController.php';

switch (isset($_GET['books'])) :
    default:
    include_once '../app/controllers/booksController.php';
    BooksController\indexAction($connexion);
        break;
    endswitch;