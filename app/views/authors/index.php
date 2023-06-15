
<ul>
<?php  

foreach ($authors as $author) : ?>
<li>
    <a href="?authors=show&?ID=<?php echo $author['id']; ?>">
                <?php echo $author['firstname'].' '.$author['lastname']; ?>
            </a>
</li>
<?php endforeach;?>
</ul>