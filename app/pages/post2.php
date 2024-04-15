<?php include '../app/pages/includes/header.php'; ?>

<main>

  <div class="container" style="">
        <div class="row my-2 justify-content-center">

          <?php

            $slug = $url[1] ?? null;

            if($slug){

                $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
                $row = query_row($query, ['slug'=>$slug]);

            }

            if(!empty($row)){ ?>

                <div class="col-md-12">
                    <div class="card mb-3">
                        <img src="<?=get_image($row['image'])?>" class="card-img-top" width="100%" style="object-fit:cover;">
                        <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary"><?=esc($row['category'] ?? 'Unknown')?></strong>
                        <h5 class="card-title"><?=esc($row['title'])?></h5>
                        <div class="mb-2 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
                        <p class="card-text"><?=nl2br(esc($row['content']))?></p>
                        </div>
                    </div>
                </div>

            <?php
            }else {
              echo "No items found!";
            }

          ?>

        </div>

</main>

<?php include '../app/pages/includes/footer.php'; ?>

</body>
</html>
