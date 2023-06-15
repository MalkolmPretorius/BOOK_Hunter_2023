<ul>
<?php  

foreach ($books as $book) : ?>
<li>
    <a href="?books=show&?ID=<?php echo $book['id']; ?>">
                <?php echo $book['title']; ?>
            </a>
</li>
<?php endforeach;?>
</ul>