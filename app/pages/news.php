<?php include '../app/pages/includes/header.php'; ?>

<main>

  <div class="container" style="">
        <div class="row">

          <center><h1>News</h1></center>
          
          <?php

            $limit = 10;
            $offset = ($PAGE['page_number'] - 1) * $limit;

            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit $limit offset $offset";
            $rows = query($query);
            if($rows){

              foreach($rows as $row){
                include '../app/pages/includes/post-card.php';
              }

            }else {
              echo "No items found!";
            }

            

          ?>

        </div>
        <div class="col-md-12 mb-4">
          <a href="<?=$PAGE['first_link']?>">
            <button class="btn btn-success">First Page</button>
          </a>
          <a href="<?=$PAGE['prev_link']?>">
            <button class="btn btn-success">Prev Page</button>
          </a>
          <a href="<?=$PAGE['next_link']?>">
            <button class="btn btn-success float-end">Next Page</button>
          </a>
        </div>
      </div>



</main>

<?php include '../app/pages/includes/footer.php'; ?>

</body>
</html>
