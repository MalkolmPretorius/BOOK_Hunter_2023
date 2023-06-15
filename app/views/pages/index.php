<h2 class="text-2xl font-bold mb-4">Popular books</h2>
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php  foreach($books as $book):
                include '../app/views/books/_index.php';
            endforeach;?>

        </div>

        <h2 class="text-2xl font-bold  mb-4">Popular authors</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php  foreach($authors as $author):
                include '../app/views/authors/_index.php';
            endforeach;?>
        </div>    
        