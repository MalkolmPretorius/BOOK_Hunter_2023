 <?php 

 if (count($tags) > 0) :
 foreach ($tags as $tag) : ?>
        <span
                  class="bg-gray-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-2"
                >
            <a href="?tagsID=<?php echo $tag['id']; ?>">
                <?php echo $tag['name']; ?>
            </a>
        </span>
    <?php endforeach;
    endif;
    ?>
    <span
                  class="py-1  text-sm"
                >&nbsp;</span>
        
        
