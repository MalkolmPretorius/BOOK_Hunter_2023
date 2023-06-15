<?php  

foreach ($books as $book) : ?>
    <a href="?books=show&?ID=<?php echo $book['id']; ?>">
                <?php echo $book['title']; ?>
            </a>
<?php endforeach;?>