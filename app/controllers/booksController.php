<?php

namespace App\Controllers\BooksController;

use App\Models\BooksModel;

function indexAction(\PDO $connexion)
{
    include_once "../app/models/booksModel.php";
    $books = BooksModel\findAll($connexion);

    global $content, $title;
    $title = "Liste des livres";
    ob_start();
    include '../app/views/books/index.php';
    $content = ob_get_clean();
}

