<?php  

namespace App\Models\BooksModel;

function findAll(\PDO $connexion)
{
    $sql = "SELECT  b.*, c.name as category_name, ROUND(avg(un.note),1) as note 
    FROM books b
    LEFT JOIN users_notations un ON  un.book_id = b.id
    JOIN categories c ON c.id = b.category_id
    GROUP BY b.id
    ORDER BY note desc
    LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

