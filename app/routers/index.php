<?php  
use App\Controllers\PagesController;

if (isset($_GET['books'])) :
    include_once '../app/routers/books.php';
else :
    include_once '../app/controllers/pagesController.php';
    PagesController\homeAction($connexion);
endif;