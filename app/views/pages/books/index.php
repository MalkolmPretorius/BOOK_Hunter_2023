<article
            class="bg-gray-800 rounded-lg overflow-hidden shadow-lg relative"
          >
            <span
              class="bg-white text-gray-800 px-2 py-1 rounded-md text-sm font-semibold absolute top-2 left-2"
            >
            <?php  echo $book['category_name'];?>
            </span>
            <img
              class="w-full h-48 object-cover"
              src="https://source.unsplash.com/480x360/?movie"
              alt="Movie Cover"
            />
            <div class="p-4">
              <div class="pb-4">
                
                <?php   include_once '../app/models/tagsModel.php';
                  $tags = App\Models\TagsModel\findAllByBookId($connexion, $book['id']);
                   include '../app/views/tags/_index.php';?>

              </div>
              <h3 class="text-xl font-bold"><?php echo $book['title'];?></h3>
              <h4 class="text mb-2 text-gray-400"><?php echo $book['author_id']; ?></h4>
              <div class="flex items-center mb-2">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                <span><?php echo $book['note']; ?></span>
              </div>

              <p class="text-gray-400">
                <?php echo $book['resume']; ?>
              </p>

              <a
                href="book.html"
                class="inline-block mt-4 bg-red-500 hover:bg-red-800 rounded-full px-4 py-2 text-white"
              >
                More details
              </a>
            </div>
          </article>

          