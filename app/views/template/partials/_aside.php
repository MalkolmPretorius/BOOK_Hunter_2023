<aside class="w-full md:w-1/4 p-3">
        <div class="bg-gray-700 rounded-lg shadow-lg p-4">
          <h2 class="font-bold text-lg mb-4">Categories</h2>
          <ul class="list-reset">
            <li>
              <a class="text-gray-300 hover:text-white" href="#">Action</a>
            </li>
            <li>
              <a class="text-gray-300 hover:text-white" href="#">Comédie</a>
            </li>
            <li>
              <a class="text-gray-300 hover:text-white" href="#">Drame</a>
            </li>
            <li>
              <a class="text-gray-300 hover:text-white" href="#"
                >Science-fiction</a
              >
            </li>
          </ul>
        </div>
        
        <?php
        use App\Models\TagsModel;
            include_once '../app/models/tagsModel.php';
            $tags = App\Models\TagsModel\findAll($connexion);
            include '../app/views/tags/index.php';
          ?>
        
     
      </aside>
