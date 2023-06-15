<?php  

namespace App\Models\AuthorsModel;

function findAll(\PDO $connexion)
{
    $sql = "SELECT a.*,ROUND(avg(un.note),1) as note 
    FROM authors a 
    JOIN books b ON a.id = b.author_id
    LEFT JOIN users_notations un ON  un.book_id = b.id
    GROUP BY a.id
    ORDER BY note desc
    LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}