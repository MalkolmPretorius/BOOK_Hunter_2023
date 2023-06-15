<?php  

namespace App\Controllers\PagesController;

use App\Models\BooksModel;
use App\Models\AuthorsModel;

function homeAction(\PDO $connexion)
{
    include_once '../app/models/authorsModel.php';
    include_once '../app/models/booksModel.php';
    $books = BooksModel\findAll($connexion);
    $authors = AuthorsModel\findAll($connexion);

    global $content, $title;
    ob_start();
    include '../app/views/pages/index.php';
    $content = ob_get_clean();
}

