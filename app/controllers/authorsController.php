<?php  

namespace App\Controllers\AuthorsController;
use App\Models\AuthorsModel;


function indexAction(\PDO $connexion)
{
    include_once "../app/models/authorsModel.php";
    $authors = AuthorsModel\findAll($connexion);

    global $content, $title;
    $title = "Liste des auteurs";
    ob_start();
    include '../app/views/authors/index.php';
    $content = ob_get_clean();
}