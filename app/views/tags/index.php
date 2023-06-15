<div class="bg-gray-700 rounded-lg shadow-lg p-4 mt-4">
          <h2 class="font-bold text-lg mb-4">Tags</h2>
          <div class="tag-cloud">
          
          <ul>
    <?php foreach ($tags as $tag) : ?>
        <li>
            <a href="?tagsID=<?php echo $tag['id']; ?>">
                <?php echo $tag['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

          </div>
        </div>