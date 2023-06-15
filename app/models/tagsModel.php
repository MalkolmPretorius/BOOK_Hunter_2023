<?php  

namespace App\Models\TagsModel;

function findAll(\PDO $connexion)
{
    $sql = "SELECT *
            FROM tags t
            ORDER BY name ASC
            LIMIT 5;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findAllByBookId(\PDO $connexion, int $id)
{
    $sql = 'SELECT t.*, bht.book_id
            FROM tags t
            JOIN books_has_tags bht ON t.id = bht.tag_id
            WHERE bht.book_id = :id
            ORDER BY name ASC;';
     $rs = $connexion->prepare($sql);
     $rs->bindValue(':id', $id, \PDO::PARAM_INT);
     $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }