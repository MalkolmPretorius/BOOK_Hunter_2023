<?php

namespace App\Controllers\TagsController;

use App\Models\TagsModel;

function indexAction(\PDO $connexion, int $id)
{
    include_once "../app/models/tagsModel.php";
    $tags = TagsModel\findAll($connexion, $id);

    global $content, $title;
    ob_start();
    include '../app/views/tags/index.php';
    $content = ob_get_clean();
}
