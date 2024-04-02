<?php include '../app/pages/includes/header.php'; ?>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">News</h1>
        <p class="lead text-body-secondary">In this section, you will find current news highlights on one of the most pressing challenges facing our planet: climate change. Focusing our attention on Goal 13 of the UN's 2030 Agenda, "Climate Action," we aim to explore how this global phenomenon, accelerated by human activities such as the burning of fossil fuels and deforestation, is significantly impacting Mexico and the world.</p>
        <p>
          <a href="#" class="btn btn-success my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="container" style="">
        <div class="row">

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
